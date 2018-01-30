<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
//use kartik\time\TimePicker;
use kartik\widgets\ActiveForm;
use kartik\widgets\TimePicker;
use kartik\widgets\DepDrop;
use backend\models\Risk2risk;
use backend\models\Risk2datarisk;
use backend\models\Risk2group;
use kartik\select2\Select2;
use yii\helpers\VarDumper;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */
/* @var $form yii\widgets\ActiveForm */

//print_r($model);
?>

<div class="risk2datarisk-form">
    <?php $form = ActiveForm::begin(); ?>
   
        <div class="container">
        <div class="row">      
            <!-- /.row -->
                <!-- /.col-lg-10 -->
                <div class="col-lg-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รูปแบบข้อมูลของรายงาน
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-4">

                                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'departreport')->dropDownList(
                                ArrayHelper::map(backend\models\Departreport::find()->all(), 
                                        'ID', 
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
                                        'ID', 
                                        'DeptName'),
                                        [
                                            'prompt' => 'กรุณาระบุหน่วยงานที่รับผิดชอบ'
                                        ]
                                )//->label('หน่วยงานที่รับผิดชอบ',['class'=>'label-class']) 
                                              ?>  
                            </div>
                            <div class="col-lg-4">
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
                                <?php echo '<label class="control-label">&nbsp;เวลา&nbsp;&nbsp;</label>'; 
                                      echo TimePicker::widget(['model' => $model, 'attribute' => 'timer']); 
                                      echo "<br/>";?>                                    
                            </div>

                        </div>

                    </div>
                </div>
            <!-- /.row -->
            <!-- /.row -->
                        <!-- /.row -->
                <!-- /.col-lg-10 -->
                <div class="col-lg-10">
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
                <!-- /.col-lg-10 -->
                <div class="col-lg-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รูปแบบของเหตุการณ์ที่เกิดขึ้น
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                
                                <?php    
                                        echo $form->field($model, 'fromevent')->dropdownList(
                                           ArrayHelper::map(Risk2group::find()->all(),
                                            'codegroup',
                                            'namegroup'),
                                            [
                                                'id'=>'ddl-fromevent',
                                                'prompt'=>'เลือกรูปแบบของเหตุการณ์ที่เกิดขึ้น']);
                                   // print_r($model->fromevent);
                                  //echo   $fmv=$model->fromevent;
                                ?>  
                               
                                
                                 <?php

                                       echo $form->field($model, 'dtevt')->widget(DepDrop::classname(), [
                                            'options'=>['id'=>'ddl-dtevt'],
                                            'data'=> $dtevt,
                                            'pluginOptions'=>[
                                                'depends'=>['ddl-fromevent'],
                                                'placeholder'=>'เลือกเหตุการณ์ที่เกิดขึ้น...',
                                                'url'=>Url::to(['/risk2datarisk/get-dtevt'])
                                            ]
                                        ]); 
                                       
                               // print_r($model->dtevt);
                                //print_r($dtevt);
 
                                ?>                                    
                                 
                                <?php
                                if($model->isNewRecord ){ echo "<div class=\"class_name box\">"; 
                                    echo $form->field($model, 'dtevt_other', [                                        
                                        'hintSettings' => ['placement' => 'right', 'onLabelClick' => true, 'onLabelHover' => false]
                                    ])->textArea([
                                        'id' => 'address-input', 
                                        'placeholder' => 'เหตุการณ์ที่เกิดอื่นๆ...',
                                        'disabled' => ($model->isNewRecord ? false : true),                                        
                                        'rows' => 4
                                    ])->hint('กรุณากรอกเหตุการณ์ที่เกิดอื่นๆ.');                                
                               
                                //echo $form->field($model, 'dtevt_other')->textarea()->textarea(['rows'=>5,'cols'=>5])->label('อื่นๆ',['class'=>'label-class']);  
                                     echo "</div>"; }
                                else{ echo "<div class=\"class_name box\">"; 
                                    echo $form->field($model, 'dtevt_other', [                                        
                                        'hintSettings' => ['placement' => 'right', 'onLabelClick' => true, 'onLabelHover' => false]
                                    ])->textArea([
                                        'id' => 'address-input', 
                                        'placeholder' => 'เหตุการณ์ที่เกิดอื่นๆ...',
                                        'disabled' => false,                                        
                                        'rows' => 4
                                    ])->hint('กรุณากรอกเหตุการณ์ที่เกิดอื่นๆ.');                                
                               
                                //echo $form->field($model, 'dtevt_other')->textarea()->textarea(['rows'=>5,'cols'=>5])->label('อื่นๆ',['class'=>'label-class']);  
                                     echo "</div>"; }                                     
                                if($model->fromevent==9 ){  
                                    echo $form->field($model, 'dtevt_other', [                                        
                                        'hintSettings' => ['placement' => 'right', 'onLabelClick' => true, 'onLabelHover' => false]
                                    ])->textArea([
                                        'id' => 'address-input', 
                                        'placeholder' => 'เหตุการณ์ที่เกิดอื่นๆ...',
                                        'disabled' => false,                                        
                                        'rows' => 4
                                    ])->hint('กรุณากรอกเหตุการณ์ที่เกิดอื่นๆ.');                                
                               
                                //echo $form->field($model, 'dtevt_other')->textarea()->textarea(['rows'=>5,'cols'=>5])->label('อื่นๆ',['class'=>'label-class']);  
                                      }
                                ?>
                                                             
                                <?php
                                $this->registerJs("
                                    $(document).ready(function() {
                                            $(\"select\").change(function() {
                                                $(this).find(\"option:selected\").each(function() {
                                                    if ($(this).attr(\"value\") == \"9\") {
                                                        $(\".box\").not(\".class_name\").hide();
                                                        $(\".class_name\").show();
                                                        $(\".box\").not(\".class_name\").val(\"\");
                                                    }
                                                    else {
                                                        $(\".box\").hide();
                                                    }
                                                });
                                            }).change();
                                        });
                                ");
                                 ?>
                                    </div>
                            </div>

                        </div>

                    </div>


            <!-- /.row -->
                <!-- /.col-lg-10 -->
                <div class="col-lg-10">
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
            <!-- /.row -->
    </div>  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
