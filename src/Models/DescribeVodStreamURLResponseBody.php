<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodStreamURLResponseBody extends Model
{
    /**
     * @var string
     */
    public $outProtocol;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $txId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'outProtocol' => 'OutProtocol',
        'port'        => 'Port',
        'requestId'   => 'RequestId',
        'txId'        => 'TxId',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->txId) {
            $res['TxId'] = $this->txId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodStreamURLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TxId'])) {
            $model->txId = $map['TxId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
