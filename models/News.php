<?php
class News
{
    public static function Select()
    {
        $mysqli = Db::getConnection();

        $result_set = $mysqli->query('SELECT * FROM news ORDER BY date DESC');

        $res = [];
        while ($row = $result_set->fetch_assoc()) {
            $res[] = $row;
        }

        $result_set->close();
        $mysqli->close();


        return $res;
    }

    public static function Insert($arr)
    {

        if(!empty($arr)){
            $title = $arr['title'];
            $content = $arr['content'];

            $mysqli = Db::getConnection();

            $mysqli->query('INSERT INTO news (title, content) VALUES ('."\"$title\"".', '."\"$content\"".')');
            $mysqli->close();
            header ("Location: /");
        }
    }

    public static function SelectById($id)
    {
        $mysqli = Db::getConnection();

        $result_set = $mysqli->query('SELECT id, title, content, author, date FROM news WHERE id='.$id);

        $res = [];
        while ($row = $result_set->fetch_assoc()) {
            $res[] = $row;
        }

        $result_set->close();
        $mysqli->close();


        return $res;
    }

    public static function Update($arr)
    {
        $title = $arr['title'];
        $content = $arr['content'];
        $id = $arr['id'];

        $mysqli = Db::getConnection();

        $mysqli->query('UPDATE news SET title='."\"$title\"".', content='."\"$content\"".'  WHERE id='."\"$id\"");
        $mysqli->close();
        header ("Location: /");
    }

}