<?php

 $title = $_POST["title"];
 $description = $_POST["description"];

$data = $title."#".$description;

file_put_contents("staticDB.io", $data);

?>
<h1>Module has been sent! :D</h1>
<script>
	setTimeout("window.location = 'prof.php'",800);
</script>