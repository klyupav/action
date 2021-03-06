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
class MRequest1 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps company_id
     * @var integer $companyId public property
     */
    public $companyId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @var string $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps employee_id
     * @var integer $employeeId public property
     */
    public $employeeId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps booker_id
     * @var integer $bookerId public property
     */
    public $bookerId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps type_id
     * @var integer $typeId public property
     */
    public $typeId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $subject public property
     */
    public $subject;

    /**
     * @todo Write general description for this property
     * @required
     * @var \GBALib\Models\Comment $comment public property
     */
    public $comment;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $companyId  Initialization value for $this->companyId
     * @param string  $createdAt  Initialization value for $this->createdAt
     * @param integer $employeeId Initialization value for $this->employeeId
     * @param integer $bookerId   Initialization value for $this->bookerId
     * @param integer $typeId     Initialization value for $this->typeId
     * @param string  $subject    Initialization value for $this->subject
     * @param Comment $comment    Initialization value for $this->comment
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->companyId  = func_get_arg(0);
            $this->createdAt  = func_get_arg(1);
            $this->employeeId = func_get_arg(2);
            $this->bookerId   = func_get_arg(3);
            $this->typeId     = func_get_arg(4);
            $this->subject    = func_get_arg(5);
            $this->comment    = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['company_id']  = $this->companyId;
        $json['created_at']  = $this->createdAt;
        $json['employee_id'] = $this->employeeId;
        $json['booker_id']   = $this->bookerId;
        $json['type_id']     = $this->typeId;
        $json['subject']     = $this->subject;
        $json['comment']     = $this->comment;

        return $json;
    }
}
