<?php declare(strict_types=1);

namespace WyriHaximusNet\Tests\XHeaders;

use PHPUnit\Framework\TestCase;
use WyriHaximusNet\XHeaders\Headers;

final class HeadersTest extends TestCase
{
    public function testHeaders()
    {
        foreach (Headers::headers() as $header => $value) {
            self::assertInternalType('string', $header);
            self::assertInternalType('string', $value);
        }
    }
}
