<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamsResponseBody;

use AlibabaCloud\Tea\Model;

class streams extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $app;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $pushDomain;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'status'      => 'Status',
        'deviceId'    => 'DeviceId',
        'protocol'    => 'Protocol',
        'playDomain'  => 'PlayDomain',
        'height'      => 'Height',
        'groupId'     => 'GroupId',
        'width'       => 'Width',
        'app'         => 'App',
        'enabled'     => 'Enabled',
        'pushDomain'  => 'PushDomain',
        'name'        => 'Name',
        'createdTime' => 'CreatedTime',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
