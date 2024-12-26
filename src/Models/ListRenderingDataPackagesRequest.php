<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ListRenderingDataPackagesRequest extends Model
{
    /**
     * @example dp-449ea3d16c0841b8bf33ec5bbc86a152
     *
     * @var string
     */
    public $dataPackageId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @example available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'dataPackageId' => 'DataPackageId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'size'          => 'Size',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRenderingDataPackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}