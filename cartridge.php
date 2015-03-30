<?PHP 
function cartridge($xml){

$info_cartridge = array(
        	
    'prodname'          => (string)$xml->content->system->product_names->prodname,
	'prodnameshort'     => (string)$xml->content->features->product_names->prodnameshort,
	
	'pageyielda4clr'	=> (string)$xml->content->tech_specs->cartridges_and_printheads->pageyielda4clr,
	'pageyielda4bw'		=> (string)$xml->content->tech_specs->cartridges_and_printheads->pageyielda4bw,
	'pageyieldftnt' 	=> (string)$xml->content->tech_specs->cartridges_and_printheads->pageyieldftnt,
	'prntcartclr' 	    => (string)$xml->content->tech_specs->cartridges_and_printheads->prntcartclr,
			
	'proddes_overview_long'		=> (string)$xml->content->special_features->product_description->proddes_overview_long,
	'proddes_overview_medium'	=> (string)$xml->content->special_features->product_description->proddes_overview_medium,
	'ksp_01_headline_short'		=> (string)$xml->content->features->key_selling_points->ksp_01_headline_short,
	'ksp_01_headline_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_01_headline_medium,
	'ksp_01_suppt_01_medium'	=> (string)$xml->content->features->key_selling_points->ksp_01_suppt_01_medium,
	'ksp_01_suppt_02_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_01_suppt_02_medium,
	'ksp_01_suppt_03_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_01_suppt_03_medium,
	'ksp_01_suppt_04_medium'	=> (string)$xml->content->features->key_selling_points->ksp_01_suppt_04_medium,
	'ksp_02_headline_short'		=> (string)$xml->content->features->key_selling_points->ksp_02_headline_short,
	'ksp_02_headline_medium'	=> (string)$xml->content->features->key_selling_points->ksp_02_headline_medium,
	'ksp_02_suppt_01_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_02_suppt_01_medium,
	'ksp_02_suppt_02_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_02_suppt_02_medium,
	'ksp_02_suppt_03_medium'	=> (string)$xml->content->features->key_selling_points->ksp_02_suppt_03_medium,
	'ksp_02_suppt_04_medium'	=> (string)$xml->content->features->key_selling_points->ksp_02_suppt_04_medium,
	'ksp_03_headline_short' 	=> (string)$xml->content->features->key_selling_points->ksp_03_headline_short,
	'ksp_03_headline_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_03_headline_medium,
	'ksp_03_suppt_01_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_03_suppt_01_medium,
	'ksp_03_suppt_02_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_03_suppt_02_medium,
	'ksp_03_suppt_03_medium'	=> (string)$xml->content->features->key_selling_points->ksp_03_suppt_03_medium,
	'ksp_03_suppt_04_medium'	=> (string)$xml->content->features->key_selling_points->ksp_03_suppt_04_medium,
	'ksp_04_headline_short'		=> (string)$xml->content->features->key_selling_points->ksp_04_headline_short,
	'ksp_04_headline_medium'	=> (string)$xml->content->features->key_selling_points->ksp_04_headline_medium,
	'ksp_04_suppt_01_medium'	=> (string)$xml->content->features->key_selling_points->ksp_04_suppt_01_medium,
	'ksp_04_suppt_02_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_04_suppt_02_medium,
	'ksp_04_suppt_03_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_04_suppt_03_medium,
	'ksp_04_suppt_04_medium' 	=> (string)$xml->content->features->key_selling_points->ksp_04_suppt_04_medium,
			
	'prodname'		    => (string)$xml->content->system->product_names->prodname,
	'prodnum' 			=> (string)$xml->content->system->product_numbers->prodnum,
	'dimenmet' 	        => (string)$xml->content->tech_specs->dimensions->dimenmet,
	'weightmet'			=> (string)$xml->content->tech_specs->weights->weightmet,
	'wrntyfeatures' 	=> (string)$xml->content->tech_specs->warranty->wrntyfeatures,
		
	'msgfootnote_01'    => (string)$xml->content->features->footnotes->msgfootnote_01,
	'msgfootnote_02'    => (string)$xml->content->features->footnotes->msgfootnote_02,
	'msgfootnote_03'    => (string)$xml->content->features->footnotes->msgfootnote_03,
	'msgfootnote_04'    => (string)$xml->content->features->footnotes->msgfootnote_04,
	'msgfootnote_05'    => (string)$xml->content->features->footnotes->msgfootnote_05,
	'msgfootnote_06'    => (string)$xml->content->features->footnotes->msgfootnote_06,
	'msgfootnote_07'    => (string)$xml->content->features->footnotes->msgfootnote_07,
	'msgfootnote_08'    => (string)$xml->content->features->footnotes->msgfootnote_08,
	'msgfootnote_09'    => (string)$xml->content->features->footnotes->msgfootnote_09,
	'msgfootnote_10'    => (string)$xml->content->features->footnotes->msgfootnote_10,
	'msgfootnote_11'    => (string)$xml->content->features->footnotes->msgfootnote_11,
	'msgfootnote_12'    => (string)$xml->content->features->footnotes->msgfootnote_12,
	'msgfootnote_13'    => (string)$xml->content->features->footnotes->msgfootnote_13,
	'msgfootnote_14'    => (string)$xml->content->features->footnotes->msgfootnote_14,
	'msgfootnote_15'    => (string)$xml->content->features->footnotes->msgfootnote_15
	);
    return $info_cartridge;
}
?>