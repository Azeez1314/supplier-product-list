<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;

class CsvParser extends Controller
{
    // let's create AASTRA.csv file
    public static function readAASTRA(){
        $file = public_path('csv/AASTRA.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

     // let's create ABOOK.csv file
     public static function readABOOK(){
        $file = public_path('csv/ABOOK.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

        // let's create ACCESSORIZE.csv file
        public static function readACCESSORIZE(){
            $file = public_path('csv/ACCESSORIZE.csv');
            $data = Reader::createFromPath($file, 'r');
            $data->setHeaderOffset(0);
            $header = $data->getHeader();
            $records = $data->getRecords();
            print_r($header);
            foreach($records as $r){
                echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
            }
        }

        // let's create Acer.csv file
            public static function readAcer(){
                $file = public_path('csv/Acer.csv');
                $data = Reader::createFromPath($file, 'r');
                $data->setHeaderOffset(0);
                $header = $data->getHeader();
                $records = $data->getRecords();
                print_r($header);
                foreach($records as $r){
                    echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
                }
            }
        
    // let's create ADMET.csv file
        public static function readADMET(){
            $file = public_path('csv/ADMET.csv');
            $data = Reader::createFromPath($file, 'r');
            $data->setHeaderOffset(0);
            $header = $data->getHeader();
            $records = $data->getRecords();
            print_r($header);
            foreach($records as $r){
                echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
            }
        }

    // let's create AEROFLEX.csv file
    public static function readAEROFLEX(){
        $file = public_path('csv/AEROFLEX.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create AIRFORCE.csv file
    public static function readAIRFORCE(){
        $file = public_path('csv/AIRFORCE.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create Alcatel.csv file
    public static function readAlcatel(){
        $file = public_path('csv/Alcatel.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count'];"\r\n";
        }
    }

    // let's create AKASA.csv file
    public static function readAKASA(){
        $file = public_path('csv/AKASA.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create Apple.csv file
    public static function readApple(){
        $file = public_path('csv/Apple.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create Samsung.csv file
    public static function readSamsung(){
        $file = public_path('csv/Samsung.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create ZAGG.csv file
    public static function readZAGG(){
        $file = public_path('csv/ZAGG.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create XQISIT.csv file
    public static function readXQISIT(){
        $file = public_path('csv/XQISIT.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create Huawei.csv file
    public static function readHuawei(){
        $file = public_path('csv/Huawei.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create LG.csv file
    public static function readLG(){
        $file = public_path('csv/LG.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create Microsoft.csv file
    public static function readMicrosoft(){
        $file = public_path('csv/Microsoft.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create Nokia.csv file
    public static function readNokia(){
        $file = public_path('csv/Nokia.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    
    // let's create Sony.csv file
    public static function readSony(){
        $file = public_path('csv/Sony.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create Vodafone.csv file
    public static function readVodafone(){
        $file = public_path('csv/Vodafone.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }

    // let's create ZTE.csv file
    public static function readZTE(){
        $file = public_path('csv/ZTE.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['make'].",".$r['model'].",".$r['colour'].",".$r['capacity'].",".$r['network'].",".$r['grade'].",".$r['condition'].",".$r['count']."\r\n";
        }
    }


    




     // let's create product_tab_separated.csv file
     public static function readProduct(){
        $file = public_path('csv/product_tab_separated.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['brand_name']."   ".$r['model_name']."   ".$r['condition_name']."   ".$r['grade_name']."   ".$r['gb_spec_name']."   ".$r['colour_name']."   ".$r['network_name']."\r\n";
        }
    }

     // let's create product_comma_separated.csv file
     public static function readComma(){
        $file = public_path('csv/product_comma_separated.csv');
        $data = Reader::createFromPath($file, 'r');
        $data->setHeaderOffset(0);
        $header = $data->getHeader();
        $records = $data->getRecords();
        print_r($header);
        foreach($records as $r){
            echo $r['brand_name'].",".$r['model_name'].",".$r['condition_name'].",".$r['grade_name'].",".$r['gb_spec_name'].",".$r['colour_name'].",".$r['network_name']."\r\n";
        }
    }
}
