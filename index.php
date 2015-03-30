<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?PHP 
ini_set('display_errors', '1');
set_time_limit (36000);
ini_set("memory_limit","12G");
$path_to_xml = __DIR__.'/XML';
require "Classes/PHPExcel.php";
require 'Classes/PHPExcel/IOFactory.php';
include 'cartridge.php';
include 'printer.php';
include 'monitor.php';
include 'pc.php';
include 'notebook.php';
include 'accesories.php';
include 'tablet.php';

$files = scandir($path_to_xml);
$tab=0;
//print_r($files);
$file_printer, $file_cartridge, $file_notebook, $file_tablet, $file_monitor, $file_pc, $file_accesories = '';
foreach ($files as $file) {
    
	//unset($objPHPExcel);
    //unset($xml);
	if (substr($file, strrpos($file, '.')+1) == 'xml') {
        $xml = simplexml_load_file(__DIR__."/XML/$file");
        $product_name 	= strtolower((string)$xml->content->system->product_names->prodname);
        $product_number = (string)$xml->content->system->product_numbers->prodnum;
        
        if(strstr($product_name, 'cartucho') || strstr($product_name, 'tinta') || strstr($product_name, 'cabezal') || strstr($product_name, 'tambor') || strstr($product_name, "tóner") || strstr($product_name, 'cartridge')) :
        	//echo "<div style=\"background-color: red;\">$product_name    con numero:    $product_number</div>";
            $info = cartridge($xml);
            $info = extract_information($info);
            $file_cartridge=$info[0].PHP_EOL.$info[1];
       
        elseif(strstr($product_name, 'impresora')):
            $info = printer($xml);
            $info = extract_information($info);
            $file_cartridge=$info[0].PHP_EOL.$info[1];
        elseif(strstr($product_name, 'notebook') || strstr($product_name, 'laptop')):
        	//echo "<div style=\"background-color: green;\">$product_name    con numero:    $product_number</div>";
            $info = notebook($xml);
            $info = extract_information($info);
            $$file_notebook=$info[0].PHP_EOL.$info[1];
        elseif (strstr($product_name, "tablet")):
        	//echo "<div style=\"background-color: blue;\">$product_name    con numero:    $product_number</div>";
            $info = tablet($xml);
            $info = extract_information($info);
            $$file_tablet=$info[0].PHP_EOL.$info[1];
        elseif (strstr($product_name, 'monitor')):
        	//echo "<div style=\"background-color: pink;\">$product_name    con numero:    $product_number</div>";
            $info = monitor($xml);
            $info = extract_information($info);
            $$file_monitor=$info[0].PHP_EOL.$info[1];
        elseif (strstr($product_name, 'pc') || strstr($product_name, 'desktop') || strstr($product_name, 'todo-en-uno') || strstr($product_name, 'pavilion') || strstr($product_name, 'stream') || strstr($product_name, 'envy')):
        	//echo "<div style=\"background-color: brown;\">$product_name    con numero:    $product_number</div>";
            $info = pc($xml);
            $info = extract_information($info);
            $$file_pc=$info[0].PHP_EOL.$info[1];
        else:
        	//echo "<div style=\"background-color: yellow;\">$product_name    con numero:    $product_number</div>";
            $info = accesories($xml);
            $info = extract_information($info);
            $$file_accesories=$info[0].PHP_EOL.$info[1];
        endif;

		
    }
}

function extract_information($file){
    $info_label, $info_value= '';
    foreach ($info as $label => $value) {
               $info_label.=$label;
               $info_value.= $value;
            }
    $labels_values=[$info_label, $info_value];
    return $labels_values
}


?>
</html>