<?php 
// This is the directory on the server
$dir = "images/";
$files = glob($dir . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

if (!empty($files)) {
    // Sort files by modification time (newest first)
    usort($files, function($a, $b) {
        return filemtime($b) - filemtime($a);
    });

    foreach($files as $file){
        echo "<div class='photo-item'><img src='" . $dir . basename($file) . "' style='width:100%;height:100%;object-fit:cover;'></div>";
    }
} else {
    echo "<p>No images found in the '" . $dir . "' directory.</p>";
}
?>
