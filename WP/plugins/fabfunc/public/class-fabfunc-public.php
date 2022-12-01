<?php

class Fabfunc_Public{
    public function __construct()
    {
        file_put_contents( FABFUNC_PLUGIN_DIR . 'log.txt', "PUBLIC\n", FILE_APPEND );    
    }    
}