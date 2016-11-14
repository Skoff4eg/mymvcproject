<?php
include "models/Database.php";
include "models/Select.php";
$data = new Select("users");
$resul = $data->getAllData();
print_r ($resul);

?>