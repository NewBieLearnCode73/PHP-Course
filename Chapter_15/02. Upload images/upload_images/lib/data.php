<?php
function show_array($data)
{
    if (is_array($data)) {
        echo '<pre></pre>';
        print_r($data);
        echo '<pre></pre>';
    }
}
