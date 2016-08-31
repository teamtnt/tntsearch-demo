<?php
namespace App;

class QueryExpansion
{
    public static $query = [
        'house'          => 'house hugh',
        'friends'        => 'friends aniston',
        'game of'        => 'game of thrones',
        'game'           => 'game of thrones',
        'breaking'       => 'breaking bad',
        'walker'         => 'walker texas',
        'nanny'          => 'nanny fran',
        'how'            => 'how i',
        'the big bang'   => 'the big bang theory',
        'the big'        => 'the big bang theory',
        'malcolm'        => 'malcolm in the middle',
        'two and a half' => 'two and a half men',
        'two and a'      => 'two and a half men',
        'two and'        => 'two and a half men',
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