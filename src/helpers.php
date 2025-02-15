<?php

if (!function_exists('collect')) {

    /**
     * @param $arr
     * @return \Neko\Collection\Collection
     */
    function collect($arr)
    {
        return \Neko\Collection\Collection::make($arr);
    }
}