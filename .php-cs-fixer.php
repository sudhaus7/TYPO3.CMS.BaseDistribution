<?php

$header = <<<EOM
This file is part of the TYPO3 project.
(c) 2022 B-Factor GmbH / 12bis3 / Sudhaus7 / code711.de

For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.
The TYPO3 project - inspiring people to share!

@copyright 2022 B-Factor GmbH / 12bis3 / Sudhaus7 / https://code711.de/
EOM;

$config = \TYPO3\CodingStandards\CsFixerConfig::create();
$config
    ->setHeader($header, true)
    ->getFinder()
    ->in('packages')
    //->exclude('solr_evm')

;

return $config;
