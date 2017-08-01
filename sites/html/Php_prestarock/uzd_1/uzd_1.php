<?php

$list = array(
    array(
        'Name' => 'Trikse',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
    ),
    array(
        'Name' => 'Vardenis',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
    ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Jonas',
        'Color' => 'Pink'
    ),
);

const X_empty = "";
const Line_x_filler = "-";
const Line_y_filler = "|";
const Line_sep_filler = "+";
const endl = "\n";

function list_head($list)
{
    return array_keys(reset($list));
}

function list_lengths($list, $list_head)
{
    $lengths = [];
    foreach ($list_head as $head) {
        $head_long = strlen($head);
        $max = $head_long;

        foreach ($list as $X) {
            $length = strlen($X[$head]);
            if ($length > $max) {
                $max = $length;
            }
        }
        $lengths[$head] = $max;
    }
    return $lengths;
}

function row_space_list($list_lengths)
{
    $X = X_empty;
    foreach ($list_lengths as $column_length) {
        $X .= Line_sep_filler . str_repeat(Line_x_filler, (2) + $column_length);
    }
    $X .= Line_sep_filler;
    return $X;
}

function row_name($list_head, $list_lengths)
{
    $X = X_empty;
    foreach ($list_head as $head) {
        $X .= Line_y_filler . str_pad($head, (2) + $list_lengths[$head], ' ', STR_PAD_BOTH);
    }
    $X .= Line_y_filler;
    return $X;
}

function row_box($X_box, $list_head, $list_lengths)
{
    $X = X_empty;
    foreach ($list_head as $head) {
        $X .= Line_y_filler . str_repeat(' ', 1) . str_pad($X_box[$head], 1 + $list_lengths[$head], ' ');
    }
    $X .= Line_y_filler;
    return $X;
}

function draw($list) {


    $list_head = list_head($list);
    $list_lengths = list_lengths($list, $list_head);
    $X_separator   = row_space_list($list_lengths);
    $X_heads     = row_name($list_head, $list_lengths);

    echo $X_separator . endl;
    echo $X_heads . endl;
    echo $X_separator . endl;

    foreach ($list as $X_cells) {
        $X_cells = row_box($X_cells, $list_head, $list_lengths);
        echo $X_cells . endl;
    }
    echo $X_separator . endl;
}

draw($list);

?>
