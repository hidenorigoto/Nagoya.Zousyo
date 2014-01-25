<?php
/**
 * Created by PhpStorm.
 * User: hidenorigoto
 * Date: 2014/01/25
 * Time: 15:22
 */

namespace Nagoya\Zousyo;


class BookTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testhoge()
    {
        $this->assertInstanceOf(Book::class, new Book());
    }
}
 