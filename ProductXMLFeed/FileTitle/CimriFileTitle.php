<?php 

namespace ProductXMLFeed\FileTitle;

class CimriFileTitle implements FileTitle
{
    public function getFileTitle(): string
    {
        return "Cimri";
    }
}