<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'เมนูหลัก', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'บันทึกอุบัติการณ์ความเสี่ยง','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'บันทึกข้อมูลอุบัติการณ์', 'icon' => 'edit', 'url' => ['/'],],
                        ],
                    ],
                    ['label' => 'อุบัติการณ์ที่ส่งมาให้รับผิดชอบ','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'ตรวจสอบอุบัติการณ์ที่ส่งมา', 'icon' => 'edit', 'url' => ['/'],],
                        ],
                    ],
                    ['label' => 'อุบัติการณ์ที่รายงาน','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'ตรวจสอบอุบัติการณ์ที่ส่งไป', 'icon' => 'edit', 'url' => ['/'],],
                        ],
                    ],   
                    ['label' => 'รายงานอุบัติการณ์','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'รายงานจำแนกตามเดือน', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานจำแนกตามเดือนทั้งปี', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานจำแนกตามหน่วยงาน', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานจำนวนเหตุการณ์', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานจำนวนคลินิก', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานจำนวนทั่วไป', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานหน่วยงานรายงาน', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานหน่วยงานรับผิดชอบ', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานความเสี่ยงซ้ำ', 'icon' => 'edit', 'url' => ['/'],],
                            ['label' => 'รายงานเปรียบเทียบช่วงเวลา', 'icon' => 'edit', 'url' => ['/'],],
                        ],
                    ],   
                    ['label' => 'เกี่ยวกับโปรแกรม','icon' => 'glyphicon glyphicon-envelope','url' => '#',
                        'items' => [
                            ['label' => 'เกี่ยวกับโปรแกรม', 'icon' => 'edit', 'url' => ['/'],],
                        ],
                    ],                       
                ],
            ]
        ) ?>

    </section>

</aside>
