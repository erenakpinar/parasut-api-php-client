<?php

namespace Parasut\Model\TrackableJob;


use Parasut\Entity\TrackableJob\Request\ShowTrackableJob;
use Parasut\Service\TrackableJob;
use Parasut\Entity\TrackableJob\Response;

class Show extends TrackableJob
{
    /**
     * @param ShowTrackableJob $trackableJob
     * @return Response\ShowTrackableJob
     */
    protected function request(ShowTrackableJob $trackableJob)
    {
        return $this->response(parent::show($trackableJob->getId()));
    }

    /**
     * @param $response
     * @return Response\ShowTrackableJob
     */
    protected function response($response)
    {
        $job = new Response\ShowTrackableJob();

        $data = $response->data;
        $job->setId($data->id);
        $job->setType($data->type);

        $attributes = $data->attributes;

        $job->setStatus($attributes->status);

        if (isset($attributes->url)) {
            $job->setUrl($attributes->url);
        }

        if (count($attributes->errors) > 0) {
            foreach ($attributes->errors as $error) {
                $job->addError($error);
            }
        }

        return $job;
    }
}