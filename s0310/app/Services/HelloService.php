<?php

    namespace App\Services;

    class HelloService{

        public function sayHello(){
            return "hello service";
        }


        public function addMath($math,$score){
            
            return $math+$score;
        }
        
    }