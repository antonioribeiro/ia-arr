<?php

namespace Illuminate\Tests;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Arr;

class ArrTest extends TestCase
{
    public function testCollapse()
    {
        $data = [['foo', 'bar'], ['baz'], 'not-array'];

        $this->assertEquals(['foo', 'bar', 'baz'], Arr::collapse($data));
    }

    public function testSet()
    {
        $array = ['products' => ['desk' => ['price' => 100]], 'not-an-array'];
        Arr::set($array, 'products.desk.price', 200);
        $this->assertEquals(['products' => ['desk' => ['price' => 200]]], $array);
    }
}

