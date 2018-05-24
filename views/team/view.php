<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Team','url'=>['/team/index']];
$this->params['breadcrums'][] = $model->name;

?>
<h1>Team</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'team',
'country'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update Roster',
            ['/artist/update','id'=>$model->id],
            ['class'=>'btn btn-primary glyphicon glyphicon-pencil']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to delete this music?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>
