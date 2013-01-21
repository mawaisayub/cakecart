<?php
App::uses('AppController', 'Controller');
/**
 * Subcategories Controller
 *
 * @property Subcategory $Subcategory
 */
class SubcategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($id = null, $sub = false) {
        if(!isset($id))
            $this->redirect(array('controller'=>'products','action'=>'index'));

		$this->Subcategory->recursive = 1;
        $results = $this->Subcategory->find('all',array(
            'conditions'=>array('Subcategory.'.($sub==true? 'id':'category_id') => $id)
        ));
        /*debug($results);
        exit;*/
        $this->set('cat',$results);
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Subcategory->recursive = 0;
		$this->set('subcategories', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Subcategory->id = $id;
		if (!$this->Subcategory->exists()) {
			throw new NotFoundException(__('Invalid subcategory'));
		}
		$this->set('subcategory', $this->Subcategory->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Subcategory->create();
			if ($this->Subcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The subcategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcategory could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Subcategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Subcategory->id = $id;
		if (!$this->Subcategory->exists()) {
			throw new NotFoundException(__('Invalid subcategory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The subcategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcategory could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subcategory->read(null, $id);
		}
		$categories = $this->Subcategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Subcategory->id = $id;
		if (!$this->Subcategory->exists()) {
			throw new NotFoundException(__('Invalid subcategory'));
		}
		if ($this->Subcategory->delete()) {
			$this->Session->setFlash(__('Subcategory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subcategory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
