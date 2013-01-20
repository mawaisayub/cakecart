<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 */

class ProductsController extends AppController {

    public $paginate = array(
        'limit' => 8
    );
/**
 * index method
 *
 * @return void
 */
    public function checkout(){

    }
	public function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}
    public function wishlist(){

    }
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}
   public function cart(){

   }
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$subcategories = $this->Product->Subcategory->find('list');
		$this->set(compact('subcategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Product->read(null, $id);
		}
		$subcategories = $this->Product->Subcategory->find('list');
		$this->set(compact('subcategories'));
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
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('Product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {

		if ($this->request->is('post')) {
			$this->Product->create();
            $picture=$this->request->data['Product']['picture'];
            $this->request->data['Product']['picture']=$this->request->data['Product']['picture']['name'];
            $filePath = WWW_ROOT .'img'.DS.$picture['name'];

            $this->request->data['Product']['detail'] = str_replace("\n", "</br>", $this->request->data['Product']['detail']);

            if($this->Product->save($this->request->data)) {

                move_uploaded_file($picture['tmp_name'], $filePath);
                $this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$subcategories = $this->Product->Subcategory->find('list');
		$this->set(compact('subcategories'));

	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data['Product']['detail'] = str_replace("\n", "</br>", $this->request->data['Product']['detail']);
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Product->read(null, $id);
		}
		$subcategories = $this->Product->Subcategory->find('list');
		$this->set(compact('subcategories'));
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
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('Product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

    public function search() {

        if ($this->RequestHandler->isAjax()) {
            $this->autoLayout = false;
            $this->autoRender = false;
            $this->Product->recursive = -1;
            $results = $this->Product->find('all',array('conditions'=>array('Product.title LIKE'=>'%'.$_GET['term'].'%')));
            $response = array();
            $i = 0;
            foreach($results as $result){
                $response[$i]['label'] = $result['Product']['title'];
                $response[$i]['value'] = $result['Product']['title'];
                $i++;
            }
            /*foreach($results as $r){
                echo $r['Post']['title'];
            }*/
            echo json_encode($response);
        }else{
            $this->Product->recursive = 0;
            if(isset($_GET['q'])){
                $results = $this->Product->find('all',array('conditions'=>array('Product.title LIKE'=>'%'.$_GET['q'].'%')));
                $this->set('products',$results);
            }

        }
    }
}
