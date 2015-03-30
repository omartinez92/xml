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

$files = scandir($path_to_xml);
$tab=0;
//print_r($files);
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
        elseif(strstr($product_name, 'impresora')):
            $info = printer($xml);
        elseif(strstr($product_name, 'notebook') || strstr($product_name, 'laptop')):
        	echo "<div style=\"background-color: green;\">$product_name    con numero:    $product_number</div>";

        elseif (strstr($product_name, "tablet")):
        	echo "<div style=\"background-color: blue;\">$product_name    con numero:    $product_number</div>";

        elseif (strstr($product_name, 'monitor')):
        	echo "<div style=\"background-color: pink;\">$product_name    con numero:    $product_number</div>";

        elseif (strstr($product_name, 'pc') || strstr($product_name, 'desktop') || strstr($product_name, 'todo-en-uno') || strstr($product_name, 'pavilion') || strstr($product_name, 'stream') || strstr($product_name, 'envy')):
        	echo "<div style=\"background-color: brown;\">$product_name    con numero:    $product_number</div>";

        else:
        	echo "<div style=\"background-color: yellow;\">$product_name    con numero:    $product_number</div>";

        endif;

		
    }
}




?>
</html>