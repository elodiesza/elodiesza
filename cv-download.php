<?php
if (isset($_POST['download'])) {
    $file_path = $_POST['file_path'];

    if (file_exists($file_path)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);
        exit; 
    } else {
        echo 'File not found.';
    }
}
?>