<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?PHP 
ini_set('display_errors', '1');
set_time_limit (36000);
ini_set("memory_limit","12G");
$path_to_xml = __DIR__.'/tablet';
//require "Classes/PHPExcel.php";
//require 'Classes/PHPExcel/IOFactory.php';

//$buffer = new Buffer();

$files = scandir($path_to_xml);
$tab=0;
print_r($files);
foreach ($files as $file) {
	unset($objPHPExcel);
    unset($xml);
	if (substr($file, strrpos($file, '.')+1) == 'xml') {
        
        $xml = simplexml_load_file(__DIR__."/tablet/$file");

        echo "Entro al IF como".$file."<br>";

        $info = array(
			'proddisplayname'   => (string) $xml->content->features->product_names->proddisplayname,
			'prodname'          => (string) $xml->content->system->product_names->prodname,
			'facet_segment'     => (string) $xml->content->tech_specs->facets->metadata->facet_segment,
			'facet_formfactor'  => (string)  $xml->content->tech_specs->facets->form_factor->facet_formfactor,
			
			
			'osinstalled'           => (string) $xml->content->tech_specs->supported_operating_systems->osinstalled,
			'osinstalledftntnbr'    => (string)  $xml->content->tech_specs->supported_operating_systems->osinstalledftntnbr,
			'processorfamily'       => (string) $xml->content->tech_specs->processor->processorfamily,
			'hdspacrec'             => (string) $xml->content->tech_specs->storage_specifications->hdspacrec,
			'camera'                => (string) $xml->content->tech_specs->multimedia_and_input_devices->camera,
			'wirelesstech'          => (string) $xml->content->tech_specs->connectivity_and_communications->wirelesstech,
			'wirelesstechftntnbr'   => (string) $xml->content->tech_specs->connectivity_and_communications->wirelesstechftntnbr,
			'batterylifedes'        => (string) $xml->content->tech_specs->battery_and_power->batterylifedes,
			'batterylifedesftntnbr' => (string) $xml->content->tech_specs->battery_and_power->batterylifedesftntnbr,
			'facet_scrnsizeus'      => (string) $xml->content->facets->displays->facet_scrnsizeus,
			'facet_memstd'          => (string) $xml->content->facets->memory ->facet_memstd,
			
			
			'feature_03_headline_01_statement' => (string) $xml->content->special_features->feature_03_headline_01_statement,
			'feature_03_image_01_url' => (string) $xml->content->special_features->feature_03_image_01_url,
			'feature_03_headline_02_statement' => (string) $xml->content->special_features->feature_03_headline_02_statement,
			'feature_03_image_02_url' => (string) $xml->content->special_features->feature_03_image_02_url,
			'feature_01_headline_01_statement' => (string) $xml->content->special_features->feature_01_headline_01_statement,
			'feature_01_image_01_url' => (string) $xml->content->special_features->feature_01_image_01_url,
			
			
			
			
			'proddes_overview_extended' => (string) $xml->content->special_features->product_description->proddes_overview_extended,
			'tmkt_overview_medium'      => (string) tmkt_overview_medium,
			'ksp_01_headline_medium'    => (string) $xml->content->features->key_selling_points->ksp_01_headline_medium,
			'ksp_01_suppt_01_long'      => (string) $xml->content->features->key_selling_points->ksp_01_suppt_01_long,
			'ksp_01_image_01_url'       => (string) $xml->content->features->key_selling_points->ksp_01_image_01_url,
			'ksp_02_headline_medium'    => (string) $xml->content->features->key_selling_points->ksp_02_headline_medium,
			'ksp_02_suppt_01_long'      => (string) $xml->content->features->key_selling_points->ksp_02_suppt_01_long,
			'ksp_02_image_01_url'       => (string) $xml->content->features->key_selling_points->ksp_02_image_01_url,
			'ksp_03_headline_medium'    => (string) $xml->content->features->key_selling_points->ksp_03_headline_medium,
			'ksp_03_suppt_01_long'      => (string) $xml->content->features->key_selling_points->ksp_03_suppt_01_long,
			'ksp_03_image_01_url'       => (string) $xml->content->features->key_selling_points->ksp_03_image_01_url,
			
			'feature_01_headline_01_statement' => (string) $xml->content->special_features->feature_01_headline_01_statement,
			'feature_01_suppt_01_medium' => (string) $xml->content->special_features->feature_01_suppt_01_medium,
			'feature_01_headline_02_statement' => (string) $xml->content->special_features->feature_01_headline_02_statement,
			'feature_01_suppt_02_medium' => (string) $xml->content->special_features->feature_01_suppt_02_medium,
			'feature_01_headline_03_statement' => (string) $xml->content->special_features->feature_01_headline_03_statement,
			'feature_01_suppt_03_medium' => (string) $xml->content->special_features->feature_01_suppt_03_medium,
			'feature_01_headline_04_statement' => (string) $xml->content->special_features->feature_01_headline_04_statement,
			'feature_01_suppt_04_medium' => (string) $xml->content->special_features->feature_01_suppt_04_medium,
			'feature_01_headline_05_statement' => (string) $xml->content->special_features->feature_01_headline_05_statement,
			'feature_01_suppt_05_medium' => (string) $xml->content->special_features->feature_01_suppt_05_medium,
			'feature_01_headline_06_statement' => (string) $xml->content->special_features->feature_01_headline_06_statement,
			'feature_01_suppt_06_medium' => (string) $xml->content->special_features->feature_01_suppt_06_medium,
			'feature_02_headline_01_statement' => (string) $xml->content->special_features->feature_02_headline_01_statement,
			'feature_02_suppt_01_medium' => (string) $xml->content->special_features->feature_02_suppt_01_medium,
			'feature_02_headline_02_statement' => (string) $xml->content->special_features->feature_02_headline_02_statement,
			'feature_02_suppt_02_medium' => (string) $xml->content->special_features->feature_02_suppt_02_medium,
			'feature_02_headline_03_statement' => (string) $xml->content->special_features->feature_02_headline_03_statement,
			'feature_02_suppt_03_medium' => (string) $xml->content->special_features->feature_02_suppt_03_medium,
			'feature_02_headline_04_statement' => (string) $xml->content->special_features->feature_02_headline_04_statement,
			'feature_02_suppt_04_medium' => (string) $xml->content->special_features->feature_02_suppt_04_medium,
			'feature_02_headline_05_statement' => (string) $xml->content->special_features->feature_02_headline_05_statement,
			'feature_02_suppt_05_medium' => (string) $xml->content->special_features->feature_02_suppt_05_medium,
			'feature_02_headline_06_statement' => (string) $xml->content->special_features->feature_02_headline_06_statement,
			'feature_02_suppt_06_medium' => (string) $xml->content->special_features->feature_02_suppt_06_medium,
			
			
			'proddisplayname' => (string) $xml->content->features->product_names->proddisplayname,
			'prodname' => (string) $xml->content->system->product_names->prodname,
			'prodnum' => (string) $xml->content->system->product_numbers->prodnum,
			'dimenmet' => (string) $xml->content->tech_specs->dimensions->dimenmet,
			'weightmet' => (string) $xml->content->tech_specs->weights->weightmet,
			'productcolour' => (string) $xml->content->tech_specs->appearance->productcolour,
			'wrntyfeatures' => (string) $xml->content->tech_specs->warranty->wrntyfeatures,
			
			
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

		/*$info_renglon = array(
		
			'Nombre del producto1' => 1,
			'Nombre abreviado del producto' => 2,
			
			
			'Rendimiento de la página (color)' => 3,
			'Rendimiento de la página (Negro)' => 4,
			'Nota a pie de página sobre el rendimiento de páginas' => 5,
			'Color(es) de cartuchos de impresión' => 6,
			
			
			'Descripción general1' => 7,
			'Descripción general2' => 8,
			'Titular1' => 9,
			'Titular2' => 10,
			'Argumento clave de venta1' => 11,
			'Argumento clave de venta2' => 12,
			'Argumento clave de venta3' => 13,
			'Argumento clave de venta4' => 14,
			'Titular3' => 15,
			'Titular4' => 16,
			'Argumento clave de venta5' => 17,
			'Argumento clave de venta6' => 18,
			'Argumento clave de venta7' => 19,
			'Argumento clave de venta8' => 20,
			'Titular5' => 21,
			'Titular6' => 22,
			'Argumento clave de venta9' => 23,
			'Argumento clave de venta10' => 24,
			'Argumento clave de venta11' => 25,
			'Argumento clave de venta12' => 26,
			'Titular7' => 27,
			'Titular8' => 28,
			'Argumento clave de venta13' => 29,
			'Argumento clave de venta14' => 30,
			'Argumento clave de venta15' => 31,
			'Argumento clave de venta16' => 32,
			
			
			'Nombre del producto2' => 33,
			'Nº de producto' => 34,
			'Dimensiones mínimas (anch. x prof. x alt.)' => 35,
			'Peso' => 36,
			'Garantía' => 37

		);
		
		
		$objPHPExcel = new PHPExcel();
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objPHPExcel = $objReader->load("HP_C.xlsx");
    	
    	//$objWorkSheet = $objPHPExcel->createSheet($info['Nº de producto'],$tab);
    	
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setTitle($info['Nº de producto']);
		//$objPHPExcel->getActiveSheet()->setTitle("$info['Nombre del producto1']");*/
		$r_label='';
		$r_value='';
    	foreach ($info as $label => $value) {
			$r_label = $r_label.$label.',';
			echo "<br> $label        $value";
			$r_value = $r_value.$value.','; 
			/*
    		$renglon = $info_renglon[$label];
			//$objPHPExcel->setActiveSheetIndex($info['Nombre del producto1']);
			$objPHPExcel->getActiveSheet()->SetCellValue("C$renglon", "$value");
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			*/
		}
		
		echo "<br><br>$r_label<br><br>$r_value";
		file_put_contents($info['prodnum'].".csv", $r_label.PHP_EOL.$r_value, FILE_APPEND | LOCK_EX);
		$tab++;
    	//$objWriter->save("HP_Cartriedge".$info['Nombre del producto1'].".xlsx");
        //$tab++;
        
    //unset($file);
    //flush();
    //unset($objPHPExcel);
    }
}

//$contents = $buffer->dump();


/*
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

    public function excel($info)
    {

    }

    */
    	
	
//}

?>
</html>