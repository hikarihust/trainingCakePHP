<?php 

App::uses('AppController', 'Controller');

/**
 * 
 */
class NotesController extends AppController{
	public function index(){
		$notes = $this->Note->find('all', array('order' => array('Note.created' => 'asc')));
		$this->set('notes', $notes);
	}
}