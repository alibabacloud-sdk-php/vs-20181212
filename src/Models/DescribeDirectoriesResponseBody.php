<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoriesResponseBody\directories;
use AlibabaCloud\Tea\Model;

class DescribeDirectoriesResponseBody extends Model
{
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
    public $totalCount;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var directories[]
     */
    public $directories;
    protected $_name = [
        'pageNum'     => 'PageNum',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
        'pageCount'   => 'PageCount',
        'directories' => 'Directories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->directories) {
            $res['Directories'] = [];
            if (null !== $this->directories && \is_array($this->directories)) {
                $n = 0;
                foreach ($this->directories as $item) {
                    $res['Directories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDirectoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['Directories'])) {
            if (!empty($map['Directories'])) {
                $model->directories = [];
                $n                  = 0;
                foreach ($map['Directories'] as $item) {
                    $model->directories[$n++] = null !== $item ? directories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
