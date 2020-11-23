<?php


class DBStorage
{

    /**
     * @var PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=article", "root", "dtb456");
    }

    public function LoadAll()
    {
        $result = [];

        $r = $this->pdo->query("SELECT * FROM articles");

        foreach ($r as $item) {
            $result[] = new Article($item['title'],$item['text']);
        }

        return $result;
    }

    public function Save(Article $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO articles (title, text) value (?,?)");
        $statement->execute([$param->getTitle(), $param->getText()]);
    }
}