<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GotoPresetRequest extends Model
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
    public $presetId;
    protected $_name = [
        'id'       => 'Id',
        'ownerId'  => 'OwnerId',
        'presetId' => 'PresetId',
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
        if (null !== $this->presetId) {
            $res['PresetId'] = $this->presetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GotoPresetRequest
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
        if (isset($map['PresetId'])) {
            $model->presetId = $map['PresetId'];
        }

        return $model;
    }
}
