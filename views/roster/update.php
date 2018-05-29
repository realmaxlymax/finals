<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Roster</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

            <?= $form->field($model, 'team_id')->textInput() ?>
        
			<?= $form->field($model, 'team_captain')->textInput() ?>

			<?= $form->field($model, 'no-players')->textInput() ?>
			
			<<div class="form-group">
    	<?= Html::submitButton("Update Tshirt", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>
