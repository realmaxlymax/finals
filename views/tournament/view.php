<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Tournament','url'=>['/Tournament/index']];
$this->params['breadcrums'][] = $model->Tournament_name;

?>
<h1>Tournament</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'event_name',
'location'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update Roster',
            ['/Tournament/update','id'=>$model->id],
            ['class'=>'btn btn-primary ']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger ',
            'data' => [
                'confirm' => 'Are you sure you want to delete this Tournament?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>
