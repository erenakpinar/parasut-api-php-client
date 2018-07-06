<?php

namespace Parasut;

class ParasutException extends \Exception {

    public $details;

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}