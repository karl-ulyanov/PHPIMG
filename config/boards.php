<?php

/*
 * boards.php - general board configuration.
 *
 *
 *
 *
 */

$boardConfig = array(
    "anonymous" => array(
        "b" => array(
            "dbname" => "random",
            "username" => "dbuser",
            "password" => "dbpass",
            "host" => "localhost"
            "www_ext_allowed" => "png,gif,jpg,jpeg",
            "www_thumb_dir" => "random",
            "www_max_filesize" => 59481,
        ),  
        "gif" => array(
            "dbname" => "gif",
            "username" => "dbuser",
            "password" => "dbpass",
            "host" => "localhost",
            "www_ext_allowed" => "gif",
            "www_thumb_dir" => "gif",
            "www_max_filesize" => 59481,
        )  
    ),
    "admin" => array(
        "admin" => array(
            "dbname" => "administrators",
            "username" => "dbuser",
            "password" => "dbpass",
            "host" => "localhost"
            "www_ext_allowed" => "png,gif,jpg,jpeg",
            "www_thumb_dir" => "admin",
            "www_max_filesize" => 59481,
        )
    )
);  

?>
