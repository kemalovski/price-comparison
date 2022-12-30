<?php 
namespace ProductXMLFeed;
use ProductXMLFeed\FileTitle\FileTitle;
use ProductXMLFeed\FileStruct\FileStruct;
use ProductXMLFeed\CreatingFile\CreatingFile;

interface FileFactory
{
    public function getFileTitle(): FileTitle;

    public function getFileStruct(): FileStruct;

    public function creatingFile(): CreatingFile;
}