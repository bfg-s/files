<?php

if (!function_exists("is_image")) {

    /**
     * Is Image
     *
     * @param $path
     * @return bool
     */
    function is_image($path)
    {
        try {

            return !!exif_imagetype($path);

        } catch (Exception $exception) {}

        return false;
    }
}

if (!function_exists('is_video')) {
    /**
     * Is video file
     * @param $file
     * @return bool
     */
    function is_video($file): bool
    {
        return is_file($file) && (str_starts_with(mime_content_type($file), 'video/'));
    }
}
