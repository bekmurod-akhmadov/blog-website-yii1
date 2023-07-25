<?php


Yii::import('zii.widgets.jui.CJuiDatePicker');

class DateTimePicker extends CJuiDatePicker
{
    public $options = array(
        'showAnim' => 'fold',
        'dateFormat' => 'yy-mm-dd H:i:s',
        'timeFormat' => 'HH:mm:ss',
        // Дополнительные настройки, если необходимо
    );
}