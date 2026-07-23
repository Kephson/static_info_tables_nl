<?php
declare(strict_types=1);

defined('TYPO3') || die;

use RENOLIT\StaticInfoTablesNl\Provider\TcaProvider;

call_user_func(
    function ($additionalFields, $dataSetName) {
        TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    [
        'tr_name_en' => 'tr_name_nl',
    ],
    'static_territories'
);
