<?php
/**
 * Created by PhpStorm.
 * User: hidenorigoto
 * Date: 2014/01/25
 * Time: 15:21
 */

namespace Nagoya\Zousyo;


class Book {
    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $registeredAt;

    /**
     * @var array
     */
    private $kansouList = [];

    private $quoteList = [];


    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function addKansou(Kansou $kansou)
    {
        $this->kansouList[] = $kansou;
    }

    public function addQuote(Quote $quote)
    {
        $this->quoteList[] = $quote;
    }

    /**
     * @return array
     */
    public function getKansouList()
    {
        return $this->kansouList;
    }

    /**
     * @param \DateTime $registedAt
     */
    public function setRegisteredAt($registedAt)
    {
        $this->registeredAt = $registedAt;
    }

    /**
     * @return \DateTime
     */
    public function getRegisteredAt()
    {
        return $this->registeredAt;
    }

    /**
     * @param array $quoteList
     */
    public function setQuoteList($quoteList)
    {
        $this->quoteList = $quoteList;
    }

    /**
     * @return array
     */
    public function getQuoteList()
    {
        return $this->quoteList;
    }
}