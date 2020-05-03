<?php 
// 路由映射表
return array(
    array('GET|POST /((@cid:[0-9]+/)@page:[0-9]+)', 'frontend\Index:index'),
);
