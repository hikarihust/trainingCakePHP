<?php 

App::uses('AppController', 'Controller');

/**
 * 
 */
class NotesController extends AppController{
	public function index(){
		$notes = $this->Note->find('all', array(
			'order' => array('Note.created' => 'asc'),
			'fields' => array('id', 'title')
		));
		$this->set('notes', $notes);
	}

	public function view($id = null){
		$this->Note->id = $id;
		if ($this->Note->exists()) {
			// $this->Note->findById($id);
			$note = $this->Note->read(null, $id);
			$this->set('note', $note);
		}else{
			throw new NotFoundException("Không tìm thấy ghi chú này", 1);
		}
	}
}