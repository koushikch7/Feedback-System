<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION["stuid"]);
unset($_SESSION["usnno"]);
unset($_SESSION["dept"]);
unset($_SESSION["degree"]);
unset($_SESSION["role"]);
unset($_SESSION["deptid"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();

header("Location: /");
exit;
?>