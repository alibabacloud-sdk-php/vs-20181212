<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ContinuousMoveRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pan;

    /**
     * @var string
     */
    public $tilt;

    /**
     * @var string
     */
    public $zoom;
    protected $_name = [
        'id'      => 'Id',
        'ownerId' => 'OwnerId',
        'pan'     => 'Pan',
        'tilt'    => 'Tilt',
        'zoom'    => 'Zoom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pan) {
            $res['Pan'] = $this->pan;
        }
        if (null !== $this->tilt) {
            $res['Tilt'] = $this->tilt;
        }
        if (null !== $this->zoom) {
            $res['Zoom'] = $this->zoom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinuousMoveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Pan'])) {
            $model->pan = $map['Pan'];
        }
        if (isset($map['Tilt'])) {
            $model->tilt = $map['Tilt'];
        }
        if (isset($map['Zoom'])) {
            $model->zoom = $map['Zoom'];
        }

        return $model;
    }
}
