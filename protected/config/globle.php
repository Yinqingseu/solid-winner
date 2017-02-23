 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Globle {
    public static $typeNVE = 0;
    public $id = 0;
    public function globleNEC($type){
       // $GLOBALS['typeNVE'] =(int)$type;         
       self::$typeNVE = (int)$type;//有self代表静态成员，否则不是
    }
    public static function getType(){
        return self::$typeNVE;
    }
    public function test(){
        //$GLOBALS['id'] = 30;
        $this->id = 40;
    }
    public function  getID(){
        echo $this->id;
    }
    
}
    