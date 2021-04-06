<?php
/*
 * GBALib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GBALib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Comment implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $attachments public property
     */
    public $attachments;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $description Initialization value for $this->description
     * @param array  $attachments Initialization value for $this->attachments
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->description = func_get_arg(0);
            $this->attachments = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['description'] = $this->description;
        $json['attachments'] = $this->attachments;

        return $json;
    }
}