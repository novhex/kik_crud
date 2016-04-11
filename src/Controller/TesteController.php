<?php


namespace App\Controller;

class TesteController extends AppController{
 
 
var $name = 'Product';

	 public function initialize()
    {
        parent::initialize();
        $this->loadModel('Products');
    
    }

  public function index(){
     //$data= array('CodeIgniter','CakePHP','Yii Framework','Laravel','Zend');
    
    $this->set('products', $this->Products->find('all'));
 
 
   }

   public function x($x){
    echo $x;
   }

   public function ajaxtest(){
   		 
   }
    

}