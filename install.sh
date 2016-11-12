clear
echo "LL      LL      MM    MM  IIIII               tt            lll lll               "
echo "LL      LL      MMM  MMM   III  nn nnn   sss  tt      aa aa lll lll   eee  rr rr  "
echo "LL      LL      MM MM MM   III  nnn  nn s     tttt   aa aaa lll lll ee   e rrr  r "
echo "LL      LL      MM    MM   III  nn   nn  sss  tt    aa  aaa lll lll eeeee  rr     "
echo "LLLLLLL LLLLLLL MM    MM  IIIII nn   nn     s  tttt  aaa aa lll lll  eeeee rr     "
echo "                                         sss"


curl -s https://jeroxfx.github.io/llM-repo/updatescript.sh >> llM-updater.sh
chmod +x llM-updater.sh
chmod 777 llM-updater.sh
echo "The llM-update.sh is placed here. you can now add it to you rc.local file"
mkdir /var/www/html/Monitor
curl -s https://jeroxfx.github.io/llM-repo/installer.php.raw >> /var/www/html/Monitor/install.php
echo "Now go to http://thispc/Monitor/install.php. WARNING this is going to take ages so don't panic"
exit
