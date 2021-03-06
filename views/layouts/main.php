<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Cookie;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <!-- Ionicons 2.0.0 -->
     
</head>
<body class="skin-blue sidebar-mini <?php if(isset($_COOKIE['sidebar'])) echo $_COOKIE['sidebar'] ;?>">
<?php $this->beginBody() ?>
<div class="wrapper">
    <header class="main-header">    
                <!-- Logo -->
                 <a href="<?= Url::to(['site/index'])?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>H</b>D</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>HELP</b>Desk</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                             <!-- Tasks: style can be found in dropdown.less -->
                             <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown">
                                      <?php 
                                       if (Yii::$app->user->isGuest){ 
                                            echo Html::a('Войти в систему', ['/site/login']) ;
                                            }else{
                                            echo Html::a('Покинуть систему', ['/site/logout'], ['data-method' => 'post'] );
                                        }
                                    ?>
                             </li>     
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
             <?php 
                if (!Yii::$app->user->isGuest){ 
                                        ?>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                   <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                    <li class="header">Главное меню</li>
                        <li>
                            <a href="<?= Url::to(['req/index'])?>">
                                <i class="fa fa-list-ul"></i> <span>Заявки</span>
                            </a>
                            
                        </li>
                         <li>
                            <a href="<?= Url::to(['employer/index'])?>">
                                <i class="fa fa-user"></i> <span>Сотрудники</span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?= Url::to(['comments/index'])?>">
                                <i class="fa fa-comment"></i> <span>Комментарии</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['stats/index'])?>">
                                <i class="fa fa-bar-chart"></i> <span>Статистика</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               <i class="fa fa-cog"></i><i class="fa fa-angle-left pull-right"></i><span>Настройки</span>
                            </a>
                            <ul class="treeview-menu menu-open">
                                <li> <a href="<?= Url::to(['access/index'])?>"><i class="fa fa-circle-o"></i>Роли</a></li>
                                <li> <a href="<?= Url::to(['defects/index'])?>"><i class="fa fa-circle-o"></i>Дефекты</a></li>
                                <li> <a href="<?= Url::to(['department/index'])?>"><i class="fa fa-circle-o"></i>Отделы</a></li>
                                <li> <a href="<?= Url::to(['jobs/index'])?>"><i class="fa fa-circle-o"></i>Должности</a></li>
                                <li> <a href="<?= Url::to(['users/index'])?>"><i class="fa fa-circle-o"></i>Пользователи</a></li>
                            </ul>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <?php
}?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

        <section class="content-header">
            <h1><?=$this->title?></h1>
              <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink'=>[
                    'label' =>'Главная',
                    'url' => ['site/index']
                ],
            ]) ?>
        </section>
        <div class="content">
          
            <?= $content ?>
            
        </div>
    </div>
    <footer class="main-footer">
                <div class="pull-right hidden-xs"
                <?= Yii::powered() ?>
                </div>
                <strong>&copy; HelpDesk </strong> <?= date('Y') ?>

    </footer>
</div>   


<?php $this->endBody() ?>

<script>
;(function($){$.fn.datepicker.dates.ru={days:["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье"],daysShort:["Вск","Пнд","Втр","Срд","Чтв","Птн","Суб","Вск"],daysMin:["Вс","Пн","Вт","Ср","Чт","Пт","Сб","Вс"],months:["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],monthsShort:["Янв","Фев","Мар","Апр","Май","Июн","Июл","Авг","Сен","Окт","Ноя","Дек"],today:"Сегодня",clear:"Очистить",format:"dd.mm.yyyy",weekStart:1}}(jQuery));
;(function($){
    $.fn.datetimepicker.dates['ru'] = {
        days: ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"],
        daysShort: ["Вск", "Пнд", "Втр", "Срд", "Чтв", "Птн", "Суб", "Вск"],
        daysMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"],
        months: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
        monthsShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
        today: "Сегодня",
        suffix: [],
        meridiem: [],
        weekStart: 1
    };
}(jQuery));
</script>
</body>
</html>
<?php $this->endPage() ?>
