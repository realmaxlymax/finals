<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tournament;
use app\models\Team;
use yii\helpers\ArrayHelper;
?>
<h1>Create Roster</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>
			<?= $form->field($model,'team_id')->dropDownList(ArrayHelper::map(
				Team::find()->asArray()->all(), 'id','team_name'))?>

			<?= $form->field($model, 'team_captain')->textInput() ?>

			<?= $form->field($model, 'no_players')->textInput() ?>

			<div class="form-group">
				<?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>
	</div>
</div>
