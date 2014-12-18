<?php
/**
 * Utilisations de pipelines par Selectize.js
 *
 * @plugin     Selectize.js
 * @copyright  2014
 * @author     Vertige (Didier)
 * @licence    GNU/GPL
 * @package    SPIP\Selectize\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function selectize_jquery_plugins($scripts) {

    $scripts[] = 'lib/selectize/selectize.js';

    return $scripts;
}

function selectize_insert_head_css($flux) {

    $flux .= '<link rel="stylesheet" href="'.find_in_path('lib/selectize/selectize.css').'" />';

    return $flux;
}