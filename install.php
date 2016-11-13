<?php
    mkdir('API');
    mkdir('css');
    mkdir('fonts'); mkdir('roboto');
    mkdir('Graphing');
    mkdir('js');
    mkdir('img');
    mkdir('wrappers');

    file_put_contents("barebone.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/barebone.php", 'r'));
    file_put_contents("detailinfo.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/detailinfo.php", 'r'));
    file_put_contents("index.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/index.php", 'r'));
    file_put_contents("style.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/style.php", 'r'));
    file_put_contents("shutdown.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/shutdown.php", 'r'));
    file_put_contents("header.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/header.php", 'r'));

    file_put_contents("wrappers/samba.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/wrappers/samba.php", 'r'));
    file_put_contents("wrappers/Minecraft.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/wrappers/Minecraft.php", 'r'));
    file_put_contents("wrappers/OVPN.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/wrappers/OVPN.php", 'r'));
    
    file_put_contents("API/cpu.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/API/cpu.php", 'r'));    
    file_put_contents("API/hostname.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/API/hostname.php", 'r'));  
    file_put_contents("API/memory.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/API/memory.php", 'r'));  
    file_put_contents("API/ping.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/API/ping.php", 'r'));  
    file_put_contents("API/service.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/API/service.php", 'r'));

    file_put_contents("css/materialize.css", fopen("https://github.com/JeroxFX/llM-repo/raw/master/css/materialize.css", 'r'));
    file_put_contents("css/materialize.min.css", fopen("https://github.com/JeroxFX/llM-repo/raw/master/css/materialize.min.css", 'r'));

    file_put_contents("Graphing/index.php", fopen("https://github.com/JeroxFX/llM-repo/raw/master/Graphing&index.php", 'r'));
    
    file_put_contents("js/materialize.js", fopen("https://github.com/JeroxFX/llM-repo/raw/master/js/materialize.js", 'r'));
    file_put_contents("js/materialize.min.js", fopen("https://github.com/JeroxFX/llM-repo/raw/master/js/materialize.min.js", 'r'));
    file_put_contents("js/refresh.js", fopen("https://github.com/JeroxFX/llM-repo/raw/master/js/refresh.js", 'r'));

    header('Location: index.php');
?>