<?php

class Json{
    public static function stringify($value) {
        return json_encode($value);
    }

    public static function parse($value) {
        return json_decode($value,true);
    }
}

class Math{
    public static function random($min,$max){
        return rand($min,$max);
    }

    public static function floor($num){
        return floor($num);
    }

    public static function ceil($num){
        return ceil($num);
    }
}
?>