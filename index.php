<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?PHP 
ini_set('display_errors', '1');
set_time_limit (36000);
ini_set("memory_limit","12G");
$path_to_xml = __DIR__.'/XML';
require "Classes/PHPExcel.php";
require 'Classes/PHPExcel/IOFactory.php';
include 'cartridge.php';
//include 'printer.php';
//include 'monitor.php';
include 'pc.php';
include 'notebook.php';
include 'accesories.php';
include 'tablet.php';

$files = scandir($path_to_xml);
$file_printer = $file_cartridge = $file_notebook = $file_tablet = $file_monitor = $file_pc = $file_accesories = '';
foreach ($files as $file) {
	unset($info);
	if (substr($file, strrpos($file, '.')+1) == 'xml') {
        echo"Entro al IF como $file <br>";
        $xml = simplexml_load_file(__DIR__."/XML/$file");
        $product_name 	= strtolower((string)$xml->content->system->product_names->prodname);
        
        if(strstr($product_name, 'cartucho') || strstr($product_name, 'tinta') || strstr($product_name, 'cabezal') || strstr($product_name, 'tambor') || strstr($product_name, "tóner") || strstr($product_name, 'cartridge')) :
        	$info = cartridge($xml);
            $info = extract_information($info);
            $file_cartridge=$info[0]."\n".$info[1]."\n";
            file_put_contents('Cartridge'.(string)date('Y-m-d').'.csv', $file_cartridge, FILE_APPEND | LOCK_EX);

        elseif(strstr($product_name, 'impresora')):
            $info = printer($xml);
            $info = extract_information($info);
            $file_printer=$info[0]."\n".$info[1]."\n";
            file_put_contents('Printer'.(string)date('Y-m-d').'.csv', $file_printer, FILE_APPEND | LOCK_EX);

        elseif(strstr($product_name, 'notebook') || strstr($product_name, 'laptop')):
            $info = notebook($xml);
            $info = extract_information($info);
            $file_notebook=$info[0]."\n".$info[1]."\n";
            file_put_contents('Notebook'.(string)date('Y-m-d').'.csv', $file_notebook, FILE_APPEND | LOCK_EX);

        elseif (strstr($product_name, "tablet")):
        	$info = tablet($xml);
            $info = extract_information($info);
            $file_tablet=$info[0]."\n".$info[1]."\n";
            file_put_contents('Tablet'.(string)date('Y-m-d').'.csv', $file_tablet, FILE_APPEND | LOCK_EX);

        elseif (strstr($product_name, 'monitor')):
        	$info = monitor($xml);
            $info = extract_information($info);
            $file_monitor=$info[0]."\n".$info[1]."\n";
            file_put_contents('Monitor'.(string)date('Y-m-d').'.csv', $file_monitor, FILE_APPEND | LOCK_EX);

        elseif (strstr($product_name, 'pc') || strstr($product_name, 'desktop') || strstr($product_name, 'todo-en-uno') || strstr($product_name, 'pavilion') || strstr($product_name, 'stream') || strstr($product_name, 'envy')):
            $info = pc($xml);
            $info = extract_information($info);
            $file_pc=$info[0]."\n".$info[1]."\n";
            file_put_contents('PC'.(string)date('Y-m-d').'.csv', $file_pc, FILE_APPEND | LOCK_EX);

        else:
            $info = accesories($xml);
            $info = extract_information($info);
            $file_accesories=$info[0]."\n".$info[1]."\n";
            file_put_contents('Accesories'.(string)date('Y-m-d').'.csv', $file_accesories, FILE_APPEND | LOCK_EX);
        endif;

		
    }
}

function extract_information($file){
    $info_label = $info_value= '';
    foreach ($file as $label => $value) {
                $label = str_replace(',',' ',$label);
                $value = str_replace(',',' ',$value);
                $info_label.= $label.',';
                $info_value.= $value.',';
            }
    $labels_values=[$info_label, $info_value];
    return $labels_values;
}
?>
</html>