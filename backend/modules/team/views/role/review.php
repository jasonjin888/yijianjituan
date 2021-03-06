<?php
use yii\helpers\Html;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?= Html::cssFile('@web/css/bootstrap.min.css') ?>
    <?= Html::cssFile('@web/css/site.css') ?>
    <?= Html::jsFile('@web/js/jquery.js') ?>
    <?= Html::jsFile('@web/js/bootstrap.js') ?>
</head>
<body>

</body>
</html>
<table class="table table-striped">
    <tr>
        <td>角色名</td>
        <td>角色描述</td>
    </tr>
    <tr>
        <td><?= $role->role ?></td>
        <td><?= $role->desc ?></td>
    </tr>
</table>
<h4>拥有权限：</h4>
<div class="alert alert-primary">

    <?php foreach ($prilist as $v): ?>
        <span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;<?= $v->privilege->desc ?> &nbsp;&nbsp;
    <?php endforeach ?>
</div>