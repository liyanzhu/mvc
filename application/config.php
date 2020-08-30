<?php
return array(
    "database"=>array(
        "host"=>"localhost",
        "username"=>"root",
        "password"=>"root",
        "port"=>"3306",
        "dbname"=>"phpdemo"
    ),
    "smarty"=>array(
        "templateDir"=>TPL_PATH,
        "compileDir"=>COMPILE_PATH,
        "cacheDir"=>CACHE_PATH
    ),
    "code"=>array(
        "type"=>"png",
        "width"=>160,
        "height"=>50,
        "codeLen"=>4,
        "seed"=>"abcdefhjkmnprstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ345678",
        "fontSize"=>array("min"=>20,"max"=>35),
        "fontAngle"=>array("min"=>-15,"max"=>15),
        "lineNum"=>array("min"=>2,"max"=>4),
        "lineWidth"=>array("min"=>1,"max"=>2),
        "pixNum"=>array("min"=>80,"max"=>100),
        "fontFile"=>"/Applications/MAMP/htdocs/htdocs/mvc/application/static/font/demo.otf",
        "ischeck"=>false
    )
);