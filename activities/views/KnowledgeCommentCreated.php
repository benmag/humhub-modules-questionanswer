<?php

use yii\helpers\Html;

echo Yii::t('TasksModule.views_activities_TaskFinished', '<i class="fa fa-commenting-o color-qanda" style="margin-right: 5px;color: #fdc015;vertical-align: middle"></i> {userName} comment {answer}.', array(
    '{userName}' => '<strong>' . Html::encode($originator->displayName) . '</strong>',
    '{answer}' => Html::encode($source->getContentDescription())
));
?>
