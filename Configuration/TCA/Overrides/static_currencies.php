<?php
declare(strict_types=1);

defined('TYPO3') || die;

use RENOLIT\StaticInfoTablesNl\Provider\TcaProvider;

call_user_func(
    function ($additionalFields, $dataSetName) {
        TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    [
        'cu_name_en' => 'cu_name_nl',
        'cu_sub_name_en' => 'cu_sub_name_nl'
    ],
    'static_currencies'
);
