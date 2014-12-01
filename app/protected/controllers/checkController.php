<?php
class CheckController extends Controller
{
    public function actionIndex()
    {  
        $test=$_POST["test"];
        foreach($test as $v)
        {
            $hh[$v]=$v; 
        }
         print_r($hh);
        $this->renderPartial('index');
    }
}


