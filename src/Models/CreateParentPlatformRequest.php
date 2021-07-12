<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateParentPlatformRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $port;

    /**
     * @var bool
     */
    public $clientAuth;

    /**
     * @var string
     */
    public $clientUsername;

    /**
     * @var string
     */
    public $clientPassword;

    /**
     * @var bool
     */
    public $autoStart;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'name'           => 'Name',
        'description'    => 'Description',
        'protocol'       => 'Protocol',
        'gbId'           => 'GbId',
        'ip'             => 'Ip',
        'port'           => 'Port',
        'clientAuth'     => 'ClientAuth',
        'clientUsername' => 'ClientUsername',
        'clientPassword' => 'ClientPassword',
        'autoStart'      => 'AutoStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->clientAuth) {
            $res['ClientAuth'] = $this->clientAuth;
        }
        if (null !== $this->clientUsername) {
            $res['ClientUsername'] = $this->clientUsername;
        }
        if (null !== $this->clientPassword) {
            $res['ClientPassword'] = $this->clientPassword;
        }
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateParentPlatformRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ClientAuth'])) {
            $model->clientAuth = $map['ClientAuth'];
        }
        if (isset($map['ClientUsername'])) {
            $model->clientUsername = $map['ClientUsername'];
        }
        if (isset($map['ClientPassword'])) {
            $model->clientPassword = $map['ClientPassword'];
        }
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }

        return $model;
    }
}
