<?php
/**
 * Created by PhpStorm.
 * User: Aliona
 * Date: 12.01.2019
 * Time: 5:42
 */

class Word extends DB_connect
{
    protected $dbo;

    public function __construct($dbo)
    {
        if (is_object($dbo)) {
            $this->db = $dbo;
        }
    }

    public function OutputWord (){

    }

    public function Next (){

    }

    public function RandomString (){

    }

    public function GetRus (){

    }

    public function GetEng (){

    }

    public function OutputEng (){

    }

    public function OutputRus (){

    }
}