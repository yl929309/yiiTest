<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $this->pageTitle; ?></title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="span6">
      <ul class="nav nav-tabs">
          <li class="active"><a href="<?php echo APP; ?>/index/index">myTest首页</a> </li> 
          <li><a href="#">redis</a></li>
          <li><a href="<?php echo APP; ?>/quelist/index">问题列表</a></li>
          <li><a href="#">Gallery</a></li> 
          <li><a href="#">Contact</a></li> 
      </ul>
    </div>
  </div>
</div>


<?php echo $content; ?>



<center>尾部</center>
</body>
</html>