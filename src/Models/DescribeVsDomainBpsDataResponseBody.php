<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainBpsDataResponseBody\bpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainBpsDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var bpsDataPerInterval
     */
    public $bpsDataPerInterval;
    protected $_name = [
        'endTime'            => 'EndTime',
        'requestId'          => 'RequestId',
        'domainName'         => 'DomainName',
        'startTime'          => 'StartTime',
        'dataInterval'       => 'DataInterval',
        'bpsDataPerInterval' => 'BpsDataPerInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->bpsDataPerInterval) {
            $res['BpsDataPerInterval'] = null !== $this->bpsDataPerInterval ? $this->bpsDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsDomainBpsDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['BpsDataPerInterval'])) {
            $model->bpsDataPerInterval = bpsDataPerInterval::fromMap($map['BpsDataPerInterval']);
        }

        return $model;
    }
}
