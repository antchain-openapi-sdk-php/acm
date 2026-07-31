<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\Acm\Models;

use AlibabaCloud\Tea\Model;

class UpdateTenantCountryRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'tenantId' => 'tenant_id',
        'countryCode' => 'country_code',
    ];
    public function validate() {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('countryCode', $this->countryCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateTenantCountryRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['country_code'])){
            $model->countryCode = $map['country_code'];
        }
        return $model;
    }
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

    // 国家代码
    /**
     * @var string
     */
    public $countryCode;

}
