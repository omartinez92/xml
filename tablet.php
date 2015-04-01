<?PHP
function tablet($xml){

    $info_tablet = array(
        'proddisplayname'   => (string) $xml->content->features->product_names->proddisplayname,
        'prodname'          => (string) $xml->content->system->product_names->prodname,
        'facet_segment'     => (string) $xml->content->facets->metadata->facet_segment,
        'facet_formfactor'  => (string)  $xml->content->facets->form_factor->facet_formfactor,


        'osinstalled'           => (string) $xml->content->tech_specs->supported_operating_systems->osinstalled,
        'osinstalledftntnbr'    => (string) $xml->content->tech_specs->supported_operating_systems->osinstalledftntnbr,
        'processorfamily'       => (string) $xml->content->tech_specs->processor->processorfamily,
        'hdspacrec'             => (string) $xml->content->tech_specs->storage_specifications->hdspacrec,
        'camera'                => (string) $xml->content->tech_specs->multimedia_and_input_devices->camera,
        'wirelesstech'          => (string) $xml->content->tech_specs->connectivity_and_communications->wirelesstech,
        'wirelesstechftntnbr'   => (string) $xml->content->tech_specs->connectivity_and_communications->wirelesstechftntnbr,
        'batterylifedes'        => (string) $xml->content->tech_specs->battery_and_power->batterylifedes,
        'batterylifedesftntnbr' => (string) $xml->content->tech_specs->battery_and_power->batterylifedesftntnbr,
        'facet_scrnsizeus'      => (string) $xml->content->facets->displays->facet_scrnsizeus,
        'facet_memstd'          => (string) $xml->content->facets->memory ->facet_memstd,


        'feature_03_headline_01_statement'  => (string) $xml->content->special_features->feature_03_headline_01_statement,
        'feature_03_image_01_url'           => (string) $xml->content->special_features->feature_03_image_01_url,
        'feature_03_headline_02_statement'  => (string) $xml->content->special_features->feature_03_headline_02_statement,
        'feature_03_image_02_url'           => (string) $xml->content->special_features->feature_03_image_02_url,
        'feature_01_headline_01_statement'  => (string) $xml->content->special_features->feature_01_headline_01_statement,
        'feature_01_image_01_url'           => (string) $xml->content->special_features->feature_01_image_01_url,




        'proddes_overview_extended' => (string) $xml->content->special_features->product_description->proddes_overview_extended,
        'tmkt_overview_medium'      => (string) $xml->content->features->target_market->tmkt_overview_medium,
        'ksp_01_headline_medium'    => (string) $xml->content->features->key_selling_points->ksp_01_headline_medium,
        'ksp_01_suppt_01_long'      => (string) $xml->content->features->key_selling_points->ksp_01_suppt_01_long,
        'ksp_01_image_01_url'       => (string) $xml->content->features->key_selling_points->ksp_01_image_01_url,
        'ksp_02_headline_medium'    => (string) $xml->content->features->key_selling_points->ksp_02_headline_medium,
        'ksp_02_suppt_01_long'      => (string) $xml->content->features->key_selling_points->ksp_02_suppt_01_long,
        'ksp_02_image_01_url'       => (string) $xml->content->features->key_selling_points->ksp_02_image_01_url,
        'ksp_03_headline_medium'    => (string) $xml->content->features->key_selling_points->ksp_03_headline_medium,
        'ksp_03_suppt_01_long'      => (string) $xml->content->features->key_selling_points->ksp_03_suppt_01_long,
        'ksp_03_image_01_url'       => (string) $xml->content->features->key_selling_points->ksp_03_image_01_url,

        'feature_01_headline_01_statement'  => (string) $xml->content->special_features->feature_01_headline_01_statement,
        'feature_01_suppt_01_medium'        => (string) $xml->content->special_features->feature_01_suppt_01_medium,
        'feature_01_headline_02_statement'  => (string) $xml->content->special_features->feature_01_headline_02_statement,
        'feature_01_suppt_02_medium'        => (string) $xml->content->special_features->feature_01_suppt_02_medium,
        'feature_01_headline_03_statement'  => (string) $xml->content->special_features->feature_01_headline_03_statement,
        'feature_01_suppt_03_medium'        => (string) $xml->content->special_features->feature_01_suppt_03_medium,
        'feature_01_headline_04_statement'  => (string) $xml->content->special_features->feature_01_headline_04_statement,
        'feature_01_suppt_04_medium'        => (string) $xml->content->special_features->feature_01_suppt_04_medium,
        'feature_01_headline_05_statement'  => (string) $xml->content->special_features->feature_01_headline_05_statement,
        'feature_01_suppt_05_medium'        => (string) $xml->content->special_features->feature_01_suppt_05_medium,
        'feature_01_headline_06_statement'  => (string) $xml->content->special_features->feature_01_headline_06_statement,
        'feature_01_suppt_06_medium'        => (string) $xml->content->special_features->feature_01_suppt_06_medium,
        'feature_02_headline_01_statement'  => (string) $xml->content->special_features->feature_02_headline_01_statement,
        'feature_02_suppt_01_medium'        => (string) $xml->content->special_features->feature_02_suppt_01_medium,
        'feature_02_headline_02_statement'  => (string) $xml->content->special_features->feature_02_headline_02_statement,
        'feature_02_suppt_02_medium'        => (string) $xml->content->special_features->feature_02_suppt_02_medium,
        'feature_02_headline_03_statement'  => (string) $xml->content->special_features->feature_02_headline_03_statement,
        'feature_02_suppt_03_medium'        => (string) $xml->content->special_features->feature_02_suppt_03_medium,
        'feature_02_headline_04_statement'  => (string) $xml->content->special_features->feature_02_headline_04_statement,
        'feature_02_suppt_04_medium'        => (string) $xml->content->special_features->feature_02_suppt_04_medium,
        'feature_02_headline_05_statement'  => (string) $xml->content->special_features->feature_02_headline_05_statement,
        'feature_02_suppt_05_medium'        => (string) $xml->content->special_features->feature_02_suppt_05_medium,
        'feature_02_headline_06_statement'  => (string) $xml->content->special_features->feature_02_headline_06_statement,
        'feature_02_suppt_06_medium'        => (string) $xml->content->special_features->feature_02_suppt_06_medium,


        'proddisplayname'   => (string) $xml->content->features->product_names->proddisplayname,
        'prodname'          => (string) $xml->content->system->product_names->prodname,
        'prodnum'           => (string) $xml->content->system->product_numbers->prodnum,
        'dimenmet'          => (string) $xml->content->tech_specs->dimensions->dimenmet,
        'weightmet'         => (string) $xml->content->tech_specs->weights->weightmet,
        'productcolour'     => (string) $xml->content->tech_specs->appearance->productcolour,
        'wrntyfeatures'     => (string) $xml->content->tech_specs->warranty->wrntyfeatures,


        'msgfootnote_01' => (string) $xml->content->footnotes->msgfootnote_01,
        'msgfootnote_02' => (string) $xml->content->footnotes->msgfootnote_02,
        'msgfootnote_03' => (string) $xml->content->footnotes->msgfootnote_03,
        'msgfootnote_04' => (string) $xml->content->footnotes->msgfootnote_04,
        'msgfootnote_05' => (string) $xml->content->footnotes->msgfootnote_05,
        'msgfootnote_06' => (string) $xml->content->footnotes->msgfootnote_06,
        'msgfootnote_07' => (string) $xml->content->footnotes->msgfootnote_07,
        'msgfootnote_08' => (string) $xml->content->footnotes->msgfootnote_08,
        'msgfootnote_09' => (string) $xml->content->footnotes->msgfootnote_09,
        'msgfootnote_10' => (string) $xml->content->footnotes->msgfootnote_10,
        'msgfootnote_11' => (string) $xml->content->footnotes->msgfootnote_11,
        'msgfootnote_12' => (string) $xml->content->footnotes->msgfootnote_12,
        'msgfootnote_13' => (string) $xml->content->footnotes->msgfootnote_13,
        'msgfootnote_14' => (string) $xml->content->footnotes->msgfootnote_14,
        'msgfootnote_15' => (string) $xml->content->footnotes->msgfootnote_15,

        'tsfootnote_01' => (string) $xml->content->tech_specs->footnotes->tsfootnote_01,
        'tsfootnote_02' => (string) $xml->content->tech_specs->footnotes->tsfootnote_02,
        'tsfootnote_03' => (string) $xml->content->tech_specs->footnotes->tsfootnote_03,
        'tsfootnote_04' => (string) $xml->content->tech_specs->footnotes->tsfootnote_04,
        'tsfootnote_05' => (string) $xml->content->tech_specs->footnotes->tsfootnote_05,
        'tsfootnote_06' => (string) $xml->content->tech_specs->footnotes->tsfootnote_06,
        'tsfootnote_07' => (string) $xml->content->tech_specs->footnotes->tsfootnote_07,
        'tsfootnote_08' => (string) $xml->content->tech_specs->footnotes->tsfootnote_08,
        'tsfootnote_09' => (string) $xml->content->tech_specs->footnotes->tsfootnote_09,
        'tsfootnote_10' => (string) $xml->content->tech_specs->footnotes->tsfootnote_10,
        'tsfootnote_11' => (string) $xml->content->tech_specs->footnotes->tsfootnote_11,
        'tsfootnote_12' => (string) $xml->content->tech_specs->footnotes->tsfootnote_12,
        'tsfootnote_13' => (string) $xml->content->tech_specs->footnotes->tsfootnote_13,
        'tsfootnote_14' => (string) $xml->content->tech_specs->footnotes->tsfootnote_14,
        'tsfootnote_15' => (string) $xml->content->tech_specs->footnotes->tsfootnote_15,
        'tsfootnote_16' => (string) $xml->content->tech_specs->footnotes->tsfootnote_16,
        'tsfootnote_17' => (string) $xml->content->tech_specs->footnotes->tsfootnote_17,
        'tsfootnote_18' => (string) $xml->content->tech_specs->footnotes->tsfootnote_18,
        'tsfootnote_19' => (string) $xml->content->tech_specs->footnotes->tsfootnote_19,
        'tsfootnote_20' => (string) $xml->content->tech_specs->footnotes->tsfootnote_20


    );
return $info_tablet;
}
?>