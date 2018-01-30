<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
//use kartik\time\TimePicker;
use kartik\widgets\ActiveForm;
use kartik\widgets\TimePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="risk2datarisk-form">
    <?php $form = ActiveForm::begin(); ?>
   
        <div class="container">
        <div class="row">      
            <!-- /.row -->
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รูปแบบข้อมูลของรายงาน
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-4">

                                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'departreport')->dropDownList(
                                ArrayHelper::map(backend\models\Departreport::find()->all(), 
                                        'DeptId', 
                                        'DeptName'),
                                        [
                                            'prompt' => 'กรุณาระบุหน่วยงานที่รายงาน'
                                        ]
                                ) ?>  
                            </div>
                            <div class="col-lg-4">
                                <?= $form->field($model, 'hnno')->textInput(['maxlength' => true]) ?>   
                                 <?php // $form->field($model, 'timer')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'departrespon')->dropDownList(
                                ArrayHelper::map(backend\models\Departreport::find()->all(), 
                                        'DeptId', 
                                        'DeptName'),
                                        [
                                            'prompt' => 'กรุณาระบุหน่วยงานที่รับผิดชอบ'
                                        ]
                                )//->label('หน่วยงานที่รับผิดชอบ',['class'=>'label-class']) 
                                              ?>  
                            </div>
                            <div class="col-lg-2">
                                <?= $form->field($model, 'daterigter')->widget(
                                DatePicker::className(), [
                                    // inline too, not bad
                                     'inline' => false, 
                                    'language' => 'th', 
                                    //'value' => $today,
                                     // modify template for custom rendering
                                    'template' => '{addon}{input}',
                                    'clientOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);?>                                
                            </div>
                            <div class="col-lg-2">
                                <?php echo '<label class="control-label">&nbsp;เวลา&nbsp;&nbsp;</label>'; 
                                      echo TimePicker::widget(['model' => $model, 'attribute' => 'timer']); 
                                      echo "<br/>";?>                                
                            </div>
                        </div>

                    </div>
                </div>
            <!-- /.row -->
            <!-- /.row -->
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รูปแบบของเหตุการณ์ที่เกิดขึ้น
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php   use backend\models\Risk2group;
                                        echo $form->field($model, 'fromevent')->radioList(
                                                     $items1 = Risk2group::find()
                                                        ->select(['namegroup'])
                                                        ->indexBy('codegroup')
                                                        ->column()
                                                        )->label('เลือกรูปแบบของเหตุการณ์ที่เกิดขึ้น',['class'=>'label-class']);   
                                                        //print_r($items1);
                                ?>                                   
                                <div id="portion_1" style="display:none">
                                <?= $form->field($model, 'dtevt')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risk::find()
                                                ->where('codegroup=1')
                                                ->orderBy('coderisk')
                                                ->all(), 'id', 'namerisk'),['prompt'=>'เลือกเหตุการณ์ที่เกิดขึ้น']
                                ) ?>  
                                </div>
 
                                <div id="portion_2" style="display:none">
                                <?= $form->field($model, 'dtevt')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risk::find()->where('codegroup=2')->orderBy('coderisk')->all(), 'id', 'namerisk'),['prompt'=>'เลือกเหตุการณ์ที่เกิดขึ้น']
                                ) ?> 
                                </div>
                                <div id="portion_3" style="display:none">
                                <?= $form->field($model, 'dtevt')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risk::find()->where('codegroup=3')->orderBy('coderisk')->all(), 'id', 'namerisk'),['prompt'=>'เลือกเหตุการณ์ที่เกิดขึ้น']
                                ) ?> 
                                </div>
                                <div id="portion_4" style="display:none">
                                <?= $form->field($model, 'dtevt')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risk::find()->where('codegroup=4')->orderBy('coderisk')->all(), 'id', 'namerisk'),['prompt'=>'เลือกเหตุการณ์ที่เกิดขึ้น']
                                ) ?> 
                                </div>
                                <div id="portion_5" style="display:none">
                                <?= $form->field($model, 'dtevt')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risk::find()->where('codegroup=5')->orderBy('coderisk')->all(), 'id', 'namerisk'),['prompt'=>'เลือกเหตุการณ์ที่เกิดขึ้น']
                                ) ?> 
                                </div>
                                <div id="portion_6" style="display:none">
                                <?= $form->field($model, 'dtevt')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risk::find()->where('codegroup=6')->orderBy('coderisk')->all(), 'id', 'namerisk'),['prompt'=>'เลือกเหตุการณ์ที่เกิดขึ้น']
                                ) ?> 
                                </div>
                                <div id="portion_7" style="display:none">
                                <?= $form->field($model, 'dtevt')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risk::find()->where('codegroup=7')->orderBy('coderisk')->all(), 'id', 'namerisk'),['prompt'=>'เลือกเหตุการณ์ที่เกิดขึ้น']
                                ) ?>  
                                </div>
                                <div id="portion_8" style="display:none">
                                <?php
                                echo $form->field($model, 'dtevt')->textarea()->textarea(['rows'=>5,'cols'=>5]);  
                                ?>
                                </div>
                                <?php
                                $this->registerJs("
                                  $(\"input[name='Risk2datarisk[fromevent]']:radio\")
                                    .change(function() {
                                      $(\"#portion_1\").toggle($(this).val() == \"1\");
                                      $(\"#portion_2\").toggle($(this).val() == \"2\");
                                      $(\"#portion_3\").toggle($(this).val() == \"3\");
                                      $(\"#portion_4\").toggle($(this).val() == \"4\");
                                      $(\"#portion_5\").toggle($(this).val() == \"5\");
                                      $(\"#portion_6\").toggle($(this).val() == \"6\");
                                      $(\"#portion_7\").toggle($(this).val() == \"7\");
                                      $(\"#portion_8\").toggle($(this).val() == \"9\");
                                      });
                                ");
                                 ?>
                            </div>

                        </div>

                    </div>
                </div>
            <!-- /.row -->
            <!-- /.row -->
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ระดับความรุนแรงทางคลินิก และ ความรุนแรงทั่วไป
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-6">

                                <?= $form->field($model, 'commen')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risklevel::find()->where('grouplevel=1')->orderBy('code')->all(), 'id', 'name'),['prompt'=>'เลือกระดับความรุนแรงทางคลินิก']
                                ) ?>                                  
                            </div>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'typereport')->dropDownList(
                                        ArrayHelper::map(backend\models\Risk2risklevel::find()->where('grouplevel=2')->orderBy('code')->all(), 'id', 'name'),['prompt'=>'เลือกระดับความรุนแรงทั่วไป']
                                ) ?>                                                            
                            </div>
                        </div>

                    </div>
                </div>
            <!-- /.row -->
            <!-- /.row -->
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รูปแบบของการวิเคราะห์และการอธิบาย
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <?php echo $form->field($model, 'notepatient')->textarea()->textarea(['rows'=>5,'cols'=>5]);  ?>    
                                <?php echo $form->field($model, 'noteceo')->textarea()->textarea(['rows'=>5,'cols'=>5]);  ?> 
                            </div>
                            <div class="col-lg-6">
                                <?php echo $form->field($model, 'notehead')->textarea()->textarea(['rows'=>5,'cols'=>5]);  ?>   
                                <?php echo $form->field($model, 'notedepart')->textarea()->textarea(['rows'=>5,'cols'=>5]);  ?> 
                            </div>
                        </div>

                    </div>
                </div>
          
        </div>
            <!-- /.row -->                    
    </div>  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
