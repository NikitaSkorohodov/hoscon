<?php
class Cmodel {
    public function GetData(){
        $arrayResult[]= array(
            'TITLE'=>'Blor hosting site',
            'DATE'=>'20.06.2020',
            'AUTHOR'=>'VolDeMort',
            'IMAGE'=>'https://news.artent.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT'=>'Blor hosting site',
        );
        $arrayResult[]= array(
            'TITLE'=>'Blor hosting site',
            'DATE'=>'20.06.2021',
            'AUTHOR'=>'igor',
            'IMAGE'=>'https://news.artent.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT'=>'Blor hosting site',
        );
        return $arrayResult;
    }
}