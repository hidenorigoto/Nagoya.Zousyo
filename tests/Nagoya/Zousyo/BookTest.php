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
    public function 感想を追加する()
    {
        $kansou = new Kansou();

        $book = new Book();

        $book->addKansou($kansou);

        $this->assertEquals([$kansou], $book->getKansouList());
    }

    /**
     * @test
     */
    public function 引用を追加する()
    {
        $quote = new Quote();

        $book = new Book();

        $book->addQuote($quote);

        $this->assertEquals([$quote], $book->getQuoteList());
    }
}