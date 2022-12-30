<?php 

namespace ProductXMLFeed\FileStruct;

class CimriFileStruct extends BaseFileStruct
{
    public function getFileStructWithTitle(): array
    {
        $fileStruct['fileTitle'] = $this->fileTitle->getFileTitle();

        $fileStruct['elementTitle'] = 'Product';

        $fileStruct['struct'] = array(
            'id' => 'id',
            'isim' => 'name',
            'fiyat' => 'price',
            'kategori' => 'category',
        );

        return $fileStruct;
    }
}