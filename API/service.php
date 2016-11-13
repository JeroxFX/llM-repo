<?php
    include("../barebone.php");
    if(isset($_GET['s'])){
        $serv = $_GET['s'];
        echo get_service_status($serv);
    }
?>