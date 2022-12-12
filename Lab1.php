<?php
$command = $_GET['cmd'];
$command = str_replace("flag", "", $command);
echo file_get_contents($command);
?>
<!DOCTYPE html>
<html>
    <body>
        <p1>Nhâpj command cua bạn: cmd=</p1>
        <!-- /?cmd -->
    </body>
</html>
