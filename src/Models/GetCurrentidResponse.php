<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Acm\Models;

use AlibabaCloud\Tea\Model;

class GetCurrentidResponse extends Model
{
    /**
     * @var string
     */
    public $reqMsgId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    // 创建时间，ISO8601格式
    /**
     * @var string
     */
    public $createTime;

    // 身份实体所属企业
    /**
     * @var string
     */
    public $customer;

    // 身份实体ID
    /**
     * @var string
     */
    public $id;

    // 身份实体类型，OPERATOR(操作员)或SERVICE(服务账号)
    /**
     * @var string
     */
    public $type;

    // 最近一次修改时间，ISO8601格式
    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'createTime' => 'create_time',
        'customer'   => 'customer',
        'id'         => 'id',
        'type'       => 'type',
        'updateTime' => 'update_time',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('customer', $this->customer, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->customer) {
            $res['customer'] = $this->customer;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['update_time'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCurrentidResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['create_time'])) {
            $model->createTime = $map['create_time'];
        }
        if (isset($map['customer'])) {
            $model->customer = $map['customer'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['update_time'])) {
            $model->updateTime = $map['update_time'];
        }

        return $model;
    }
}