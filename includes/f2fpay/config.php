<?php
$config = array (
	//签名方式,默认为RSA2(RSA2048)
	'sign_type' => "RSA2",

	//支付宝公钥
	'alipay_public_key' => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDI6d306Q8fIfCOaTXyiUeJHkrIvYISRcc73s3vF1ZT7XN8RNPwJxo8pWaJMmvyTn9N4HQ632qJBVHf8sxHi/fEsraprwCtzvzQETrNRwVxLO5jVmRGi60j8Ue1efIlzPXV9je9mkjzOmdssymZkh2QhUrCmZYI/FCEa3/cNMW0QIDAQAB",

	//商户私钥
	'merchant_private_key' => "MIICdQIBADANBgkqhkiG9w0BAQEFAASCAl8wggJbAgEAAoGBAJL8lwDY/0vVjReUy7akMZ/ldmzcih6cn5BLctOBp1TbI02+zQzSldSXQQeLpbvIc/6mwYlAV37SRLY+9nUeF7/9T7E09aWew4m61eGatyFkw5FmZf3MvzGX7p4WGANXWQ33QkXjKJmW9fAChXUDlPL76DbmJ1Ts8y61v2Sxd7aXAgMBAAECgYBsIeCg4gKmclsSzwcyvQY44GFH4tLFhGmqiKbXzJkiRvho2IYW+dD6Da/sciKhy+zxmRHl++yiQuQDwrwjGtlS5z3ir2LGNDN0EeAxeSDFFO7MfAuVeqAwKWNMC8FbiagfiaL5qqLhvzh8bM0lT10D8D2+NU9BZJ+wfsBWZa0uKQJBAN8WZ/+/lOGZPCPotZVilEubZArn5d/mn1k+PjSoXJWT3HQkGGsfVXidr8/tODdwdn5oNga/Un5Qh/6iLobbgfsCQQCoq/+nzIZ2RWBMqEPkUBWj/1p7DFQt6edLMkPhxL0qAL3QRCFX63cyr2r4vINkuO4R990h4HlO1wrH6OjYcZcVAkB2nnRYAWdJeXAH6/G5Z7xQY2STg/Cv1/G8wyLSXv8zrXZX7uVo+DU7OCVGmuz8VXk8B29KsSpM7ccR9uxkWo1HAkBm1ue7UVIyTj5WvskWLVXkdc6e83dnvxNMn8sPnjqPn4AbuU5zIpe8iYO5QIcEJFTTE8L54rlTvn1OQc2mGiu5AkB/WrRogkBJ+B9uA8ef2V6vJ6E65GDQn8fE/PvOiFWv4QQDpy0R7gSd48SHu9SRoIjTlMxyzPzGm/NbYJtl9VUY",

	//编码格式
	'charset' => "UTF-8",

	//支付宝网关
	'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

	//应用ID
	'app_id' => "2017060707441959",

	//异步通知地址,只有扫码支付预下单可用
	'notify_url' => 'http://'.$conf['local_domain'].'/f2fpay_notify.php',

	//最大查询重试次数
	'MaxQueryRetry' => "10",

	//查询间隔
	'QueryDuration' => "3"
);