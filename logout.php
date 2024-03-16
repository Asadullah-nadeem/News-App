<?php
session_start();
include("config.php");
$_SESSION['login'] = "";
session_unset();
session_destroy();
?>

<script>
    window.location.href = "index.php";
</script>
