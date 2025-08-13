<?php 
// This is the directory on the server
$dir = "koodi/images/";
$files = glob($dir . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
if (!empty($files)) {
    // Sort files by modification time (newest first)
    usort($files, function($a, $b) {
        return filemtime($b) - filemtime($a);
    });
    
    foreach($files as $file){
        $filename = basename($file);
        $filenameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
        
        // Create a readable title from filename (replace underscores/dashes with spaces, capitalize)
        $title = ucwords(str_replace(['_', '-'], ' ', $filenameWithoutExt));
        
        echo "<div class='photo-item'>";
        echo "<img src='" . $dir . $filename . "' style='width:100%;height:100%;object-fit:cover;'>";
        echo "</div>";
        
        echo "<div class='reddit-item' style='display:none;'>";
        echo "<div class='reddit-item-header'>";
        echo "<div class='reddit-item-title'>" . htmlspecialchars($title) . "</div>";
        echo "</div>";
        echo "<img src='" . $dir . $filename . "'>";
        echo "<div class='reddit-item-footer'>Uploaded: " . date('M j, Y', filemtime($file)) . "</div>";
        echo "</div>";
    }
} else {
    echo "<p>No images found in the '" . $dir . "' directory.</p>";
}
?>
