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

// Charger selectize en tant que plugin jQuery
function selectize_jquery_plugins($scripts) {
    $scripts[] = 'lib/selectize/selectize.js';
    return $scripts;
}

// Charger selectize SPIP
function selectize_insert_head($flux) {
    $flux .= '<script type="text/javascript" src="'.produire_fond_statique('javascript/spip.selectize.js').'"></script>';
    return $flux;
}

// Charger le css de Selectize sur l'espace publique
function selectize_insert_head_css($flux) {
    $flux .= '<link rel="stylesheet" href="'.find_in_path('lib/selectize/selectize.css').'" />';
    return $flux;
}

// Charger selectize dans l'espace privé
function selectize_header_prive($flux) {
    $flux .= '<link rel="stylesheet" href="'.find_in_path('lib/selectize/selectize.css').'" />';
    $flux .= '<script type="text/javascript" src="'.produire_fond_statique('javascript/spip.selectize.js').'"></script>';
    return $flux;
}
