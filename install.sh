echo $(curl -s https://jeroxfx.github.io/llM-repo/updatescript.sh) >> llM-updater.sh
chmod +x llM-updater.sh 
echo "The llM-update.sh is placed here. you can now add it to you rc.local file"

sudo mkdir /var/www/html/Monitor
sudo echo $(curl -s https://jeroxfx.github.io/llM-repo/installer.php.raw) >> /var/www/html/Monitor/install.php
sudo echo "Now go to http://thispc/Monitor/install.php. WARNING this is going to take ages so don't panic"
            
        
