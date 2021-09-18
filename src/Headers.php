<?php

declare(strict_types=1);

namespace WyriHaximusNet\XHeaders;

use function array_rand;
use function is_string;

final class Headers
{
    public const HEADERS = [
        'X-nananana' => 'Batcache',
        'X-Wars' => 'May the Force be with us',
        'X-Trek' => 'Live long and prosper',
        'X-Gate' => 'Jaffa! Kree!',
        'X-Oniell' => 'In the middle of my backswing!',
        'X-Tealc' => 'Indeed',
        'X-Anna' => 'Do you want to build a snowman?',
        'X-Olaf' => 'I love summer!',
        'X-Wing' => 'Pew pew',
        'X-ClacksOverhead' => 'GNU Terry Pratchett',
    ];

    /**
     * @return iterable<string, string>
     */
    public static function random(int $count): iterable
    {
        $keys = array_rand(self::HEADERS, $count);
        if (is_string($keys)) {
            $keys = [$keys];
        }

        foreach ($keys as $key) {
            yield $key => self::HEADERS[$key];
        }
    }
}
