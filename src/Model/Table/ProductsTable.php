<?php
// src/Model/Table/PostsTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends Table
{

	 

    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }


  
  
}	