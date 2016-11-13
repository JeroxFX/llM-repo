<?php
    $load = sys_getloadavg();
    $ll = trim($load[0],"0.");
    
    if($ll == "")
    { echo "0"; } else {
    echo $ll;
    }
?>