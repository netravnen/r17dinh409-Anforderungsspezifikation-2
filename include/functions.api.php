<?php

/**
 * Use function to replace chars deemed illegal in output
 */
function replace_illegal_chars($str)
{
    return htmlentities($str, $flags = ENT_COMPAT | ENT_XML);
}
