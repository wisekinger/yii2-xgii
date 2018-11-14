<p align="center">
    <h1 align="center">A Extension for Yii2</h1>
    <br>
    <h4>在gii基础上新增代码优先模式，基于表单填写的数据表名称以及字段，自动生成模型代码文件，同时在数据库中创建相同构架的数据表。</h4>
</p>

[![Latest Stable Version](https://poser.pugx.org/wisekinger/yii2-xgii/v/stable)](https://packagist.org/packages/wisekinger/yii2-xgii)
[![Total Downloads](https://poser.pugx.org/wisekinger/yii2-xgii/downloads)](https://packagist.org/packages/wisekinger/yii2-xgii)
[![Latest Unstable Version](https://poser.pugx.org/wisekinger/yii2-xgii/v/unstable)](https://packagist.org/packages/wisekinger/yii2-xgii)
[![License](https://poser.pugx.org/wisekinger/yii2-xgii/license)](https://packagist.org/packages/wisekinger/yii2-xgii)


packages:
https://packagist.org/packages/wisekinger/yii2-xgii

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --dev wisekinger/yii2-xgii
```

or add

```
"wisekinger/yii2-xgii": "2.0.x-dev"
```

to the require section of your `composer.json` file.

Useage

add code below to your config section
```
    $config['bootstrap'][] = 'xgii';
    $config['modules']['xgii'] = [
        'class' => 'yii\xgii\Module',
    ];
```

You can then access Gii through the following URL:
```
http://localhost/path/to/index.php?r=xgii
```
or if you have enabled pretty URLs, you may use the following URL:
```
http://localhost/path/to/index.php/xgii
```
