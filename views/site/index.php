<?php

/* @var $this yii\web\View */
use yii\helpers\Html;


$this->title = 'Yii Projekt';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Brawo!</h1>

        <p class="lead">Tu będzie umieszczony Twój mega wypasiony projekt.</p>
        <?= Html::a(Html::button('<span class="glyphicon glyphicon-list-alt"></span> Wizytówki', 
            ['class' => 'btn btn-warning btn-manager radius']),  ['site/index-tabela']); ?>
  
    </div>

    <div class="body-content">

 

    </div>
</div>
