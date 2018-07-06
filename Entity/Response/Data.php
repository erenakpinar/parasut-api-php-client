<?php

namespace Parasut\Entity\Response;


class Data
{
    protected $id;
    protected $type;
    protected $attributes;
    protected $relationships;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return mixed
     */
    public function getRelationships()
    {
        return $this->relationships;
    }

    /**
     * @param mixed $relationships
     */
    public function setRelationships($relationships)
    {
        $this->relationships = $relationships;
    }
}