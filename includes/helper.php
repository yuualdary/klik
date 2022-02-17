<?php 

    // define('HOST','localhost');
    // define('USER','root');
    // define('PASS','');
    // define('DB','klik');

    // $db_connect = mysqli_connect(HOST, USER, PASS, DB) or die ('unable connect');
    // header('Content-Type: application/json');

    $db_user = 'root';
    $db_password = '';
    $db_name = 'klik';

    $db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8',$db_user,$db_password);

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    define('APP_Name','test');
?>