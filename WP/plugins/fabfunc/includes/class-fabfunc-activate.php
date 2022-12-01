<?php

class Fabfunc_Activate {
    public static function activate(){
        global $wpdb;
        $wpdb->query( "CREATE TABLE IF NOT EXISTS `fabfunc_tbl` (
            `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
            `content` text NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;" );
          $query = "INSERT INTO `fabfunc_tbl` (`id`, `content`) VALUES (NULL, %s)";
          $wpdb-> query( $wpdb->prepare( $query, 'lorem ipsum...' ) );
        

    }
}