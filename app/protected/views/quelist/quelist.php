<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>管理问题列表</title>
</head>
<body>
<div id="node-container">
<fieldset>
<legend>管理问题列表 (<a href='/chatadmin/sysConfig/onlineServiceFaq'>+添加问题</a>)</legend>
<?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_TABS,
    'items' => array(
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Profile', 'url' => '#',),
        array('label' => 'Messages', 'url' => '#',),
    ),
)); ?>
<hr><hr><hr><hr><hr>
<?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_PILLS,
    'items' => array(
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Profile', 'url' => '#',),
        array('label' => 'Messages', 'url' => '#',),
    ),
)); ?>
<hr><hr><hr><hr><hr>
<?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_PILLS,
    'items' => array(
        array('label' => 'Clickable link', 'url' => '#'),
        array('label' => 'Clickable link', 'url' => '#'),
        array('label' => 'Disabled link', 'url' => '#', 'disabled' => true),
    ),
)); ?>

<hr><hr><hr><hr><hr>
<h1>bootstrap树状列表</h1>
 <div class="tree well">
 <ul>
  <li>
   <span><i class="glyphicon glyphicon-folder-open"></i><a href=''> Parent</a></span>
   <ul>
    <li>
      <span><i class="glyphicon glyphicon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
     <ul>
      <li>
        <span><i class="glyphicon glyphicon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
      </li>
     </ul>
    </li>
    <li>
      <span><i class="glyphicon glyphicon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
     <ul>
      <li>
        <span><i class="glyphicon glyphicon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
      </li>
      <li>
        <span><i class="glyphicon glyphicon-minus-sign"></i> Grand Child</span> <a href="">Goes somewhere</a>
       <ul>
        <li>
          <span><i class="glyphicon glyphicon-minus-sign"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
           <ul>
            <li>
              <span><i class="glyphicon glyphicon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
            </li>
            <li>
              <span><i class="glyphicon glyphicon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
            </li>
            </ul>
        </li>
        <li>
          <span><i class="glyphicon glyphicon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
        </li>
        <li>
          <span><i class="glyphicon glyphicon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
        </li>
       </ul>
      </li>
      <li>
        <span><i class="glyphicon glyphicon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
      </li>
     </ul>
    </li>
   </ul>
  </li>
  <li>
   <span><i class="glyphicon glyphicon-folder-open"></i> Parent2</span> <a href="">Goes somewhere</a>
   <ul>
    <li>
      <span><i class="glyphicon glyphicon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
      </li>
     </ul>
  </li>
 </ul>
</div>


<script  type="text/javascript">
    $(function () {
  $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
  $('.tree li.parent_li > span').on('click', function (e) {
    var children = $(this).parent('li.parent_li').find(' > ul > li');
    if (children.is(":visible")) {
      children.hide('fast');
      $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
    } else {
      children.show('fast');
      $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
    }
    e.stopPropagation();
  });
});

</script>
<style type="text/css">
.tree {
  min-height:20px;
  padding:19px;
  margin-bottom:20px;
  background-color:#fbfbfb;
  border:1px solid #999;
  -webkit-border-radius:4px;
  -moz-border-radius:4px;
  border-radius:4px;
  -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
  -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
}
.tree li {
  list-style-type:none;
  margin:0;
  padding:10px 5px 0 5px;
  position:relative
}
.tree li::before, .tree li::after {
  content:'';
  left:-20px;
  position:absolute;
  right:auto
}
.tree li::before {
  border-left:1px solid #999;
  bottom:50px;
  height:100%;
  top:0;
  width:1px
}
.tree li::after {
  border-top:1px solid #999;
  height:20px;
  top:25px;
  width:25px
}
.tree li span {
  -moz-border-radius:5px;
  -webkit-border-radius:5px;
  border:1px solid #999;
  border-radius:5px;
  display:inline-block;
  padding:3px 8px;
  text-decoration:none
}
.tree li.parent_li>span {
  cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
  border:0
}
.tree li:last-child::before {
  height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
  background:#eee;
  border:1px solid #94a0b4;
  color:#000
}


</style>


</fieldset>
</div>

</body>
</html>