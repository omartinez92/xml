<?php



$path_to_xml = __DIR__.'/xml';

//xdebug_break();

$buffer = new Buffer();

$files = scandir($path_to_xml);
foreach ($files as $file) {
    if (substr($file, strrpos($file, '.')+1) == 'xml') {
        $xml = simplexml_load_file(__DIR__."/xml/$file");
        $itemNumber = $xml->attributes()->number;
		$productNumber = (string) $xml->content->system->product_numbers->prodnum;;
		$productName = (string)$xml->content->system->product_names->prodname;
		$productLongName = (string)$xml->content->system->product_names->prodlongname;
		$geographic = (string)$xml->content->tech_specs->geographic->coo;
		$battery=(string)$xml->content->tech_specs->battery_and_power->powersupplytype;
		$warranty=(string)$xml->content->tech_specs->warranty->wrntyfeatures;
		$weight=(string)$xml->content->tech_specs->weights->weightmet;
		echo $geographic;
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
echo $contents;

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

?>