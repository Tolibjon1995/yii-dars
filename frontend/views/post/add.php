<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card p-3">
                <?php

                use yii\helpers\Html;
                use yii\widgets\ActiveForm;

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
