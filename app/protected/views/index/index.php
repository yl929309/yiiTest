<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>MyTest</title>
    <!--  <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script> -->
</head>
<body>
<?php 
// print_r($test);

 ?>
    hello world !<br/><br/><br/><br/><br/><br/><br/>
    <?php
        $form=$this->beginWidget("CActiveForm",array(
            "method"=>"post",
            "action"=>APP."/check/index"
            ));
        echo $cardstopnumber=CHtml:: checkBoxList("test","hh",
        array('0' =>'国服加速 ' , '1'=>'普通国际 ', '2'=>'高级国际 ' , '3'=>'海外版 '),
        array('template'=>'<span>{label}{input}</span>')); 
        echo "<br/><br/>";
        echo CHtml::submitButton("提交");
        echo CHtml::resetButton("重置");
        $this->endWidget();
     ?>
    <!DOCTYPE html>
<html>

  

<table class="table">
   <caption>基本的表格布局</caption>
   <thead>
      <tr>
         <th>名称</th>
         <th>城市</th>
         <th>密码</th>
      </tr>
   </thead>
   <tbody>
      <tr class="active">
         <td>Tanmay</td>
         <td>Bangalore</td>
         <td>Bangalore</td>
      </tr>
      <tr class="danger">
         <td>Sachin</td>
         <td>Mumbai</td>
         <td>Mumbai</td>
      </tr>
      <tr class="warning">
         <td>Sachin</td>
         <td>Sachin</td>
         <td>Mumbai</td>
      </tr>
      <tr class="success">
         <td>Sachin</td>
         <td>Sachin</td>
         <td>Mumbai</td>
      </tr>
   </tbody>
</table>

</body>
</html>


<?php
$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);
//本例中将把 volume 降序排列，把 edition 升序排列。

//现在有了包含有行的数组，但是 array_multisort() 需要一个包含列的数组，因此用以下代码来取得列，然后排序。

// 取得列的列表
echo "<pre>";
print_r($data);
echo "</pre>";
foreach ($data as $key => $row) {
    $volume[$key]  = $row['volume'];
}

// 将数据根据 volume 降序排列，根据 edition 升序排列
// 把 $data 作为最后一个参数，以通用键排序
array_multisort($volume, SORT_ASC, $data);
echo "<pre>";
print_r($data);
echo "</pre>";
?>

<p onclick='test(2)'>点击添加cookie</p>
<script type="text/javascript">
function test(t){
  var myDate = new Date();
  var oDate=new Date();
  // 当前日期格式 2014-11-11 10：50:30
  // var dateandtime=myDate.getFullYear()+'-'+(myDate.getMonth()+1)+'-'+ myDate.getDate()+' '+myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
     // oDate.setDate(oDate.getDate() + t);//单位为天
    myDate.setTime(myDate.getTime() + t*60*1000);//单位为分钟
    // alert(oDate.toGMTString());
    // alert(lifetime);
  document.cookie ='mycookie='+Math.floor(oDate.getTime()/1000)+';path=/;expires=' + myDate.toUTCString();
}
  

</script>
<?php 
var_dump($_COOKIE['mycookie']);
var_dump(time());


    $dbc= mysql_connect("10.0.3.210","root","912913");

    if(!$dbc) {

        echo"数据库链接错误!";

    }else{

        echo"锐想PHP系列教程,PHP环境搭建:Windows7系统配置PHP+Apache+MySQL环境教程";

    }

    mysql_close();

 ?>
