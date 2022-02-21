<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigListResponseBody\AIConfigList;

use AlibabaCloud\Tea\Model;

class AIConfigList extends Model
{
    /**
     * @var int
     */
    public $captureInterval;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $configs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $features;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'captureInterval' => 'CaptureInterval',
        'configId'        => 'ConfigId',
        'configs'         => 'Configs',
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'features'        => 'Features',
        'instanceId'      => 'InstanceId',
        'instanceType'    => 'InstanceType',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->captureInterval) {
            $res['CaptureInterval'] = $this->captureInterval;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptureInterval'])) {
            $model->captureInterval = $map['CaptureInterval'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
