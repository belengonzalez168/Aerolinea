<?php

class Helper {

    public function check(){
        if (!isset($_SESSION ['IS_LOGGED'])){
            header("Location: " .BASE_URL." home");
            die();
        }
    }
}
