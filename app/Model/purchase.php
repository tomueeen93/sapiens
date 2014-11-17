<?php
// 必ずテーブル名purchases→Purchase単数系の最初大文字
class Purchase extends AppModel{
	public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'money' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>
