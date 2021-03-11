<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformsResponseBody\platforms;
use AlibabaCloud\Tea\Model;

class DescribeParentPlatformsResponseBody extends Model
{
    /**
     * @var platforms[]
     */
    public $platforms;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageCount;
    protected $_name = [
        'platforms'  => 'Platforms',
        'totalCount' => 'TotalCount',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'pageCount'  => 'PageCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platforms) {
            $res['Platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['Platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParentPlatformsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Platforms'])) {
            if (!empty($map['Platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['Platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? platforms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }

        return $model;
    }
}
