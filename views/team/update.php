<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Team Info</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'Team Name')->textInput() ?>

			<?= $form->field($model, 'Country')->textInput() ?>
			
			<div class="form-group">
    	<?= Html::submitButton("Update Artist", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>
