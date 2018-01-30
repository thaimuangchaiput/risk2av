<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">RISK!</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        
                        <span class="hidden-xs">จัดการ User <i class="fa fa-gears"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <p>
                                 Admin THAIMUANG CHAI PUT HOSPITAL <br/> Web Developer
                            </p>
                            <div class="col-xs-12 text-center">
                                <?php echo Html::a(
                                    'จัดการผู้ใช้งาน',
                                    ['/user/admin/index'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-success']
                                )  ?>                                 
                               
                            </div>
                        </li>
                        <!-- Menu Body -->
                         <!--
                        <li class="user-body">

                            <div class="col-xs-12 text-center">
                                <?= Html::a(
                                    'จัดการผู้ใช้งาน',
                                    ['/user/admin/index'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>                                 
                                
                            </div>

                        </li>
                        -->
                        <li class="user-footer">
                            
                            <div class="pull-left">
                                <?= Html::a(
                                    'การตั้งค่าโพรไฟล์',
                                    ['/user/settings/profile'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>                               
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'ออกจากระบบ',
                                    ['/user/security/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                          
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
