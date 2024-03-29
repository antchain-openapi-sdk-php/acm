<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Acm\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceaccountOnepartyRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    // 租户ID
    /**
     * @var string
     */
    public $tenantId;

    // 系统来源
    /**
     * @var string
     */
    public $sourceSystem;
    protected $_name = [
        'authToken'    => 'auth_token',
        'tenantId'     => 'tenant_id',
        'sourceSystem' => 'source_system',
    ];

    public function validate()
    {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('sourceSystem', $this->sourceSystem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->sourceSystem) {
            $res['source_system'] = $this->sourceSystem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceaccountOnepartyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['tenant_id'])) {
            $model->tenantId = $map['tenant_id'];
        }
        if (isset($map['source_system'])) {
            $model->sourceSystem = $map['source_system'];
        }

        return $model;
    }
}
