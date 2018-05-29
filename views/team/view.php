<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Team','url'=>['/team/index']];
$this->params['breadcrums'][] = $model->team_name;

?>
<h1>Team</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'team_name',
'country'
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
