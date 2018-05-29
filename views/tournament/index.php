<?php
use app\models\touenament;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Tournament',['/tournament/create'],
    ['class'=>'btn btn-primary glyphicon glyphicon-plus']); ?>
	</span>

    
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
       <th>roster</th>
		<th>event_name</th>
		<th>location</th>
	</tr>

	<?php foreach ($tournament as $tournaments): ?> 
		<tr>
			<th><?=Html::a($tournaments->tournament_name,['/tournament/view','id'=> $tournaments ->id])?></th>
			<th><?= $tournaments->location ?></th>
		</tr>
		<?php endforeach; ?>
</table>

