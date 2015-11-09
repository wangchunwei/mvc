<?php

return array(
         
        "db" => array(
                "host"     => constant("SAE_MYSQL_HOST_M"),
                "port"     => constant("SAE_MYSQL_PORT"),
                "user"     => constant("SAE_MYSQL_USER"),
                "name"     => constant("SAE_MYSQL_DB"),
                "password" => constant("SAE_MYSQL_PASS"),
        ),

        "defaultController" => "index",
        "defaultAction"     => "index",
        "smarty"            => true,
        "kv"                => "SaeKV",

);


