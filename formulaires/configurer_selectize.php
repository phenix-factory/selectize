<?php

function formulaires_configurer_selectize_saisies_dist() {

    $saisies = array(
        array(
            'saisie' => 'input',
            'options' => array(
                'nom' => 'class',
                'label' => _T('selectize:class')
            )
        )
    );

    return $saisies;
}

function formulaires_configurer_selectize_charger_dist() {
    include_spip('inc/config');
    return lire_config('selectize');

}