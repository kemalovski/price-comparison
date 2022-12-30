<?php 
namespace ProductXMLFeed\Product;

use ProductXMLFeed\FileFactory;

class Product
{

    public $products;

    public function __construct($filePath)
    {
        $this->products = json_decode(
            file_get_contents($filePath),true
        );
    }

    public function createFile(FileFactory $factory)
    {
        $file = $factory->getFileStruct();

        $renderer = $factory->creatingFile();

        return $renderer->create($this->products, $file->getFileStructWithTitle());
    }
}