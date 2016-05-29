<?php
/**
 * Created by PhpStorm.
 * User: ivanmilic
 * Date: 5/29/16
 * Time: 14:21
 */


if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}

?>