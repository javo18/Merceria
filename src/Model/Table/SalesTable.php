<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\validation\Validator;

class SalesTable extends Table {

public function validationDefault(validator $validator)
  {
   $validator = new Validator();
   $validator 
       ->notEmpty('id_venta','please fill thi firld')
       ->requirePresence('id_venta');
       
       return $validator;

       
  }
}
?>