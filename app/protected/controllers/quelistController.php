<?php
class quelistController extends Controller
{
    public function actionIndex()
    {  $this->pageTitle="问题列表";
        $this->render('quelist');

    }
}