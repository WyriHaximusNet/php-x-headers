<?php

declare(strict_types=1);

namespace WyriHaximusNet\Tests\XHeaders;

use PHPUnit\Framework\Attributes\Test;
use WyriHaximus\TestUtilities\TestCase;
use WyriHaximusNet\XHeaders\Headers;

final class HeadersTest extends TestCase
{
    #[Test]
    public function header(): void
    {
        self::assertCount(1, [...Headers::random(1)]);
    }

    #[Test]
    public function headers(): void
    {
        self::assertCount(3, [...Headers::random(3)]);
    }
}
