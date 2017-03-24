<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/24
 * Time: 8:40
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//cdn.bootcss.com/extjs/3.4.1-1/resources/css/ext-all.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/extjs/3.4.1-1/adapter/ext/ext-base.js"></script>
    <script src="//cdn.bootcss.com/extjs/3.4.1-1/ext-all.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/less.js/2.7.2/less.min.js"></script>
</head>
<body>
<script>
    /*new Ext.Viewport({
     layout:"border",
     items:[
     {region:"north",title:"Up",height:50},
     {region:"south",title:"Down",height:50},
     {region:"west",title:"Left",width:200},
     {region:"east",title:"Right",width:200},
     {region:"center",title:"Center"}
     ]
     });*/
    var pnNorth = new Ext.Toolbar({
        id: 'pnNorth',
        autoWidth: true,
        heigth: 80,
        frame: true,
        region: 'north',
        html: '<div id="testPnNorth"></div>',
    });
    var pnWest = new Ext.Panel({
        id: 'pnWest',
        title: '菜单项',
        width: 200,
        heigth: 'auto',
        split: true,//显示分隔条
        region: 'west',
        collapsible: true
    });
    var pnEast = new Ext.Panel({
        id: 'pnEast',
        cls: 'pnEast',
        title: '菜单项',
        width: 200,
        heigth: 'auto',
        split: true,//显示分隔条
        region: 'east',
        bodyCssClass : 'pn-east-body',
        html : '<div data-id="pn-east"></div>',
        collapsible: true
    });
    var pnCenter = new Ext.TabPanel({
        region: 'center',
        activeTab: 0,
        items: [
            {
                title: '收件箱',
                authHeight: true,
                closable: true,//是否可关闭
                html: '这里显示所收邮件。。。'
            }
        ]
    });
    pnNorth.add({
        id:'atest',
        icon: 'http://ys.qiche100.me.tt/Public/Images/n-home.gif',
        cls: 'x-btn-icon',
        tooltip: '<b>我的工作台</b><br>点击返回我的工作台。',
        handler: function(){
            var MainTabPanel = Ext.getCmp('MainTabPanel'); //得到tab组件
            var tab = MainTabPanel.getComponent('MyDesktop'); //得到tab页
            MainTabPanel.setActiveTab(tab);
        }
    });
    var vp = new Ext.Viewport({
        layout: "border",
        items: [
            pnNorth,
            pnWest,
            pnEast,
            pnCenter
        ]
    });
    /*Ext.onReady(function () {
        Ext.get('pnWest').on('mouseover',function(){
            alert(1)
        })
    })*/
</script>
</body>
</html>
