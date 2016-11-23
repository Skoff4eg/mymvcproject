<?php
session_start();
    if(isset($_SESSION['admin'])){
    include "views/main.php";
    }
    else{
        include "views/login.php";
    }
/*include "models/Database.php";
include "models/Select.php";
$data = new Select("users");
//$resul = $data->getAllData();
$parametrs['login'] = "user";
//$parametrs['password'] = 123;
//$parametrs['id'] = 1;
$resul = $data->getDataWithParametrs($parametrs);
echo "<pre>";
print_r ($resul);
echo "</pre>";*/

?>