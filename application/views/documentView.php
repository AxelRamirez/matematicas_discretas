<?php
    $filename   =   $path.$file;      
    if (!file_exists($filename)) 
        die("File not found");
    $mt =mime_content_type($filename);
    header('Content-Type: ' . $mt);
    if (!($mt == 'image/jpeg' || $mt == 'image/png' || $mt == 'image/gif' || $mt == 'image/bmp' || $mt == 'application/pdf')) 
       header('Content-Disposition: attachment; filename="' . $file . '"');
    header('Cache-Control: max-age=0');
    ob_clean();
    readfile($filename);
?>