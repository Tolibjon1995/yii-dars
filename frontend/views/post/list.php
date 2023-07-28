<?php

use yii\helpers\Html;

?>

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card p-3">
                <?php
                /**
                * @var $model \frontend\models\MyModel
                */
                echo Html::beginForm();
                echo Html::label("Username", 'name', ['class' => 'mt-3']);
                echo Html::input('text', 'first_name', $model->first_name, ['class' => 'form-control', 'placeholder' => 'Ism']);
                echo Html::label("Email", 'email', ['class' => 'mt-3']);
                echo Html::input('email', 'email', $model->email, ['class' => 'form-control', 'placeholder' => 'Email']);
                echo Html::label("Age", 'age', ['class' => 'mt-3']);
                echo Html::input('number', 'age', $model->age, ['class' => 'form-control', 'placeholder' => 'Yosh']);


                echo Html::submitButton('Submit', ['class' => 'btn btn-success mt-3']);
                echo Html::endForm()

                ?>
            </div>
        </div>
    </div>
</div>