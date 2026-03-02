<?php

declare(strict_types=1);

namespace WyriHaximusNet\XHeaders;

use function array_rand;
use function count;
use function is_string;

final class Headers
{
    public const array HEADERS = [
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
     *
     * @api
     */
    public static function random(int $count): iterable
    {
        if ($count < 1) {
            yield from [];
        }

        if ($count > count(self::HEADERS)) {
            $count = count(self::HEADERS);
        }

        /** @phpstan-ignore argument.type */
        $keys = array_rand(self::HEADERS, $count);
        if (is_string($keys)) {
            /** @phpstan-ignore shipmonk.variableTypeOverwritten */
            $keys = [$keys];
        }

        foreach ($keys as $key) {
            yield $key => self::HEADERS[$key];
        }
    }
}
