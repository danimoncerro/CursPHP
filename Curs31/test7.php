<?php
    class sessionControle{
        //...
        //...
        public function addSession($index, $value){
            $_SESSION[$index] = $value;
            return $_SESSION[$index];
        }
    }
?>