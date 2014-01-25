<?php
/**
 * This file is part of the Nagoya.Zousyo
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace Nagoya\Zousyo;

/**
 * Nagoya.Zousyo
 *
 * @package Nagoya.Zousyo
 */
class Zousyo
{
    /**
     * @var array
     */
    private $books = [];

    /**
     * @return array
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * @param array $books
     */
    public function setBooks($books)
    {
        $this->books = $books;
    }


    public function register(Book $book)
    {
        $book->setRegisteredAt(new \DateTime());
        $this->books[] = $book;
    }

    public function getListSortedByRegisteredDate()
    {
        // 降順
        usort($this->books, function ($a, $b) {
            /** @var $a Book */
            /** @var $b Book */
            return $b->getRegisteredAt()->getTimestamp() - $a->getRegisteredAt()->getTimestamp();
        });

        return $this->books;
    }
}
