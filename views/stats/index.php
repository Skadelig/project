<?php
	use yii\helpers\Html;
	use yii\grid\GridView;
	
	$this->title = 'Статистика';
	$this->params['breadcrumbs'][] = $this->title;
?>
<div stats-index>
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $model->done ?></h3>
                <p>Выполнено </p>
            </div>
            <div class="icon"> <i class="fa fa-check-square-o"></i></div>
       <a href="#" class="small-box-footer">
           Подробнее
           <i class="fa fa-arrow-circle-right"></i>
       </a>
        </div>
    </div>
     <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $model->thismounth ?></h3>
                <p>Выполнено в этом месяце </p>
            </div>
            <div class="icon"> <i class="ion ion-stats-bars"></i></div>
      <a href="#" class="small-box-footer">
           Подробнее
           <i class="fa fa-arrow-circle-right"></i>
       </a>
        </div>
    </div> 
     <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $model->inwork ?></h3>
                <p>В работе </p>
            </div>
            <div class="icon"> <i class="fa fa-wrench"></i></div>
            <a href="#" class="small-box-footer">
           Подробнее
           <i class="fa fa-arrow-circle-right"></i>
       </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3>0</h3>
                <p>Просрочено </p>
            </div>
            <div class="icon"> <i class="fa fa-exclamation"></i></div>
            <a href="#" class="small-box-footer">
           Подробнее
           <i class="fa fa-arrow-circle-right"></i>
       </a>
        </div>
    </div>
</div>