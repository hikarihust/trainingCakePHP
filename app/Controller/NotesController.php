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

	public function add(){
		if ($this->request->is('post')) {
			// pr($this->request->data);
			// pr($this->request->method());
			if($this->Note->save($this->request->data)){
				$this->Session->setFlash('Ghi chú đã được lưu lại');
				$this->redirect('/notes/index');
			}else{
				$this->Session->set('Có lỗi xảy ra và ghi chú của bạn chưa được lưu lại!');
			}
		}
	}

	public function edit($id = null){
		$this->Note->id = $id;
		if ($this->Note->exists()) {
			// pr($this->request->method());
			if ($this->request->is('put') || $this->request->is('post')) {
				if($this->Note->save($this->request->data)){
					$this->Session->setFlash('Ghi chú đã được chỉnh sửa');
					$this->redirect('/notes/index');
				}else{
					$this->Session->setFlash('Có lỗi xảy ra và ghi chú chưa được chỉnh sửa!');
				}
			}else{
				$this->request->data = $this->Note->read(null, $id);
			}
		}else{
			throw new NotFoundException("Không tìm thấy ghi chú này!");
		}
	}
}