<?php

$About_us_content = urldecode($_POST['About_us_content']);
file_put_contents('About-us.php', html_entity_decode($About_us_content));

?>
