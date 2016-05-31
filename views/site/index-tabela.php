<?php

/* @var $this yii\web\View */


use yii\helpers\Html;

$this->title = 'Wizytówki';

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index-tabela">
    
    <p>
    <?= Html::a(Html::button('<span class="glyphicon glyphicon-list-alt"></span> Wizytówka', 
            ['class' => 'btn btn-warning btn-manager radius']),  ['tabela/index', 'user' => 'pawel.jardzioch' ]); ?></p>
    <p>
    <?= Html::a(Html::button('<span class="glyphicon glyphicon-list-alt"></span> Lista mailingowa', 
            ['class' => 'btn btn-warning btn-manager radius']),  ['tabela/mailing']); ?></p>
</div>
