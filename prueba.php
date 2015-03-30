<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?PHP 
ini_set('error_reporting', E_ALL);
echo "A";
include "Classes/PHPExcel.php";
include 'Classes/PHPExcel/IOFactory.php';
$path_to_xml = __DIR__.'/XMLp';

$buffer = new Buffer();

$files = scandir($path_to_xml);
$tab = 0;
//print_r($files);
foreach ($files as $file) {
    if (substr($file, strrpos($file, '.')+1) == 'xml') {
        $xml = simplexml_load_file(__DIR__."/XMLp/$file");
        //$itemNumber = $xml->attributes()->number;
        echo "entro al if";

        $info = (
			(string)$xml->content->system->product_numbers->prodnum,
			(string)$xml->content->system->product_names->prodname,
			(string)$xml->content->system->product_names->prodlongname,
			(string)$xml->content->tech_specs->cartridges_and_printheads->pageyielda4clr,
			(string)$xml->content->tech_specs->cartridges_and_printheads->pageyielda4bw,
			(string)$xml->content->tech_specs->cartridges_and_printheads->pageyieldftnt,
			(string)$xml->content->tech_specs->cartridges_and_printheads->prntcartclr,
			(string)$xml->content->special_features->product_description->proddes_overview_long,
			(string)$xml->content->special_features->product_description->proddes_overview_medium,
			(string)$xml->content->features->key_selling_points->ksp_01_headline_short,
			(string)$xml->content->features->key_selling_points->ksp_01_headline_medium,
			(string)$xml->content->features->key_selling_points->ksp_01_suppt_01_medium,
			(string)$xml->content->features->key_selling_points->ksp_01_suppt_02_medium,
			(string)$xml->content->features->key_selling_points->ksp_01_suppt_03_medium);
        

        print_r($info);

		echo "$pageyieldftnt";
		$geographic = (string)$xml->content->tech_specs->geographic->coo;
		$battery=(string)$xml->content->tech_specs->battery_and_power->powersupplytype;
		$warranty=(string)$xml->content->tech_specs->warranty->wrntyfeatures;
		$weight=(string)$xml->content->tech_specs->weights->weightmet;
		
		$buffer->add($productNumber);
		$buffer->add($productName);
		$buffer->add($productLongName);
		$buffer->add($geographic);
		$buffer->add($battery);
		$buffer->add($warranty);
		$buffer->add($weight);
		//$buffer->setItemNumber($itemNumber);
        /*foreach ($xml->images->image as $image) {
            $buffer->add($image->image_url_https);
        }*/
    }
}

$contents = $buffer->dump();
//echo $contents;

class Buffer
{
    private $buffer = [];

    private $itemNumber;

      public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;
    }
	

    public function add($contents)
    {
        $line           = sprintf('%s,', strval($contents));
        $this->buffer[] = $line;
    }

    public function dump()
    {
        return implode("\n", $this->buffer);
    }
}

/*
		$ksp_01_suppt_04_medium	= (string)$xml->content->features->key_selling_points->ksp_01_suppt_04_medium;
		$ksp_02_headline_short	= (string)$xml->content->features->key_selling_points->ksp_02_headline_short;
		$ksp_02_headline_medium	= (string)$xml->content->features->key_selling_points->ksp_02_headline_medium;
		$ksp_02_suppt_01_medium	= (string)$xml->content->features->key_selling_points->ksp_02_suppt_01_medium;
		$ksp_02_suppt_02_medium	= (string)$xml->content->features->key_selling_points->ksp_02_suppt_02_medium;
		$ksp_02_suppt_03_medium	= (string)$xml->content->features->key_selling_points->ksp_02_suppt_03_medium;
		$ksp_02_suppt_04_medium	= (string)$xml->content->features->key_selling_points->ksp_02_suppt_04_medium;
		$ksp_03_headline_short	= (string)$xml->content->features->key_selling_points->ksp_03_headline_short;
		$ksp_03_headline_medium	= (string)$xml->content->features->key_selling_points->ksp_03_headline_medium;
		$ksp_03_suppt_01_medium	= (string)$xml->content->features->key_selling_points->ksp_03_suppt_01_medium;
		$ksp_03_suppt_02_medium	= (string)$xml->content->features->key_selling_points->ksp_03_suppt_02_medium;
		$ksp_03_suppt_03_medium	= (string)$xml->content->features->key_selling_points->ksp_03_suppt_03_medium;
		$ksp_03_suppt_04_medium	= (string)$xml->content->features->key_selling_points->ksp_03_suppt_04_medium;
		$ksp_04_headline_medium	= (string)$xml->content->features->key_selling_points->ksp_04_headline_medium;
		$ksp_04_suppt_01_medium	= (string)$xml->content->features->key_selling_points->ksp_04_suppt_01_medium;
		$ksp_04_suppt_02_medium	= (string)$xml->content->features->key_selling_points->ksp_04_suppt_02_medium;
		$ksp_04_suppt_03_medium	= (string)$xml->content->features->key_selling_points->ksp_04_suppt_03_medium;
		$ksp_04_suppt_04_medium	= (string)$xml->content->features->key_selling_points->ksp_04_suppt_04_medium;

		$dimenmet		= (string)$xml->content->tech_specs->dimensions->dimenmet;
		$weightmet		= (string)$xml->content->tech_specs->weights->weightmet;
		$wrntyfeatures	= (string)$xml->content->tech_specs->warranty->wrntyfeatures;
		echo "\n".$dimenmet;

		$msgfootnote_01	= (string)$xml->content->features->footnotes->msgfootnote_01;
		$msgfootnote_02	= (string)$xml->content->features->footnotes->msgfootnote_02;
		$msgfootnote_03	= (string)$xml->content->features->footnotes->msgfootnote_03;
		$msgfootnote_04	= (string)$xml->content->features->footnotes->msgfootnote_04;
		$msgfootnote_05	= (string)$xml->content->features->footnotes->msgfootnote_05;
		$msgfootnote_06	= (string)$xml->content->features->footnotes->msgfootnote_06;
		$msgfootnote_07	= (string)$xml->content->features->footnotes->msgfootnote_07;
		$msgfootnote_08	= (string)$xml->content->features->footnotes->msgfootnote_08;
		$msgfootnote_09	= (string)$xml->content->features->footnotes->msgfootnote_09;
		$msgfootnote_10	= (string)$xml->content->features->footnotes->msgfootnote_10;
		$msgfootnote_11	= (string)$xml->content->features->footnotes->msgfootnote_11;
		$msgfootnote_12	= (string)$xml->content->features->footnotes->msgfootnote_12;
		$msgfootnote_13	= (string)$xml->content->features->footnotes->msgfootnote_13;
		$msgfootnote_14	= (string)$xml->content->features->footnotes->msgfootnote_14;
		$msgfootnote_15	= (string)$xml->content->features->footnotes->msgfootnote_15;
			*/
		/*
		echo "Entro a la función";
		$productNumber 		= (string)$xml->content->system->product_numbers->prodnum;
		echo $productNumber;
		$productName 		= (string)$xml->content->system->product_names->prodname;
		$productLongName 	= (string)$xml->content->system->product_names->prodlongname;
		$pageyielda4clr 	= (string)$xml->content->tech_specs->cartridges_and_printheads->pageyielda4clr;
		$pageyielda4bw 		= (string)$xml->content->tech_specs->cartridges_and_printheads->pageyielda4bw;
		$pageyieldftnt 		= (string)$xml->content->tech_specs->cartridges_and_printheads->pageyieldftnt;
		$prntcartclr		= (string)$xml->content->tech_specs->cartridges_and_printheads->prntcartclr;
		$proddes_overview_long 		= (string)$xml->content->special_features->product_description->proddes_overview_long;
		$proddes_overview_medium 	= (string)$xml->content->special_features->product_description->proddes_overview_medium;
		
		$ksp_01_headline_short	= (string)$xml->content->features->key_selling_points->ksp_01_headline_short;
		$ksp_01_headline_medium	= (string)$xml->content->features->key_selling_points->ksp_01_headline_medium;
		$ksp_01_suppt_01_medium	= (string)$xml->content->features->key_selling_points->ksp_01_suppt_01_medium;
		$ksp_01_suppt_02_medium	= (string)$xml->content->features->key_selling_points->ksp_01_suppt_02_medium;
		$ksp_01_suppt_03_medium	= (string)$xml->content->features->key_selling_points->ksp_01_suppt_03_medium;
		$ksp_01_suppt_04_medium	= (string)$xml->content->features->key_selling_points->ksp_01_suppt_04_medium;
		$ksp_02_headline_short	= (string)$xml->content->features->key_selling_points->ksp_02_headline_short;
		$ksp_02_headline_medium	= (string)$xml->content->features->key_selling_points->ksp_02_headline_medium;
		$ksp_02_suppt_01_medium	= (string)$xml->content->features->key_selling_points->ksp_02_suppt_01_medium;
		$ksp_02_suppt_02_medium	= (string)$xml->content->features->key_selling_points->ksp_02_suppt_02_medium;
		$ksp_02_suppt_03_medium	= (string)$xml->content->features->key_selling_points->ksp_02_suppt_03_medium;
		$ksp_02_suppt_04_medium	= (string)$xml->content->features->key_selling_points->ksp_02_suppt_04_medium;
		$ksp_03_headline_short	= (string)$xml->content->features->key_selling_points->ksp_03_headline_short;
		$ksp_03_headline_medium	= (string)$xml->content->features->key_selling_points->ksp_03_headline_medium;
		$ksp_03_suppt_01_medium	= (string)$xml->content->features->key_selling_points->ksp_03_suppt_01_medium;
		$ksp_03_suppt_02_medium	= (string)$xml->content->features->key_selling_points->ksp_03_suppt_02_medium;
		$ksp_03_suppt_03_medium	= (string)$xml->content->features->key_selling_points->ksp_03_suppt_03_medium;
		$ksp_03_suppt_04_medium	= (string)$xml->content->features->key_selling_points->ksp_03_suppt_04_medium;
		$ksp_04_headline_medium	= (string)$xml->content->features->key_selling_points->ksp_04_headline_medium;
		$ksp_04_suppt_01_medium	= (string)$xml->content->features->key_selling_points->ksp_04_suppt_01_medium;
		$ksp_04_suppt_02_medium	= (string)$xml->content->features->key_selling_points->ksp_04_suppt_02_medium;
		$ksp_04_suppt_03_medium	= (string)$xml->content->features->key_selling_points->ksp_04_suppt_03_medium;
		$ksp_04_suppt_04_medium	= (string)$xml->content->features->key_selling_points->ksp_04_suppt_04_medium;

		$dimenmet		= (string)$xml->content->tech_specs->dimensions->dimenmet;
		$weightmet		= (string)$xml->content->tech_specs->weights->weightmet;
		$wrntyfeatures	= (string)$xml->content->tech_specs->warranty->wrntyfeatures;
		echo "\n".$dimenmet;

		$msgfootnote_01	= (string)$xml->content->features->footnotes->msgfootnote_01;
		$msgfootnote_02	= (string)$xml->content->features->footnotes->msgfootnote_02;
		$msgfootnote_03	= (string)$xml->content->features->footnotes->msgfootnote_03;
		$msgfootnote_04	= (string)$xml->content->features->footnotes->msgfootnote_04;
		$msgfootnote_05	= (string)$xml->content->features->footnotes->msgfootnote_05;
		$msgfootnote_06	= (string)$xml->content->features->footnotes->msgfootnote_06;
		$msgfootnote_07	= (string)$xml->content->features->footnotes->msgfootnote_07;
		$msgfootnote_08	= (string)$xml->content->features->footnotes->msgfootnote_08;
		$msgfootnote_09	= (string)$xml->content->features->footnotes->msgfootnote_09;
		$msgfootnote_10	= (string)$xml->content->features->footnotes->msgfootnote_10;
		$msgfootnote_11	= (string)$xml->content->features->footnotes->msgfootnote_11;
		$msgfootnote_12	= (string)$xml->content->features->footnotes->msgfootnote_12;
		$msgfootnote_13	= (string)$xml->content->features->footnotes->msgfootnote_13;
		$msgfootnote_14	= (string)$xml->content->features->footnotes->msgfootnote_14;
		$msgfootnote_15	= (string)$xml->content->features->footnotes->msgfootnote_15;*/


?>
</html>