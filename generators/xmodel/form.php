<?php

use yii\xgii\generators\xmodel\Generator;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $generator yii\gii\generators\model\Generator */

//$options = 'field1=>string,field2=>integer';
echo '<div class="alert alert-danger"><i class="glyphicon glyphicon-alert"></i>本操作会强行覆盖同名数据表，请仔细核对数据表名称，以免造成数据丢失。</div>';
echo $form->field($generator, 'tableName')->textInput(['table_prefix' => $generator->getTablePrefix()]);
echo $form->field($generator, 'tableCharacter')->dropDownList([
    Generator::TABLE_CHARACTER_SET_UFT8 => 'utf8_unicode_ci',
    Generator::TABLE_CHARACTER_SET_GBK => 'gbk_chinese_ci',
]);
echo $form->field($generator, 'tableEngine')->dropDownList([
    Generator::TABLE_ENGINE_INNODB => 'InnoDB',
    Generator::TABLE_ENGINE_MYISAM => 'MyISAM',
    Generator::TABLE_ENGINE_MEMORY => 'MEMORY',
]);

echo $form->field($generator, 'tableStructure')->textarea(['rows' => 5,'cols' => 8] );
echo '<div class="alert alert-warning">TIPS';
echo '<p>1.数据表各字段以","为分隔，字段名与字段属性采用"=>"连接。</p>';
echo '<p>2.字段名称应当符合数据表设计规范。</p>';
echo '<p>3.主键属性用"pk"代替，字符属性用"string"代替，数值属性用"integet"代替，日期时间属性用"datetime"代替。</p>';
echo '<p>示例：id=>pk,name=string,age=>integer,createdAt=>datetime</p></div>';
echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'ns');
echo $form->field($generator, 'baseClass');
echo $form->field($generator, 'db');
echo $form->field($generator, 'useTablePrefix')->checkbox();
echo $form->field($generator, 'generateRelations')->dropDownList([
    Generator::RELATIONS_NONE => 'No relations',
    Generator::RELATIONS_ALL => 'All relations',
    Generator::RELATIONS_ALL_INVERSE => 'All relations with inverse',
]);
echo $form->field($generator, 'generateRelationsFromCurrentSchema')->checkbox();
echo $form->field($generator, 'generateLabelsFromComments')->checkbox();
echo $form->field($generator, 'generateQuery')->checkbox();
echo $form->field($generator, 'queryNs');
echo $form->field($generator, 'queryClass');
echo $form->field($generator, 'queryBaseClass');
echo $form->field($generator, 'enableI18N')->checkbox();
echo $form->field($generator, 'messageCategory');
echo $form->field($generator, 'useSchemaName')->checkbox();
