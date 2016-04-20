<?php

class NewsController
{
    public function actionAll()
    {
        $news = News::Select();

        $view = new View();
        //обращаемся к отсут. св-ву items(вызывается __set у View)
        $view->items = $news;
        $view->dispaly('/index.php');
    }
    public function actionOne()
    {
         $id = $_GET['id'];
         $onenew = News::SelectById($id);

        $view = new View();
        //обращаемся к отсут. св-ву items(вызывается __set у View)
        $view->item = $onenew;
        $view->dispaly('/idpage.php');
    }
}