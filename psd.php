<?php

    $columns    = $_POST['columns'];
    $gutters    = $_POST['gutters'];
    $margin     = $_POST['margin'];

    $folder     = 'grid/';
    $file       = $folder . md5(uniqid()) . '.jsx';
    $position   = 0;
    $guides     = array();
    $current    = 1;

    // left margin
    $guides[] = $position;
    $position += $margin;
    $guides[] = $position;

    if($columns) {
        foreach($columns as $index => $column) {

            // column gutter
            if($current == 1)
                $guides[] = $position;
            $position += $gutters[$index];
            $guides[] = $position;

            // column
            $position += $column;

            // column gutter
            $guides[] = $position;
            $position += $gutters[$index];

            $current++;
        }
    }

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
    echo $file;