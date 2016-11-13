<?php
//echo gethostname() . "<br />";
//echo "CPU: " . get_server_cpu_usage() ."%". "<br />";
//echo "RAM: " . get_server_memory_usage() . "%" ."<br />";

function get_server_hostname()
{
    return  gethostname();
}

function get_server_cpu_usage(){
    $load = sys_getloadavg();
    $ll = trim($load[0],"0.");
    
    if($ll == "")
    { return "0"; } else {
    return $ll;
    }

}
    
function get_server_memory_usage(){

    $free = shell_exec('free');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2]/$mem[1]*100;
    $mymem = substr($memory_usage,0,3);
    $mymem = trim($mymem,".");
    return $mymem;
}

function get_server_installed_memory(){
  $fh = fopen('/proc/meminfo','r');
  $mem = 0;
  while ($line = fgets($fh)) {
    $pieces = array();
    if (preg_match('/^MemTotal:\s+(\d+)\skB$/', $line, $pieces)) {
      $mem = $pieces[1];
      break;
    }
  }
  fclose($fh);

  return "$mem";
}

function get_server_detailed_cpu_info()
{
    $last_line = system('ps aux', $retval);
    return $retval;
}

function get_server_number_of_processes()
{
    system('ps -A --no-headers | wc -l', $retval);
    return $retval;
}

function get_server_ping() { 
      $exec = exec("ping -c 1 -s 64 -t 64 8.8.8.8");
      $array = explode("/", end(explode("=", $exec )) );
      return ceil($array[1]);
     
}

function get_service_status(string $service){
    exec("pgrep $service", $output, $return);
    if ($return == 0) {
        return "Started";
    } else
    {
        return "Stopped"; 
    }
}
?>