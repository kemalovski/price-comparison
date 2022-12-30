<?php 
namespace ProductXMLFeed\FileStruct;

use ProductXMLFeed\FileTitle\FileTitle;

abstract class BaseFileStruct implements FileStruct
{
    public $fileTitle;

    protected array $fileStruct;

    public function __construct(FileTitle $fileTitle)
    {
        $this->fileTitle = $fileTitle;
    }
}