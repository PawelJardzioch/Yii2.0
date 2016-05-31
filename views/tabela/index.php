<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\controllers\TabelaController;
/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
$this->title = 'Wizytówka';
$this->params['breadcrumbs'][] = ['label' => 'Wizytówki', 'url' => ['site/index-tabela']];
$this->params['breadcrumbs'][] = $this->title;

?>




<?= $this->render('wizytowka', [
        'model' => $model,
        
    ]);
?>
