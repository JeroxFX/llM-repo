#!/bin/bash
clear
echo started llM updater script

while true; do
clear	
	printf "lll lll MM    MM\n"
	printf "lll lll MMM  MMM\n"
	printf "lll lll MM MM MM\n"
	printf "lll lll MM    MM\n"
	printf "lll lll MM    MM\n"
		
	printf "llM usage status\n"


	now=$(date +%Y/%m/%d-%H:%M:%S)
	#now=$(date +"%T")
	echo "Current time : $now"
	cpu=$(curl -s http://localhost/Monitor/API/cpu.php)
	echo "CPU Usage: $cpu"
	memory=$(curl -s http://localhost/Monitor/API/memory.php)
	echo "Memory Usage: $memory"
	ping=$(curl -s http://localhost/Monitor/API/ping.php)
	echo "Ping: $ping"


	printf "$now $cpu\n" >> /var/www/html/Monitor/Graphing/raw_cpu_usage
	printf "$now $memory\n" >> /var/www/html/Monitor/Graphing/raw_memory_usage
	printf "$now $ping\n" >> /var/www/html/Monitor/Graphing/raw_ping_time
	printf "$now 22\n" >> /var/www/html/Monitor/Graphing/raw_processes_count
sleep 30
done
