<?php 

namespace ProductXMLFeed;

use ProductXMLFeed\FileStruct\CimriFileStruct;
use ProductXMLFeed\FileStruct\FileStruct;

use ProductXMLFeed\FileTitle\CimriFileTitle;
use ProductXMLFeed\FileTitle\FileTitle;

use ProductXMLFeed\CreatingFile\CreateXMLFile;
use ProductXMLFeed\CreatingFile\CreatingFile;


class CimriFileFactory implements FileFactory
{
    public function getFileTitle(): FileTitle
    {
        return new CimriFileTitle();
    }

    public function getFileStruct(): FileStruct
    {
        return new CimriFileStruct($this->getFileTitle());
    }

    public function creatingFile(): CreatingFile
    {
        return new CreateXMLFile();
    }
}