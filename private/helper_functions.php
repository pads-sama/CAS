<?php

//helper function for path
function url_for($script_path)
{
    // add leading slash
    if ($script_path[0] != "/") {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}
