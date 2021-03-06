<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Noticias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'enlace')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cuerpo')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'categoria_id')->textInput() ?>
    <?= $form->field($model, 'usuario_id')->textInput() ?>
    <?= $form->field($model, 'imagen')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
