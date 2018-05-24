<?php
use app\models\team;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create team',['/team/create'],
    ['class'=>'btn btn-primary glyphicon glyphicon-plus']); ?>
	</span>

    
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Team Name</th>
		<th>Country</th>
	</tr>

	<?php foreach ($team as $teams): ?> 
		<tr>
			<th><?=Html::a($teams->team_name,['/team/view','id'=> $teams ->id])?></th>
			<th><?= $teams->country ?></th>
		</tr>
		<?php endforeach; ?>
</table>

