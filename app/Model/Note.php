<?php 

App::uses('AppModel', 'Model');
class Note extends AppModel{
	public $useTable = 'notes';
	public $validate = array(
		'title' => array(
			'rule'=> 'notBlank',
			'message' => 'Tựa đề không được để trống'
		),
		'content' => array(
			'notBlank' => array(
				'rule' => 'notBlank',
				'message' => 'Nội dung không được để trống',
				'last' => false
			),
			'minLength' => array(
				'rule' => array('minLength', 10),
				'message' => 'Nội dung không được ít hơn 10 ký tự'
			)
		)
	);
}