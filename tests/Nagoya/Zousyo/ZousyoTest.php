<?php

namespace Nagoya\Zousyo;

class ZousyoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Zousyo
     */
    protected $zousyo;

    protected function setUp()
    {
        $this->zousyo = new Zousyo;
    }

    public function testNew()
    {
        $actual = $this->zousyo;
        $this->assertInstanceOf('\Nagoya\Zousyo\Zousyo', $actual);
    }

    /**
     * @expectedException \Nagoya\Zousyo\Exception\LogicException
     */
    public function testException()
    {
        throw new Exception\LogicException;
    }

    /**
     * @test
     */
    public function 登録する()
    {
        $book = new Book();
        $this->zousyo->register($book);

        $this->assertEquals($this->zousyo->getBooks(), [$book]);
    }
}
