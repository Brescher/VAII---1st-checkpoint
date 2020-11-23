<?php


class ArticleLoad
{
    private $id;
    private $title;
    private $text;

    /**
     * Article constructor.
     * @param $id
     * @param $title
     * @param $text
     */
    public function __construct($id, $title, $text){
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}