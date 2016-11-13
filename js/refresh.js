(function() {
    setInterval(function(){ ref_CPU(); ref_Memory(); ref_Samba(); ref_Ping();}, 500);
    //setInterval(function(){ ref_Ping();}, 5000);
})();

function ref_CPU() {
    var get_CPU = $.get('API/cpu.php',function(result){ document.getElementById("CPU_Status").innerHTML = result + "%"; });
}

function ref_Memory() {
   var get_Mem = $.get('API/memory.php',function(result){ document.getElementById("Memory_Status").innerHTML = result + "KB" + " of " + document.getElementById("j_Server_Installed_Memory").innerHTML + "KB" });
}

function ref_Samba() {
   var get_Smbd = $.get('API/service.php?s=smbd',function(result){ document.getElementById("Samba_Status").innerHTML = result});
}

var p_rounds = 0;
function ref_Ping() {
    p_rounds = p_rounds + 1;
    if(p_rounds == 10) {
        var get_Ping = $.get('API/ping.php',function(result){ document.getElementById("Ping_Time").innerHTML = result + " ms"; });
        p_rounds = 0;
    }
}
