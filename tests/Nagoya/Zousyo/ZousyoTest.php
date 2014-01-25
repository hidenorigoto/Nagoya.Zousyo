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

    /**
     * @test
     */
    public function 登録日の降順の一覧を取得()
    {

        $book1 = new Book();
        $book1->setRegisteredAt(new \DateTime('2014-1-1'));
        $book2 = new Book();
        $book2->setRegisteredAt(new \DateTime('2014-1-2'));
        $book3 = new Book();
        $book3->setRegisteredAt(new \DateTime('2014-1-3'));

        $this->zousyo->setBooks([$book1, $book2, $book3]);


        $this->assertEquals([$book3, $book2, $book1], $this->zousyo->getListSortedByRegisteredDate());
    }
}
