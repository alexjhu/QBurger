<?php

/* @var $this yii\web\View */

$this->title = 'File Upload';

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<h5>File Upload</h5>
<?php $form = ActiveForm::begin(
        [
            'action' => \yii\helpers\Url::to(['file-upload/upload']),
            'options' => ['enctype' => 'multipart/form-data']
        ]); ?>

<?= $form->field($upload, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>