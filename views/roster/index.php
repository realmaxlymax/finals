<?php
use app\models\Roster;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Roster',['/roster/create'],
    ['class'=>'btn btn-primary']); ?>
	</span>
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>team</th>
        <th>team_captain</th>
        <th>no_players</th>
	</tr>

	<?php foreach ($pro as $pros): ?> 
		<tr>
            <th><?=Html::a($pros->team->team_name,['/roster/view','id'=> $pros ->id])?></th>
			<th><?= $pros->team_captain?></th>
			<th><?= $pros->no_players?></th>


		</tr>
		<?php endforeach; ?>
</table>

