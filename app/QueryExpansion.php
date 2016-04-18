<?php

namespace App;

class QueryExpansion
{
    public static $query = [
        'house'   => 'house hugh',
        'friends' => 'friends aniston',
    ];

    public static function expand($query)
    {
        $query = trim($query);
        if (isset(self::$query[$query])) {
            return self::$query[$query];
        }
        return $query;
    }
}
