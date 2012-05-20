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
            "db_name" => "random",
            "db_user" => "dbuser",
            "db_pass" => "dbpass",
            "db_host" => "localhost"
            "www_ext_allowed" => "png,gif,jpg,jpeg",
            "www_thumb_dir" => "random",
            "www_max_filesize" => 59481,
            "www_max_threads_per_page" => 10,
            "www_max_threads" => 100
        ),  
        "gif" => array(
            "db_name" => "gif",
            "db_user" => "dbuser",
            "db_pass" => "dbpass",
            "db_host" => "localhost",
            "www_ext_allowed" => "gif",
            "www_thumb_dir" => "gif",
            "www_max_filesize" => 59481,
            "www_max_threads_per_page" => 10,
            "www_max_threads" => 50
        )  
    ),
    "admin" => array(
        "admin" => array(
            "db_name" => "administrators",
            "db_user" => "dbuser",
            "db_pass" => "dbpass",
            "db_host" => "localhost"
            "www_ext_allowed" => "png,gif,jpg,jpeg",
            "www_thumb_dir" => "admin",
            "www_max_filesize" => 59481,
            "www_max_threads" => 100,
            "www_max_threads_per_page" => 20
        )
    )
);  

?>
