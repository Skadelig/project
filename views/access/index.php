<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AccessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Роли';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать  роль', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 <div class="box">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Access_ID',
            'Access_nm',
            //'Access_ctrl:boolean',
            //'Access_redirect:boolean',
            // 'Access_deprt:boolean',
            // 'Access_prvt:boolean',
            // 'Access_otherusr:boolean',
            // 'Access_othrdeprt:boolean',
            // 'Access_statis:boolean',
            // 'Access_comnt:boolean',

            
        ],
    ]); ?>
</div>
</div>
