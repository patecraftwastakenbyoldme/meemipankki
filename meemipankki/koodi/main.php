<?php
$dir = "" // laittakaa kuvien dir tänne

$files = glob($dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

foreach($files as $file){
    echo "<img src='$file' style='max-width:200px;margin:5px;'>";
}

?>
