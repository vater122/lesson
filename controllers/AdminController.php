<?php

class AdminController
{
    public function actionAdd()
    {
        if(!empty($_POST))
        {
            $arr['title']=$_POST['title'];
            $arr['content']=$_POST['content'];
        }
        News::Insert($arr);
    }
    public function actionUpdate()
    {
        if(!empty($_POST))
        {
            $arr['id']=$_POST['id'];
            $arr['title']=$_POST['title'];
            $arr['content']=$_POST['content'];
        }
        News::Update($arr);
    }

    public function actionDelete()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
        }
        News::Delete($id);
    }
}