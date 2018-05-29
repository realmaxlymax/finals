<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tournament;
use yii\helpers\ArrayHelper;

?>
<h1>Tournament Info</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model,'roster_id')->dropDownList(ArrayHelper::map(
				tournament::find()->asArray()->all(), 'id','roster','shipping_address'))?>

			<?= $form->field($model, 'event_name')->textInput() ?>

			<?= $form->field($model, 'location')->textInput() ?>
			

			<div class="form-group">
				<?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>
	</div>
</div>
