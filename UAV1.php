<!DOCTYPE html>
<html>
<head>
<title>无人车开发平台及其课程体系</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
/* GitHub stylesheet for MarkdownPad (http://markdownpad.com) */
/* Author: Nicolas Hery - http://nicolashery.com */
/* Version: b13fe65ca28d2e568c6ed5d7f06581183df8f2ff */
/* Source: https://github.com/nicolahery/markdownpad-github */

/* RESET
=============================================================================*/

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
}

/* BODY
=============================================================================*/

body {
  font-family: Helvetica, arial, freesans, clean, sans-serif;
  font-size: 14px;
  line-height: 1.6;
  color: #333;
  background-color: #fff;
  padding: 20px;
  max-width: 960px;
  margin: 0 auto;
}

body>*:first-child {
  margin-top: 0 !important;
}

body>*:last-child {
  margin-bottom: 0 !important;
}

/* BLOCKS
=============================================================================*/

p, blockquote, ul, ol, dl, table, pre {
  margin: 15px 0;
}

/* HEADERS
=============================================================================*/

h1, h2, h3, h4, h5, h6 {
  margin: 20px 0 10px;
  padding: 0;
  font-weight: bold;
  -webkit-font-smoothing: antialiased;
}

h1 tt, h1 code, h2 tt, h2 code, h3 tt, h3 code, h4 tt, h4 code, h5 tt, h5 code, h6 tt, h6 code {
  font-size: inherit;
}

h1 {
  font-size: 28px;
  color: #000;
}

h2 {
  font-size: 24px;
  border-bottom: 1px solid #ccc;
  color: #000;
}

h3 {
  font-size: 18px;
}

h4 {
  font-size: 16px;
}

h5 {
  font-size: 14px;
}

h6 {
  color: #777;
  font-size: 14px;
}

body>h2:first-child, body>h1:first-child, body>h1:first-child+h2, body>h3:first-child, body>h4:first-child, body>h5:first-child, body>h6:first-child {
  margin-top: 0;
  padding-top: 0;
}

a:first-child h1, a:first-child h2, a:first-child h3, a:first-child h4, a:first-child h5, a:first-child h6 {
  margin-top: 0;
  padding-top: 0;
}

h1+p, h2+p, h3+p, h4+p, h5+p, h6+p {
  margin-top: 10px;
}

/* LINKS
=============================================================================*/

a {
  color: #4183C4;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

/* LISTS
=============================================================================*/

ul, ol {
  padding-left: 30px;
}

ul li > :first-child, 
ol li > :first-child, 
ul li ul:first-of-type, 
ol li ol:first-of-type, 
ul li ol:first-of-type, 
ol li ul:first-of-type {
  margin-top: 0px;
}

ul ul, ul ol, ol ol, ol ul {
  margin-bottom: 0;
}

dl {
  padding: 0;
}

dl dt {
  font-size: 14px;
  font-weight: bold;
  font-style: italic;
  padding: 0;
  margin: 15px 0 5px;
}

dl dt:first-child {
  padding: 0;
}

dl dt>:first-child {
  margin-top: 0px;
}

dl dt>:last-child {
  margin-bottom: 0px;
}

dl dd {
  margin: 0 0 15px;
  padding: 0 15px;
}

dl dd>:first-child {
  margin-top: 0px;
}

dl dd>:last-child {
  margin-bottom: 0px;
}

/* CODE
=============================================================================*/

pre, code, tt {
  font-size: 12px;
  font-family: Consolas, "Liberation Mono", Courier, monospace;
}

code, tt {
  margin: 0 0px;
  padding: 0px 0px;
  white-space: nowrap;
  border: 1px solid #eaeaea;
  background-color: #f8f8f8;
  border-radius: 3px;
}

pre>code {
  margin: 0;
  padding: 0;
  white-space: pre;
  border: none;
  background: transparent;
}

pre {
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  font-size: 13px;
  line-height: 19px;
  overflow: auto;
  padding: 6px 10px;
  border-radius: 3px;
}

pre code, pre tt {
  background-color: transparent;
  border: none;
}

kbd {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #DDDDDD;
    background-image: linear-gradient(#F1F1F1, #DDDDDD);
    background-repeat: repeat-x;
    border-color: #DDDDDD #CCCCCC #CCCCCC #DDDDDD;
    border-image: none;
    border-radius: 2px 2px 2px 2px;
    border-style: solid;
    border-width: 1px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    line-height: 10px;
    padding: 1px 4px;
}

/* QUOTES
=============================================================================*/

blockquote {
  border-left: 4px solid #DDD;
  padding: 0 15px;
  color: #777;
}

blockquote>:first-child {
  margin-top: 0px;
}

blockquote>:last-child {
  margin-bottom: 0px;
}

/* HORIZONTAL RULES
=============================================================================*/

hr {
  clear: both;
  margin: 15px 0;
  height: 0px;
  overflow: hidden;
  border: none;
  background: transparent;
  border-bottom: 4px solid #ddd;
  padding: 0;
}

/* TABLES
=============================================================================*/

table th {
  font-weight: bold;
}

table th, table td {
  border: 1px solid #ccc;
  padding: 6px 13px;
}

table tr {
  border-top: 1px solid #ccc;
  background-color: #fff;
}

table tr:nth-child(2n) {
  background-color: #f8f8f8;
}

/* IMAGES
=============================================================================*/

img {
  max-width: 100%
}
</style>
</head>
<body>
<h1>pioneer 激光 &amp; 视觉<strong>无人车</strong></h1>
<h1>开发平台&amp;课程体系介绍</h1>
<h2>一、开发平台介绍</h2>
<h3>产品概述</h3>
<p>该款无人车开发平台包含：PIXHAWK控制系统(包含GPS等)，无线数据传输模块(标配)，动力和执行机构(标配可定制)，上位机地面站系统(标配),树莓派协处理器（选配），激光雷达(选配)，英伟达TX2(选配)。帮助大家迅速搭建好一整套的无人车机器视觉开发环境，提供调试到高级开发级别的课程。再利用我们提供的Demo例程上手开发工作，会事半功倍，更加去专注于算法的开发，让研发更高效。</p>
<p><img src="https://i.imgur.com/5sui6uj.png" /></p>
<p>注：PIXHAWK控制系统，是目前在无人机领域使用最为广泛的开源平台，包含了完整控制，数据传输，算法仿真开发。在无人船，无人车，无人潜艇等方面也有着一样的开发优势。</p>
<p>官网如下：</p>
<p><a href="http://www.ardupilot.org/">http://www.ardupilot.org/</a></p>
<p><a href="http://px4.io/">http://px4.io/</a></p>
<h3>产品属性</h3>
<p>品牌：AMOV LAB</p>
<p>名称：pioneer 激光 &amp; 视觉无人车开发平台</p>
<p>机载电脑：定制板载款 树莓派B3 英伟达TX1/TX2（3选1）</p>
<p>二维激光雷达：思岚A2/雷神激光雷达（2选1）</p>
<p>单目相机：百万像素摄像头（可定制）</p>
<h3>功能介绍</h3>
<p>该无人车开发平台可以完成如下功能：</p>
<ol>
<li>
<p>地面站上位机实时监控车辆，位置， 姿态， 传感器数据和指令控制</p>
</li>
<li>
<p>GPS模式下室外地面站规划路口和自动巡航</p>
</li>
<li>
<p>树莓派/英伟达等高级板卡的ROS平台下的位置控制</p>
</li>
<li>
<p>ROS环境下的软件仿真</p>
</li>
<li>
<p>基于激光雷达及其视觉的实时路径规划</p>
</li>
<li>
<p>自动路径规划下面的激光雷达避障：利用激光雷达扫描周围环境，感知障碍物，在自动规划的情况下避开相关障碍物；地面站实时监测车辆状况</p>
</li>
<li>
<p>利用目标追踪：利用通用目标训练软件，快速制作训练集，实现特定目标识别</p>
</li>
<li>
<p>更多可能，请持续关注本产品</p>
</li>
</ol>
<h3>系统构架</h3>
<ol>
<li>
<p>地面站监测系统(amovplanner)</p>
</li>
<li>
<p>执行控制系统</p>
</li>
<li>
<p>执行控制机构</p>
</li>
<li>
<p>数据传输系统</p>
</li>
<li>
<p>ROS系统接口MAVROS及其仿真</p>
</li>
<li>
<p>激光雷达，视觉板卡驱动</p>
</li>
</ol>
<p><img src="media/ec148ad58d4897d7bc8d034787ccc5d1.jpg" alt="无人车系统" /></p>
<h3>产品特色</h3>
<ul>
<li>
<p>自主设计车架</p>
<ul>
<li>
<p>充分考虑各配件及传感器安装位置</p>
</li>
<li>
<p>500MM的车身长度，实时四驱，3KG载重</p>
</li>
<li>
<p>囊括导航、控制及视觉三大模块,基于Ardupilot固件，MAVROS通讯协议</p>
</li>
</ul>
</li>
<li>
<p>控制模块二次封装，提供更多的控制指令接口，改写地面站，比起原版的地面站控制接口更清晰</p>
<ul>
<li>基于实际情况，视觉模块提供基于opencv库深度改进的源码</li>
</ul>
</li>
<li>
<p>更加便利的二次开发体验</p>
<ul>
<li>
<p>提供全套程序的开发手册及教程</p>
</li>
<li>
<p>专业的售后服务团队提供开发指导</p>
</li>
</ul>
</li>
<li>
<p>对于官方代码的BUG修复和接口简化</p>
</li>
</ul>
<p><img src="media/3e0897abbda46cd8cd55905ea9ee2f58.png" alt="无人车地面站" /></p>
<p>对于无人车的固件，阿木实验室团队开发了专用简易地面站，比起原版地面站接口更清晰，更容易做二次开发。并可提供完善的课程体系和文档。</p>
<h3>提供如下算法例程和开发文档</h3>
<ul>
<li>
<p>基础控制模块</p>
<ul>
<li>
<p>控制板本身的接口，ardupliot控制系统中级教程，读取车身设备数据</p>
</li>
<li>
<p>二维激光雷达ROS环境的驱动</p>
</li>
<li>
<p>室外的MAROS 位置控制接口</p>
</li>
<li>
<p>基于MAVLINK的地面站API接口</p>
</li>
</ul>
</li>
<li>
<p>自主控制模块</p>
<ul>
<li>
<p>底层控制：ardupilot开源控制器</p>
</li>
<li>
<p>机载电脑端：
MAVROS包（功能：实时接收控制板状态；可发送全球位置，本地位置指令、速度控制指令）</p>
</li>
<li>
<p>基于MAVROS包的二次封装，全球位置坐标和本地位置坐标系的控制指令（位置控制、速度控制或组合控制），使得上层模块开发更加便利</p>
</li>
<li>
<p>激光雷达视觉控制接口</p>
</li>
</ul>
</li>
</ul>
<h3>视频Demo演示地址</h3>
<p>优酷：</p>
<p><a href="https://v.youku.com/v_show/id_XMjgwMTAxMDU1Ng==.html?spm=a2h0k.11417342.soresults.dtitle">https://v.youku.com/v<em>show/id</em>XMjgwMTAxMDU1Ng==.html?spm=a2h0k.11417342.soresults.dtitle</a></p>
<p><a href="https://v.youku.com/v_show/id_XMjgwMTAxMTA1Mg==.html?spm=a2h0j.11185381.listitem_page1.5!12~A">https://v.youku.com/v<em>show/id</em>XMjgwMTAxMTA1Mg==.html?spm=a2h0j.11185381.listitem_page1.5!12~A</a></p>
<p><a href="https://v.youku.com/v_show/id_XMjgwMTAxMDU2MA==.html?spm=a2h0j.11185381.listitem_page1.5!13~A">https://v.youku.com/v<em>show/id</em>XMjgwMTAxMDU2MA==.html?spm=a2h0j.11185381.listitem_page1.5!13~A</a></p>
<p>以上视频只有自动巡航的演示，激光雷达避障正在完善中，敬请期待。</p>
<h2>二、无人车课程体系介绍</h2>
<p>掌握无人车的开发工作，包含从基本的安装调试到高级的视觉开发等内容，如下的课程体系可以从了解，安装，调试，初级开发，中级开发，高级开发进行对无人车开发进行系统的学习，极大的方便了无人车开发入门工作。</p>
<h3>原理介绍（熟悉无人车的构成）</h3>
<ul>
<li>
<p>基本构成：各个功能模块的作用</p>
</li>
<li>
<p>姿态检测： 陀螺仪 加速度计 磁力计</p>
</li>
<li>
<p>位置检测： GPS RTK 千寻位置</p>
</li>
<li>
<p>执行电机： 电机 电调</p>
</li>
<li>
<p>无线数据传输链路：射频数传 4G数传</p>
</li>
<li>
<p>图传链路：WIFI图传 模拟图传</p>
</li>
<li>
<p>基本控制原理：PID算法</p>
</li>
</ul>
<h3>安装调试（加深对无人车系统的理解）</h3>
<ul>
<li>
<p>地面站介绍：固件下载 界面基本操作使用</p>
</li>
<li>
<p>传感器校准：陀螺仪 加速度计 磁力计</p>
</li>
<li>
<p>输出观测调试：舵机输出</p>
</li>
<li>
<p>自动巡航测试:航线PID参数调试</p>
</li>
</ul>
<h3>基础开发（具备串口设备的数据读取和了解代码框架）</h3>
<ul>
<li>
<p>开发环境搭建：ubuntu使用 GIT使用 源码编译</p>
</li>
<li>
<p>代码构架：代码基本框架介绍</p>
</li>
<li>
<p>串口驱动：串口读写</p>
</li>
<li>
<p>控制板基本接口：位置控制，姿态控制</p>
</li>
<li>
<p>地面站控制接口：C# 地面站实时监测控制无人车</p>
</li>
</ul>
<h3>中级开发（具备高级接口(SPI,IIC)和控制算法修改能力）</h3>
<ul>
<li>
<p>mavlink通信协议</p>
</li>
<li>
<p>软件仿真环境搭建：Gazebo Simulation</p>
</li>
<li>
<p>IIC SPI驱动编写 控制算法的优化修改</p>
</li>
</ul>
<h3>高级开发（具备视觉，激光雷达SLAM的高级开发能力）</h3>
<ul>
<li>
<p>外部计算机控制</p>
</li>
<li>
<p>MAVROS协议使用及其板载计算机控制</p>
</li>
<li>
<p>树莓派ROS激光雷达驱动</p>
</li>
<li>
<p>激光雷达避障实现</p>
</li>
<li>
<p>基于TX2视觉板卡机器视觉实现</p>
</li>
</ul>
<p>因该课程高级课程内容，所以学员需要具备以下学习基础：单片机、电路、C/C++、基本控制理论、Ubuntu系统使用等电子信息基础。</p>
<h2>联系我们</h2>
<blockquote>
<p>单位：成都铂贝科技有限公司</p>
<p>地址：四川省成都市郫都区菁蓉小镇胜利北街217号</p>
<p>电话：028-87872048</p>
<p>负责人：潇齐 18582458006</p>
</blockquote>

</body>
</html>
<!-- This document was created with MarkdownPad, the Markdown editor for Windows (http://markdownpad.com) -->
