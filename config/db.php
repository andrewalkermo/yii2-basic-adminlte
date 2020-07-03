<?php
if(getenv("CLEARDB_DATABASE_URL")) {
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
}
else {
    $server = "localhost";
    $username = "rootphp";
    $password = "rootphp";
    $db = "yii2-basic-adminlte";
}
return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host={$server};dbname={$db}",
    'username' => $username,
    'password' => $password,
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];