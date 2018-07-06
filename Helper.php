<?php

namespace Parasut;


class Helper
{
    /**
     * @param array $filters
     * @param string $sort
     * @param string $include
     * @return string
     */
    public static function generateQueryString(array $filters = [], $sort = '', $include = '')
    {
        $array = [];
        foreach ($filters as $key => $value) {
            $array[] = sprintf('filter[%s]=%s', $key, $value);
        }

        if (!empty($sort)) {
            $array[] = "sort=$sort";
        }
        if (!empty($include)) {
            $array[] = "include=$include";
        }

        return '?' . implode('&', $array);
    }
}