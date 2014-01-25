<?php
/**
 * Created by PhpStorm.
 * User: hidenorigoto
 * Date: 2014/01/25
 * Time: 15:21
 */

namespace Nagoya\Zousyo;


class Book {
    private $isbn;
    private $title;

    /**
     * @var array
     */
    private $kansouList = [];

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

    /**
     * @return array
     */
    public function getKansouList()
    {
        return $this->kansouList;
    }
}