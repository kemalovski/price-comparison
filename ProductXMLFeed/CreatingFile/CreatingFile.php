<?php 
namespace ProductXMLFeed\CreatingFile;

interface CreatingFile
{
    public function create(array $products, array $titleAndStruct = []);
}