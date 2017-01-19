<?php

include "vendor/autoload.php"; //加载composer自动加载文件
//这里我们没有使用php的__autoload自动加载，而是使用了composer的自动加载，配置在composer.json中
//
//整体流程：
//1. 先在github创建项目
//2. 在项目文件夹运行composer init 初始化项目
//3. 再次提交到github
//4. 登录https://packagist.org/ 注册我们的项目，并设置自动更新等
//5. 撰写框架（看下面框架流程），撰写后提交到github即可
//
//框架流程：
//1. 引入composer的自动加载文件autoload.php。
//2. 在composer.json中配置需要自动加载的目录，看composer.json中的autoload段。
//3. 执行Bootstrap中的run方法。run方法调用self::parseUrl()，根据get参数构建class和action，默认class为Index，action为show(); 实例化class并执行action（这里不需要再include class文件，因为composer的autoload已经加载该目录和文件），使框架运行。
//
//4. 注意！composer.json变化后要使用composer dump 命令重新加载
//
core\Bootstrap::run();
