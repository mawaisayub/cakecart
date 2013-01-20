<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    var $helpers = array('Js');

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'products', 'action' => 'index','admin'=>false),
            'logoutRedirect' => array('controller' => 'products', 'action' => 'index','admin'=>false),
            'loginAction'=>array('controller'=>'users','action'=>'login','admin'=>false),
            'authorize' => array('Controller') // Added this line
        ),
        'RequestHandler'
    );

    public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {

            return true;
        }

        // Default deny
        return false;
    }

    public function beforeFilter() {

        $this->loadModel('Category');
        $this->loadModel('Cart');
        $this->Category->recursive=1;
        $this->Cart->recursive=0;
        $results = $this->Cart->find('all',array('conditions' => array(
            'AND' =>array(
                array('Cart.user_id' => $this->Auth->user('id')),
                array('Cart.wished' => false)))));
        $this->set('type','Cart');
        $this->set('cart_dropdown', $results);
        // debug($this->Category->find('all'));
        // exit;
        $this->set('allcategories', $this->Category->find('all'));
        //sdebug($cc);
        // exit;


        $this->Auth->allow('index','search','view','register','login','contact','about');
        $this->set('authrized',false);
        if($this->Auth->loggedIn()){
            $this->Auth->allow('login','logout','register','search','checkout','contact','acount','cart','wishlist','index', 'view','add','delete','contact','about');
            $this->set('logined',true);
            $this->set('name',$this->Auth->user());
            if($this->isAuthorized($this->Auth->user())){
                $this->Auth->allow();
                $this->set('authrized',true);
            }else{
                $this->Auth->deny('admin_add','admin_edit','admin_delete','admin_index');
            }
        }
    }
}
