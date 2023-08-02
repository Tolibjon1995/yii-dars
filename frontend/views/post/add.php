<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card p-3">
                <?php

                use yii\helpers\Html;
                use yii\bootstrap5\ActiveForm;

                /**
                 * @var $model \frontend\models\MyModel;
                 */

                $form = ActiveForm::begin([
                    'id' => 'active-form',
                    'options' => [
                        'enctype' => 'multipart/form-data'
                    ]
                ]);

                echo $form->field($model, 'first_name');
                echo $form->field($model, 'email');
                echo $form->field($model, 'age');
                echo $form->field($model, 'gender')->radioList([
                    1 => 'Erkak',
                    2 => 'Ayol'
                ])->label('Jinsi');
                echo $form->field($model, 'til')->dropdownList([
                    1 => "O'zbekcha",
                    2 => 'Ruscha',
                    3 => 'Qozoqcha'
                ]
                )->label('Til');
                echo $form->field($model, 'zipcode');
                echo $form->field($model, 'about')->textarea();
                ?>

                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Yuborish', ['class' => 'btn btn-primary mt-3']) ?>
                    </div>
                </div>
                <?php
                ActiveForm::end();
                ?>
            </div>
        </div>
    </div>
</div>
