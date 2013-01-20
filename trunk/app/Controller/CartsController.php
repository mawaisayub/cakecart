<?php
App::uses('AppController', 'Controller');
/**
 * Carts Controller
 *
 * @property Cart $Cart
 */
class CartsController extends AppController {

    var $helpers = array('Js');
    var $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */

	public function index($wish = FALSE) {
		$this->Cart->recursive = 0;
        $results = $this->Cart->find('all',array('conditions' => array(
            'AND' =>array(
                array('Cart.user_id' => $this->Auth->user('id')),
                array('Cart.wished' => $wish)))));
        $this->set('type',($wish == true? 'Wish':'Cart'));
		$this->set('wishlist', $results);
        $this->render('wishlist');//yeh wajah hai k dono k liye wishlist a rhi hai, ok bhai samjh agaya


	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$this->set('cart', $this->Cart->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($productId = null, $wished = false) {
		if ($productId != null) {
			$this->Cart->create();
            $cartItem = Array(
                    'Cart'=> Array(
                        'user_id' => $this->Auth->user('id'),
                        'product_id' => $productId,
                        'wished' => $wished
                )
            );
            //debug($cartItem);
            $this->autoRender = false;
			if ($this->Cart->save($cartItem)) {
                $this->Session->setFlash('Product added to your '.($wished == true? 'wishlist.':'cart.'));
				$this->redirect(array('controller'=>'products','action'=>'index'));
			} else {
				$this->Session->setFlash(__('Error occurred, Please try again.'));
			}
		}else{
            $this->Session->setFlash('Invalid action access');
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__('The cart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cart->read(null, $id);
		}
		$users = $this->Cart->User->find('list');
		$products = $this->Cart->Product->find('list');
		$this->set(compact('users', 'products'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $wish = FALSE) {

        $cartType = ($wish==true? 'Wish List':'Cart');

		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->Cart->delete()) {
			$this->Session->setFlash(__('Product was deleted from your '.$cartType));
			$this->redirect(array('controller'=>'carts','action' => 'index',$wish));
		}
		$this->Session->setFlash(__('Product was not deleted from your '.$cartType));
		$this->redirect(array('controller'=>'carts','action' => 'index',$wish));
	}

    public function getCart(){

        if(empty($this->request->params['requested'])){
            $this->Session->setFlash('You cannot call this action.');
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }
        $this->autoRender = FALSE;
        //if($this->)
        $this->Cart->recursive = -1;
        $results = $this->Cart->find('all',array('conditions' => array(
            'AND' =>array(
                array('Cart.user_id' => $this->Auth->user('id')),
                array('Cart.wished' => FALSE)))));

        return $results;

    }

    public function moveToCart($id = null){
        $this->Cart->id = $id;
        if (!$this->Cart->exists()) {
            throw new NotFoundException(__('Invalid cart'));
        }else{
            $wish = $this->Cart->read(null, $id);
            $wish['Cart']['wished'] = false;
            if($this->Cart->save($wish)){
                $this->Session->setFlash('Product has been moved to your Cart');
            }else{
                $this->Session->setFlash('Product could not be moved to your Cart');
            }
        }
        $this->redirect(array('controller'=>'carts','action'=>'index',TRUE));
    }

    public function emptyCart(){

        if(empty($this->request->params['requested'])){
            $this->Session->setFlash('You cannot call this action.');
            $this->redirect(array('controller'=>'products','action'=>'index'));
        }

        $this->autoRender = FALSE;
        //if($this->)
        $this->Cart->recursive = -1;
        $results = $this->Cart->deleteAll(array(
            'AND' => array(
                array('Cart.user_id' => $this->Auth->user('id')),
                array('Cart.wished' => FALSE))));
    }
}
