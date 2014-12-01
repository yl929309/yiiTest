<?php
class IndexController extends Controller
{
    public function actionIndex()
    {  $this->pageTitle="myTest首页";
        $this->render('index');
        // $this->renderPartial('index');
    }
}


