<?php

$file_content = urldecode($_POST['file_content']);
file_put_contents('About-us.php', html_entity_decode($file_content));

?>
