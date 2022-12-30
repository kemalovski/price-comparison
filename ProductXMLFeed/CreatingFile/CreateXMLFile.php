<?php 
namespace ProductXMLFeed\CreatingFile;

class CreateXMLFile implements CreatingFile
{
    public function create(array $products, array $titleAndStruct = [])
    {
        

        // XML nesnesini oluştur
        $xml = new \SimpleXMLElement('<'.$titleAndStruct['elementTitle'].'/>');

        foreach ($products as $product) {
            $item = $xml->addChild('item');
            foreach($titleAndStruct['struct'] as $key => $value){
                $item->addAttribute($key, $product[$value]);
            }
        }

        // XML dosyasını kaydet
        $xml->asXML($titleAndStruct['fileTitle'].'.xml');
    }
}