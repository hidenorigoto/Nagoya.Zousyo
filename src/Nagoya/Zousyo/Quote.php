<?php
/**
 * Created by PhpStorm.
 * User: hidenorigoto
 * Date: 2014/01/25
 * Time: 16:52
 */

namespace Nagoya\Zousyo;


class Quote
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $page;

    /**
     * @param string $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}