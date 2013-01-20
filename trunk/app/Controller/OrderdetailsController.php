<?php
App::uses('AppController', 'Controller');
/**
 * Orderdetails Controller
 *
 * @property Orderdetail $Orderdetail
 */
class OrderdetailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Orderdetail->recursive = 0;
		$this->set('orderdetails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Orderdetail->id = $id;
		if (!$this->Orderdetail->exists()) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		$this->set('orderdetail', $this->Orderdetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Orderdetail->create();
			if ($this->Orderdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The orderdetail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderdetail could not be saved. Please, try again.'));
			}
		}
		$products = $this->Orderdetail->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Orderdetail->id = $id;
		if (!$this->Orderdetail->exists()) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Orderdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The orderdetail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderdetail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Orderdetail->read(null, $id);
		}
		$products = $this->Orderdetail->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Orderdetail->id = $id;
		if (!$this->Orderdetail->exists()) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		if ($this->Orderdetail->delete()) {
			$this->Session->setFlash(__('Orderdetail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orderdetail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Orderdetail->recursive = 0;
		$this->set('orderdetails', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Orderdetail->id = $id;
		if (!$this->Orderdetail->exists()) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		$this->set('orderdetail', $this->Orderdetail->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Orderdetail->create();
			if ($this->Orderdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The orderdetail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderdetail could not be saved. Please, try again.'));
			}
		}
		$products = $this->Orderdetail->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Orderdetail->id = $id;
		if (!$this->Orderdetail->exists()) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Orderdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The orderdetail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderdetail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Orderdetail->read(null, $id);
		}
		$products = $this->Orderdetail->Product->find('list');
		$this->set(compact('products'));
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
		$this->Orderdetail->id = $id;
		if (!$this->Orderdetail->exists()) {
			throw new NotFoundException(__('Invalid orderdetail'));
		}
		if ($this->Orderdetail->delete()) {
			$this->Session->setFlash(__('Orderdetail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orderdetail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

    public function addDetail(){

        if(empty($this->request->params['requested'])){
            $this->Session->setFlash('You cannot call this action.');
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }

        $this->autoRender = false;
        $orderDetails = $this->request->params['orderDetails'];
        if($this->Orderdetail->saveMany($orderDetails)){
            return true;
        }

        return false;
    }
}
