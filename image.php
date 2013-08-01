<?php
    $data   = $_POST['data'];
    $folder = 'grid/';
    $file   = $folder . md5(uniqid()) . '.png';

    // remove "data:image/png;base64,"
    $uri    =  substr($data, strpos($data, ",")+1);

    // save to file
    file_put_contents($file, base64_decode($uri));

    // return the filename
    echo json_encode($file);