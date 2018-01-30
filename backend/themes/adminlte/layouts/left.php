<?php
use backend\models\Profile;
?>

<aside class="main-sidebar">

    <section class="sidebar">
<?php
$idu=Yii::$app->user->identity->id;
//echo $idu;
$profile = Profile::findOne($idu);
$nameuser="คุณ ".$profile->name."";       
//echo $nameuser;		
		?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [			
                    ['label' => 'เมนูหลัก ', 'options' => ['class' => 'header'],'icon' => 'file-code-o'] , 
                    ['label' => $nameuser, 'icon' => 'user', 'url' => ['/user/settings/profile']],						
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Ex. Resume', 'icon' => 'dashboard', 'url' => ['/resume/index']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'ข้อมูลมาตราฐาน','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'ผู้ใช้งานระบบ', 'icon' => 'edit', 'url' => ['/departreport/index'],],
                            ['label' => 'รูปแบบเหตุการณ์ที่เกิดขึ้น', 'icon' => 'edit', 'url' => ['/risk2group/index'],],
                            ['label' => 'รายละเอียดรูปแบบเหตุการณ์', 'icon' => 'edit', 'url' => ['/risk2risk/index'],],
                            ['label' => 'ระดับความรุนแรงทางคลินิก', 'icon' => 'edit', 'url' => ['/risk2risklevel/index'],],
                            ['label' => 'ระดับความรุนแรงทั่วไป', 'icon' => 'edit', 'url' => ['/risk2risklevel2/index'],],
                        ],
                    ],
                    ['label' => 'บันทึกอุบัติการณ์ความเสี่ยง','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'บันทึกข้อมูลอุบัติการณ์', 'icon' => 'edit', 'url' => ['/risk2datarisk/create'],],
                            ['label' => 'ค้นหา/แก้ไข การบันทึก', 'icon' => 'edit', 'url' => ['/risk2datarisk/index'],],
                        ],
                    ],  
                    ['label' => 'รายงานอุบัติการณ์','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'รายงานตามวัน/เดือน/ปี', 'icon' => 'edit', 'url' => ['/reportmonth/index'],],
                            ['label' => 'รายงานตามหน่วยงาน', 'icon' => 'edit', 'url' => ['/reportdep/index'],],
                            ['label' => 'รายงานจำนวนเหตุการณ์', 'icon' => 'edit', 'url' => ['/risk2riskreport/index'],],
                            ['label' => 'รายงานจำนวนคลินิก', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานจำนวนทั่วไป', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานหน่วยงานรายงาน', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานหน่วยงานรับผิดชอบ', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานความเสี่ยงซ้ำ', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานเปรียบเทียบช่วงเวลา', 'icon' => 'edit', 'url' => ['/'],],
                        ],
                    ],   
                    ['label' => 'แจ้งรายงานอุบัติการณ์','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'ตรวจสอบการแจ้งอุบัติการณ์', 'icon' => 'edit', 'url' => ['/'],],
                        ],
                    ],                     
                    ['label' => 'เกี่ยวกับโปรแกรม','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'เกี่ยวกับโปรแกรม', 'icon' => 'edit', 'url' => ['/'],],
                        ],
                    ],
				/*	
					['label' => 'ออกจากระบบ','icon' => 'lock','url' => '#',
						'items' => [['label' => 'Logout','icon' => 'unlock', 'url' => ['/site/logout']]],
                    ],		*/			

					
                ],
            ]
        ) ?>

    </section>

</aside>
