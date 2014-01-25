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

    public function register(Book $book)
    {
        $this->books[] = $book;
    }
}
