<?php

/**
 * Sets globals which are used by URL and breadcrumb generating code
 *
 * @param string $environment - a string of either 'local', 'development' or 'external'
 */
function setThemeGlobals($environment = null) {
    if ($environment === null) {
        throw new BadFunctionCallException('setThemeGlobals function must be passed at string that represents the environment');
    }

    global $pre_path;
    global $pre_crumbs;

    switch ($environment) {
        case 'local':
        case 'development':
            $pre_path = '';
            $pre_crumbs = array('UK Government Web Archive' => '/');
            break;
        case 'external':
        case 'aws_public':
            $pre_crumbs = array(
                'UK Government Web Archive' => '/webarchive/'
            );
            $pre_path = '/webarchive';
            break;
    }
}