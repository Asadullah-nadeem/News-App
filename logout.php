<?php
session_start();
include("includes/config.php");
$_SESSION['login'] = "";
session_unset();
session_destroy();
?>

<script>
    window.location.href = "index.php";
</script>
