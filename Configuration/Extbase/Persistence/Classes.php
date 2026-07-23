<?php
declare(strict_types=1);

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2020 Achim Fritz <achim.fritz@b13.com>
 *  (c) 2021-2026 Ephraim Härer <ephraim@ephespage.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

use SJBR\StaticInfoTables\Domain\Model\Country;
use SJBR\StaticInfoTables\Domain\Model\CountryZone;
use SJBR\StaticInfoTables\Domain\Model\Currency;
use SJBR\StaticInfoTables\Domain\Model\Language;
use SJBR\StaticInfoTables\Domain\Model\Territory;

return [
    Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameNl' => [
                'fieldName' => 'cn_short_nl',
            ],
            'officialNameNl' => [
                'fieldName' => 'cn_official_name_nl',
            ],
            'capitalNl' => [
                'fieldName' => 'cn_capital_nl',
            ],
        ],
    ],
    CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameNl' => [
                'fieldName' => 'zn_name_nl',
            ],
        ],
    ],
    Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameNl' => [
                'fieldName' => 'cu_name_nl',
            ],
            'subdivisionNameNl' => [
                'fieldName' => 'cu_sub_name_nl',
            ],
        ],
    ],
    Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameNl' => [
                'fieldName' => 'lg_name_nl',
            ],
        ],
    ],
    Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameNl' => [
                'fieldName' => 'tr_name_nl',
            ],
        ],
    ],
];
