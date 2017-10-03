<?php
require_once "functions.php";

if (isset($_COOKIE["success"]) || !empty($_COOKIE["success"])) {
  foreach ($persistence as $value) {
    if (isset($_COOKIE[$value]));
    setcookie($value,null,time());
  }
}

if (isset($_COOKIE["errors"]) || !empty($_COOKIE["success"])) {
  foreach ($persistence as $value) {
    if (isset($_COOKIE[$value]))
    setcookie($value,null,time());
  }
}
Redirect();

 ?>
