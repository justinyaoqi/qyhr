<?php /*%%SmartyHeaderCode:3031255e2d04933ada3-25192544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df2f46d84fb68c3d4eeb4e56bf50c8c74239adb' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_right_web.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3031255e2d04933ada3-25192544',
  'variables' => 
  array (
    'config' => 0,
    'name' => 0,
    'list' => 0,
    'daylist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0493c0bc7_82847047',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0493c0bc7_82847047')) {function content_55e2d0493c0bc7_82847047($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="admin_atatic_chart fl" id="main2" style="height:300px;"></div>
    <!-- ECharts单文件引入 -->
    <script src="js/echarts_plain.js"></script>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts图表
        var myChart = echarts.init(document.getElementById('main2')); 
        var option = {tooltip : {trigger: 'axis'},legend: {data:['个人注册统计']},
    calculable : false,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['07-31','08-01','08-02','08-03','08-04','08-05','08-06','08-07','08-08','08-09','08-10','08-11','08-12','08-13','08-14','08-15','08-16','08-17','08-18','08-19','08-20','08-21','08-22','08-23','08-24','08-25','08-26','08-27','08-28','08-29','08-30']
        }
    ],
    yAxis : [{type : 'value'}],
    series : [
        {
            name:'个人注册统计',
            type:'line',
            symbol:'emptyCircle',
            smooth:false,
            itemStyle: {
                normal: {
                    areaStyle: {
                        width: 2,
						color:'rgb(191,227,249)'
					}
                }
            },
            data:[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
        }
    ]
};
        myChart.setOption(option); // 为echarts对象加载数据 
    </script>
</body>
</html><?php }} ?>
