<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Country;

// получаем все строки из таблицы "country" и сортируем их по "name"
$countries = Country::find()->orderBy('name')->all();
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Введите ваше имя')?>
    <?= $form->field($model, 'email')?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primaty'])?>
    </div>
<?php ActiveForm::end(); ?>
