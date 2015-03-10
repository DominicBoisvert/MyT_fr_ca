<?php

/**
 * This is the configuration for generating message translations
 * for the Yii framework. It is used by the 'yiic message' command.
 */
return array(
    'sourcePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'messagePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'messages',
    'languages' => array('en', 'fr_ca', 'it'),
    'fileTypes' => array('php'),
    'overwrite' => true,
    'exclude' => array(
        '/backups',
        '/data',
        '/extensions',
        '/messages',
        '/runtime',
        '/tests',
        '.svn',
        'yiic.php',
    ),
    'sort' => true,
);
