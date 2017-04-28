<?php

// Use function to replace chars deemed illegal in output
/**
 * @param $str
 * @return string
 */
function replace_illegal_chars($str)
{
    return htmlentities($str, $flags = ENT_COMPAT | ENT_XML);
}
