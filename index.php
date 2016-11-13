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
    
    
    <script src="js/refresh.js"></script>
    
    <script type="text/javascript">
        (function() {        
            
        })();
    
    </script>
    
    
    <title><?php echo get_server_hostname(); ?> - Status</title>
</head>

    <body>
        <header>
            <?php echo write_header(); ?>  
        </header>
        
        <div id="hiddenValues">
            <p id="j_Server_Installed_Memory"><?php echo get_server_installed_memory();?></p>
        </div>
        
        <div id="AllTheThings">
        <div id="overallSystemStuff">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card blue-grey hoverable darken-1" id="Memory_Card">
                        <div class="card-content white-text">
                            <span class="card-title">Memory</span>
                                <p id="Memory_Status"><?php echo get_server_memory_usage() . "KB of " . get_server_installed_memory() . "KB"; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="cpuraminfo.php">Details</a>
                    </div>
                    </div>
                    
                    <div class="card blue-grey hoverable darken-1" id="CPU_Card">
                        <div class="card-content white-text">
                            <span class="card-title">CPU</span>
                            <p id="CPU_Status"><?php echo get_server_cpu_usage() . "%" ?></p> <p><?php"Processes: " . get_server_number_of_processes(); ?></p>
                        </div>
                        <div class="card-action">
                            <a href="cpuraminfo.php">Details</a>
                        </div>
                    </div>
                    
                    <div class="card blue-grey hoverable darken-1" id="Ping_Card">
                        <div class="card-content white-text">
                            <span class="card-title">Ping (8.8.8.8)</span>
                            <p id="Ping_Time"><?php echo get_server_ping() . 'ms';?></p>
                        </div>
                        <div class="card-action">
                            <a href="cpuraminfo.php">Details</a>
                        </div>
                    </div>
                    
                    <div class="card blue-grey hoverable darken-1" id="Samba_Card">
                        <div class="card-content white-text">
                            <span class="card-title">Samba</span>
                                <p id="Samba_Status"><?php echo get_service_status('smbd');?></p>
                        </div>
                        <div class="card-action">
                            <a href="cpuraminfo.php">Start</a>
                            <a href="cpuraminfo.php">Stop</a>
                            <a href="cpuraminfo.php">Restart</a>
                        </div>
                    </div>
                </div>
            </div>       
            </div>
            
            </div>
    </body>
    
</html>