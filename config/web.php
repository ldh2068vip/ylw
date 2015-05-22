<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'MIIEoQIBAAKCAQEAqMDvt7ptuG71SSKmPcSHd849mO1dwZaeBmNxcRhbmOgMhl7h
2OWWl/p+xFFji2L41m/RXAOCZL5i+bylpp+UUTFk+Z1tajIONpuvc/XMtvcl/ogM
u1g9KPlN5hPe6//FTcgOrhhJ3FEJsoxmy2yxVMjIsIMYcWK2d5dVXYSsp68pgHuj
ihlZLEwJ2ceFyzvspqoHhlLtZSBzp9U+BAHGdBfepkDJlfqqbD28AdhW5/oNytIE
kpz/3IjfEvWq/HWfSWYZVm8ZzaFTgTqqAHJhkrnAXgS2tuqSguOejGWd1ij90sdV
ayqaAjuZjy2wa1fDejOsFjC/Svsyqinh8hHVvQIBIwKCAQArZM/tanP8OcoLffA7
xNJgor9h1qMUhdDdEkG9/vL7bt6mNafKDya5XauRkUV7nRtqV0R2vxLmtJ0bpYmu
gM5eBWMbnYKJBY6gU+tJtDv0iLH/n1O7JVGOMXpuXOGNJIMxQhJnSBL+I3eFrxMe
XcczDw8I0UDMsvu4Wh1D7uqRhGUm/GJm+VdG1rZZQGc8+oAPlxofcv/lMpY0gK5S
jOotPDdWP67pmlMtJigBKTT/uWbQvu8mBmHVXrGlFPprZR1Vw++xEXFnTkwC4YXX
j5MAVmeTxCA6r5nDUPmbgsjMfAyEqh+IMRDmBco+PjwihZMe2lsvlgTZ7HIIkDqp
GCvrAoGBANmUOEPrlox1Hf0nAXJHf23+EDB0lRF2mxBpa7ckM5GdUYmZWC/t6xoy
lra7WDsYM0oBqSnYavy1z4MX3996Ppy0dIhGAgjTqY/GqluqYZtfkhBLJXRtmYEJ
cFGkZM8WgqLpTkun47RH5trMkD/AevKQWHi4GmC2gpDkkNpZMTCpAoGBAMaNilK4
uSP5B4B0IPPPfIyk3HF6/qNzMnByPDZJcVDRhtMvRkbGRaIYS4YlioaX9cIrl6p7
p2o+SRrq4KhSWHQOhdB8Ra1Lx0bLzfCBjRjAEI8NHW+d+4KeVNeLPRcyp3+QOMgG
+dzmdx4JcobPRyMAGEKIlhLTNnSH2eqVgqT1AoGBAJUyb7mLmm7xOSKeZ2ROSMBz
s1RtMwSpGd9eOzvBDWsqDAaVCUVv8auQZ1i6+qwt2gbckUFD8ZdYGUPzHSuHBlzT
gxuduECRI9BNtqVBogQkRuaZ7cwt5ZpPnXnP0Bj5fiaRWkKBwLYirO3OGcVQyVXf
Upvr9NSaaCjXPsGcPvzLAoGAFrEXH2WRgHQ7XyM290rpqaxw9wa+BA0qVf5tSAhk
uMd9H3Md+XW+0LJRxjAtFrJH+O8KBNruj8yao/2WBJuyVmgPSwbjZEMst6JDa/GM
d9tvm1H0vEyRxcjzwNy2hk7ukjxeQr73+/0U7X1sLKn5gFfIQh49CXc5bGdMGs9C
IXsCgYBGIAxrZHBjEijpM9WpnK+psqSBcD4AHRMcgaeqORIwBmSUe7HJ5+KzcaHE
2BBrxrLKPXm/sXXIbb/wtgc3oymoEqUZpfTu+U0DlYKGs30tN/qEhkuX/ecr5zto
clVdGrxAYgOhm2V2Ntk8Le9lxguDb50B1YDZAYeqQUiE89C8jw==',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
    ],
    'params' => $params,
	'defaultRoute' => 'site/index',

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
   //  $config['modules']['gii'] = 'yii\gii\Module';
    $config['modules']['gii'] = [
    'class' => 'yii\gii\Module',
    'allowedIPs' => ['0.0.0.0','127.0.0.1','192.168.205.1']
];


    
}


return $config;
