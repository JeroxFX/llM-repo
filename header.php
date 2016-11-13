<?php
$smbd = "Enabled";
$McSrv = "Enabled";
$ovpn = "Disabled";

function write_header(){    
    $cr = '<ul>';
    $cr .= '<li><a href="index.php" class="nav_active" id="nav_hostname" >' . get_server_hostname() . '</a></li>';
    $cr .= '<!--    <li style="float:right"><a href="logout.php">Logout</a></li>-->';
    $cr .= '<!-- <li style="float:right"><a href="shutdown.php"><img src="" width="50px" height="50px" alt="Power"/></a></li>-->';
    //if ($smbd != "Disabled") { $cr .= '<li><a href="wrappers/samba.php">Samba</a></li>'; }
    //if ($McSrv != "Disabled") { $cr .= '<li><a href="wrappers/Minecraft.php">Minecraft</a></li>'; }
    //if ($ovpn != "Disabled") { $cr .= '<li><a href="wrappers/ovpn.php">OpenVPN</a></li>'; }
    $cr .= '</ul>';
    return $cr;
}
?>