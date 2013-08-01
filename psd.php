<?php

    $width      = $_POST['width'];
    $column     = $_POST['column'];
    $gutter     = $_POST['gutter'];
    $margin     = $_POST['margin'];

    $folder     = 'grid/';
    $file       = $folder . md5(uniqid()) . '.jsx';
    $position   = 0;
    $guides     = array();

    // left margin
    $guides[] = $position;
    $position += $margin;
    $guides[] = $position;

    // left gutter
    $guides[] = $position;
    $position += $gutter;
    $guides[] = $position;

    // add the guides
    for ($i = 1; $i <= 11; $i++) {

        // column
        $position += $column;

        // column gutter
        $guides[] = $position;
        $position += ($gutter * 2);
        $guides[] = $position;
    }

    // last column
    $position += $column;

    // right gutter
    $guides[] = $position;
    $position += $gutter;
    $guides[] = $position;

    // right margin
    $guides[] = $position;
    $position += $margin;
    $guides[] = $position;

    // read the master file
    $data = file_get_contents('assets/scripts/lib/grid.jsx');

    $data = str_replace('/* GRID_GUIDES */', '[' . implode(',', $guides) . ']', $data);

    // save to file
    file_put_contents($file, $data);

    // return the filename
    echo json_encode($file);