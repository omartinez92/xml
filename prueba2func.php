<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?PHP 
ini_set('display_errors', '1');
set_time_limit (36000);
ini_set("memory_limit","12G");
$path_to_xml = __DIR__.'/XML';
require "Classes/PHPExcel.php";
require 'Classes/PHPExcel/IOFactory.php';

//$buffer = new Buffer();

$files = scandir($path_to_xml);
$tab=0;
print_r($files);
foreach ($files as $file) {
	unset($objPHPExcel);
    unset($xml);
	if (substr($file, strrpos($file, '.')+1) == 'xml') {
        
        $xml = simplexml_load_file(__DIR__."/XML/$file");

        echo "Entro al IF como".$file."<br>";

        $info = array(
        	'Nombre del producto1'=> (string)$xml->content->system->product_names->prodname,
			'Nombre abreviado del producto' => (string)$xml->content->features->product_names->prodnameshort,
			
			'Rendimiento de la página (color)'		=> (string)$xml->content->tech_specs->cartridges_and_printheads->pageyielda4clr,
			'Rendimiento de la página (Negro)'		=> (string)$xml->content->tech_specs->cartridges_and_printheads->pageyielda4bw,
			'Nota a pie de página sobre el rendimiento de páginas' 	=> (string)$xml->content->tech_specs->cartridges_and_printheads->pageyieldftnt,
			'Color(es) de cartuchos de impresión' 	=> (string)$xml->content->tech_specs->cartridges_and_printheads->prntcartclr, 
			
			'Descripción general1'		=> (string)$xml->content->special_features->product_description->proddes_overview_long,
			'Descripción general2'		=> (string)$xml->content->special_features->product_description->proddes_overview_medium,
			'Titular1'					=> (string)$xml->content->features->key_selling_points->ksp_01_headline_short,
			'Titular2' 					=> (string)$xml->content->features->key_selling_points->ksp_01_headline_medium,
			'Argumento clave de venta1'	=> (string)$xml->content->features->key_selling_points->ksp_01_suppt_01_medium,
			'Argumento clave de venta2' 	=> (string)$xml->content->features->key_selling_points->ksp_01_suppt_02_medium,
			'Argumento clave de venta3' 	=> (string)$xml->content->features->key_selling_points->ksp_01_suppt_03_medium,
			'Argumento clave de venta4'	=> (string)$xml->content->features->key_selling_points->ksp_01_suppt_04_medium,
			'Titular3'					=> (string)$xml->content->features->key_selling_points->ksp_02_headline_short,
			'Titular4'					=> (string)$xml->content->features->key_selling_points->ksp_02_headline_medium,
			'Argumento clave de venta5' 	=> (string)$xml->content->features->key_selling_points->ksp_02_suppt_01_medium,
			'Argumento clave de venta6' 	=> (string)$xml->content->features->key_selling_points->ksp_02_suppt_02_medium,
			'Argumento clave de venta7'	=> (string)$xml->content->features->key_selling_points->ksp_02_suppt_03_medium,
			'Argumento clave de venta8'	=> (string)$xml->content->features->key_selling_points->ksp_02_suppt_04_medium,
			'Titular5' 					=> (string)$xml->content->features->key_selling_points->ksp_03_headline_short,
			'Titular6' 	 				=> (string)$xml->content->features->key_selling_points->ksp_03_headline_medium,
			'Argumento clave de venta9' 	=> (string)$xml->content->features->key_selling_points->ksp_03_suppt_01_medium,
			'Argumento clave de venta10' 	=> (string)$xml->content->features->key_selling_points->ksp_03_suppt_02_medium,
			'Argumento clave de venta11'	=> (string)$xml->content->features->key_selling_points->ksp_03_suppt_03_medium,
			'Argumento clave de venta12'	=> (string)$xml->content->features->key_selling_points->ksp_03_suppt_04_medium,
			'Titular7'					=> (string)$xml->content->features->key_selling_points->ksp_04_headline_short,
			'Titular8'					=> (string)$xml->content->features->key_selling_points->ksp_04_headline_medium,
			'Argumento clave de venta13'	=> (string)$xml->content->features->key_selling_points->ksp_04_suppt_01_medium,
			'Argumento clave de venta14' 	=> (string)$xml->content->features->key_selling_points->ksp_04_suppt_02_medium,
			'Argumento clave de venta15' 	=> (string)$xml->content->features->key_selling_points->ksp_04_suppt_03_medium,
			'Argumento clave de venta16' 	=> (string)$xml->content->features->key_selling_points->ksp_04_suppt_04_medium,
			
			'Nombre del producto2'		=> (string)$xml->content->system->product_names->prodname,
			'Nº de producto' 			=> (string)$xml->content->system->product_numbers->prodnum,
			'Dimensiones mínimas (anch. x prof. x alt.)' 	=> (string)$xml->content->tech_specs->dimensions->dimenmet,
			'Peso'						=> (string)$xml->content->tech_specs->weights->weightmet,
			'Garantía' 					=> (string)$xml->content->tech_specs->warranty->wrntyfeatures,
			
			'Nota al pie [01]' => (string)$xml->content->features->footnotes->msgfootnote_01,
			'Nota al pie [02]' => (string)$xml->content->features->footnotes->msgfootnote_02,
			'Nota al pie [03]' => (string)$xml->content->features->footnotes->msgfootnote_03,
			'Nota al pie [04]' => (string)$xml->content->features->footnotes->msgfootnote_04,
			'Nota al pie [05]' => (string)$xml->content->features->footnotes->msgfootnote_05,
			'Nota al pie [06]' => (string)$xml->content->features->footnotes->msgfootnote_06,
			'Nota al pie [07]' => (string)$xml->content->features->footnotes->msgfootnote_07,
			'Nota al pie [08]' => (string)$xml->content->features->footnotes->msgfootnote_08,
			'Nota al pie [09]' => (string)$xml->content->features->footnotes->msgfootnote_09,
			'Nota al pie [10]' => (string)$xml->content->features->footnotes->msgfootnote_10,
			'Nota al pie [11]' => (string)$xml->content->features->footnotes->msgfootnote_11,
			'Nota al pie [12]' => (string)$xml->content->features->footnotes->msgfootnote_12,
			'Nota al pie [13]' => (string)$xml->content->features->footnotes->msgfootnote_13,
			'Nota al pie [14]' => (string)$xml->content->features->footnotes->msgfootnote_14,
			'Nota al pie [15]' => (string)$xml->content->features->footnotes->msgfootnote_15
			

		);

		$info_renglon = array(
        	'Nombre del producto1'=> 3,
			'Nombre abreviado del producto' => 4,
			
			'Rendimiento de la página (color)'		=> 7,
			'Rendimiento de la página (Negro)'		=> 8,
			'Nota a pie de página sobre el rendimiento de páginas' 	=> 9,
			'Color(es) de cartuchos de impresión' 	=> 10, 
			
			'Descripción general1'		=> 13,
			'Descripción general2'		=> 14,
			'Titular1'					=> 15,
			'Titular2' 					=> 16,
			'Argumento clave de venta1'	=> 17,
			'Argumento clave de venta2' 	=> 18,
			'Argumento clave de venta3' 	=> 19,
			'Argumento clave de venta4'	=> 20,
			'Titular3'					=> 21,
			'Titular4'					=> 22,
			'Argumento clave de venta5' 	=> 23,
			'Argumento clave de venta6' 	=> 24,
			'Argumento clave de venta7'	=> 25,
			'Argumento clave de venta8'	=> 26,
			'Titular5' 					=> 27,
			'Titular6' 	 				=> 28,
			'Argumento clave de venta9' 	=> 29,
			'Argumento clave de venta10' 	=> 30,
			'Argumento clave de venta11'	=> 31,
			'Argumento clave de venta12'	=> 32,
			'Titular7'					=> 33,
			'Titular8'					=> 34,
			'Argumento clave de venta13'	=> 35,
			'Argumento clave de venta14' 	=> 36,
			'Argumento clave de venta15' 	=> 37,
			'Argumento clave de venta16' 	=> 38,
			
			'Nombre del producto2'		=> 41,
			'Nº de producto' 			=> 42,
			'Dimensiones mínimas (anch. x prof. x alt.)' 	=> 43,
			'Peso'						=> 44,
			'Garantía' 					=> 45,
			
			'Nota al pie [01]' => 48,
			'Nota al pie [02]' => 49,
			'Nota al pie [03]' => 50,
			'Nota al pie [04]' => 51,
			'Nota al pie [05]' => 52,
			'Nota al pie [06]' => 53,
			'Nota al pie [07]' => 54,
			'Nota al pie [08]' => 55,
			'Nota al pie [09]' => 56,
			'Nota al pie [10]' => 57,
			'Nota al pie [11]' => 58,
			'Nota al pie [12]' => 59,
			'Nota al pie [13]' => 60,
			'Nota al pie [14]' => 61,
			'Nota al pie [15]' => 62
			//'Spec footnotes'

		);
		
		
		$objPHPExcel = new PHPExcel();
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objPHPExcel = $objReader->load("HP_C.xlsx");
    	
    	//$objWorkSheet = $objPHPExcel->createSheet($info['Nº de producto'],$tab);
    	
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setTitle($info['Nº de producto']);
		//$objPHPExcel->getActiveSheet()->setTitle("$info['Nombre del producto1']");

    	foreach ($info as $label => $value) {
    		$renglon = $info_renglon[$label];
			//$objPHPExcel->setActiveSheetIndex($info['Nombre del producto1']);
			$objPHPExcel->getActiveSheet()->SetCellValue("C$renglon", "$value");
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			
		}
		$tab++;
    	$objWriter->save("HP_Cartriedge".$info['Nombre del producto1'].".xlsx");
        //$tab++;
        
    unset($file);
    flush();
    unset($objPHPExcel);
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