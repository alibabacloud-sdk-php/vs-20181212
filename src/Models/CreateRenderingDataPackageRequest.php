<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateRenderingDataPackageRequest extends Model
{
    /**
     * @example testdescription
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'description'         => 'Description',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRenderingDataPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}