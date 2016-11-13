<?php
    include("barebone.php");
    include("header.php");
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    
    <script src="js/materialize.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script type="text/javascript">
       setInterval(function(){ ref_mem(); ref_cpu(); ref_ping(); ref_processes(); }, 30000);
       function ref_mem() { $("#iframe_memory")[0].src = $("#iframe_memory")[0].src; }
       function ref_cpu() { $("#iframe_cpu")[0].src = $("#iframe_cpu")[0].src; }
       function ref_ping() { $("#iframe_ping")[0].src = $("#iframe_ping")[0].src; }
       function ref_processes() { $("#iframe_processes")[0].src = $("#iframe_processes")[0].src; }
    </script>
    
    
    <title><?php echo get_server_hostname(); ?> - Status</title>
</head>

    <body>
        <header>
               <?php echo write_header(); ?>
        </header>
            
        <iframe id="iframe_memory" src="Graphing/index.php?c_data=raw_memory_usage&c_title=Memory" style="height:230px; width:100%; margin:0px; border-style:none;"></iframe>
        <iframe id="iframe_cpu" src="Graphing/index.php?c_data=raw_cpu_usage&c_title=CPU Usage" style="height:230px; width:100%; margin:0px; border-style:none;"> </iframe>
        <iframe id="iframe_processes" src="Graphing/index.php?c_data=raw_processes_count&c_title=Number of Processes" style="height:230px; width:100%; margin:0px; border-style:none;"> </iframe>
        <iframe id="iframe_ping" src="Graphing/index.php?c_data=raw_ping_time&c_title=Ping in ms" style="height:230px; width:100%; margin:0px; border-style:none;"> </iframe>
    </body>
    
</html>