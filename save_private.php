<?php
$private_content = urldecode($_POST['private_content']);
file_put_contents('private.php', html_entity_decode($private_content));
?>
