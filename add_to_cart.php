<?php
session_start();
$item = $_POST["shopping"];


if (isset($_SESSION["array"])) {
  array_push($_SESSION["array"],$item);
}
else {
  $_SESSION["array"] = [$item];
}


// settinf data on session
var_dump($_SESSION["array"]) ;
header("location: /");
