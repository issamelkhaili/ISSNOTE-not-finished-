<?php
function create_note($filename)
{
    $temp = fopen($filename, 'w');
    if ($temp) {
        fclose($temp);
        return true;
    }
    return false;
}

function write_content_to_note($content, $filename)
{
    return file_put_contents($filename, $content) !== false;
}

function append_to_note($content, $filename)
{
    return file_put_contents($filename, $content, FILE_APPEND) !== false;
}

function read_content($filename)
{
    if (file_exists($filename)) {
        return file_get_contents($filename);
    }
    return false;
}

function delete_note($filename)
{
    if (file_exists($filename)) {
        return unlink($filename);
    }
    return false;
}

function note_exists($filename)
{
    return file_exists($filename);
}

function rename_note($old_filename, $new_filename)
{
    if (file_exists($old_filename)) {
        return rename($old_filename, $new_filename);
    }
    return false;
}

function get_note_modified_time($filename)
{
    if (file_exists($filename)) {
        return filemtime($filename);
    }
    return false;
}
?>
