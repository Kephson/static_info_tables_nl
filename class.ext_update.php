<?php

namespace SJBR\StaticInfoTablesNl;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2021 Ephraim Härer <ephraim.haerer@renolit.com>
 *  (c) 2013-2015 Stanislas Rolland <typo3(arobas)sjbr.ca>
 *  (c) 2017 Ephraim Härer <ephraim.haerer@renolit.com>
 *  All rights reserved
 *
 *  This script is part of the Typo3 project. The Typo3 project is
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

use SJBR\StaticInfoTables\Cache\ClassCacheManager;
use SJBR\StaticInfoTables\Utility\DatabaseUpdateUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\Exception;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/**
 * Class for updating the db
 */
class ext_update
{

    public const EXTENSION_KEY = 'static_info_tables_nl';

    /**
     * Main function, returning the HTML content
     *
     * @return string HTML
     * @throws Exception
     */
    public function main()
    {
        $content = '';
        /** @var ObjectManager $objectManager */
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);

        // Clear the class cache
        /** @var ClassCacheManager $classCacheManager */
        $classCacheManager = $objectManager->get(ClassCacheManager::class);
        $classCacheManager->reBuild();

        // Update the database
        /** @var DatabaseUpdateUtility $databaseUpdateUtility */
        $databaseUpdateUtility = $objectManager->get(DatabaseUpdateUtility::class);
        $databaseUpdateUtility->doUpdate(self::EXTENSION_KEY);

        $updateLanguageLabels = LocalizationUtility::translate('updateLanguageLabels', 'StaticInfoTables');
        $content .= '<p>' . $updateLanguageLabels . ' ' . self::EXTENSION_KEY . '</p>';
        return $content;
    }

    /**
     * @return bool
     */
    public function access()
    {
        return true;
    }
}
