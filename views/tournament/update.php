<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Tournament</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>


			<?= $form->field($model, 'event_name')->textInput() ?>
            <?= $form->field($model, 'location')->textInput() ?>
			
			<div class="form-group">
    	<?= Html::submitButton("Update tournament", ['class'=>]); ?>
			</div>

			<?php ActiveForm::end(); ?>
