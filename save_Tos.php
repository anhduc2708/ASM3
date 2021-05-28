<?php
$ToS_content = urldecode($_POST['ToS_content']);
file_put_contents('ToS.php', html_entity_decode($ToS_content));
?>
