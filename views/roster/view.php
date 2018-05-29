<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Teams','url'=>['/team/index']];
$this->params['breadcrums'][] = $model->team_id;

?>

<h1>View Roster</h1>
<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'team_id',
'team_captain',
'no_players'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update Roster',
            ['/team/update','id'=>$model->id],
            ['class'=>'btn btn-primary ']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger ',
            'data' => [
                'confirm' => 'Are you sure you want to delete this team?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>
