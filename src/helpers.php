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
