<?php

class NewsController
{
    public function actionAll()
    {
        $arr = News::Select();
        include __DIR__ . '/../views/index.php';
    }
    public function actionOne()
    {
         $id = $_GET['id'];
         $arr = News::SelectById($id);
        include __DIR__ . '/../views/idpage.php';
    }
}