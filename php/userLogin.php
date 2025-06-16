<?php
if(isset($_SESSION["user"])) {
    header(header: "Localition: ./pages/home.php");
}
?>