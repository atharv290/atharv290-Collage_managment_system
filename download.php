<?php
if(!empty($_GET['file'])){
    $filename = basename($_GET['file']);
    echo $filename;
    $filepath = "files/".$filename;
    echo $filepath;
    if(!empty($filename)){
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $filepath);
        finfo_close($finfo);
        header("Cache-control:public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: $mimeType");
        header("Content-Transfer-Encoding: binary");
        readfile($filepath);
        exit;
    }
    else{
        echo "File does not exist";
    }
}
?>
