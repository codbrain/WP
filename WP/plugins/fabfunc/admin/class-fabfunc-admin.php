<?php

class Fabfunc_Admin{
    public function __construct()
    {
        file_put_contents( FABFUNC_PLUGIN_DIR . 'log.txt', "ADMIN\n", FILE_APPEND );    
    }    
}