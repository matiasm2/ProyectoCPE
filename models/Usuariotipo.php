<?php

namespace app\models;
use Yii;
use yii\base\Model;


class Usuariotipo
{
    public $sectorID;

    public static function CPEAdmin($sectorID){
        if ($sectorID == 1){
            return true;
        }
        else{
            return false;
        }
    }
    public static function usuarioCPE($sectorID){
        if($sectorID == 2){
            return true;
        }
        else{
            return false;
        }

    }
    public static function usuarioInstituto($sectorID){
        if($sectorID == 3){
            return true;
        }
        else{
            return false;
        }
    }
    public static function usuarioPrensa($sectorID){
        if($sectorID == 4){
            return true;
        }
        else{
            return false;
        }

    }
}