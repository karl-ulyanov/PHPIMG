<?php

/*
 * user-groups.php - user groups configuration.
 *
 *
 *
 *
 */

defined("USERGROUP_FLAGS_CAN_VIEWBANS",0);
defined("USERGROUP_FLAGS_CAN_VIEWALLBOARDS",1);
defined("USERGROUP_FLAGS_CAN_BAN",2);
defined("UESRGROUP_FLAGS_CAN_CHANGENAME",3);
defined("UESRGROUP_FLAGS_SUPERUSER",4);

$userGroups = array(
    "anonymous" => array(
        "hostname" => "*",
        "ip" => "*"
    ),
    "user" => array(
        "hostname" => "*",
        "ip" => "*",
        "flags" => UESRGROUP_FLAGS_CAN_CHANGENAME
    ),
    "admin" => array(
        "hostname" => "*",
        "ip" => "*",
        "flags" => USERGROUP_FLAGS_SUPERUSER
    )
);

?>
