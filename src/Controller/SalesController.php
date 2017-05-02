<?php
namespace App\Controller;
use App\Controller\AppController;
class SalesController extends AppController{

     public function edit ($id_venta = null){
        $ventas = $this -> Sales -> get($id_venta);
        if($this -> request ->is(['ventas','put']))
        {
           $this -> Sales -> patchEntity($ventas, $this-> request -> data);

        if($this -> Sales-> save($ventas))
           {
             $this -> Flash -> success(__('La venta  ha sido editado exitosamente. '));
             return $this -> redirect(['action' => 'index']);
           }
           $this -> Flash -> error(__('No se pudo guardar los cambios de la venta .'));
        }
        $this -> set('ventas', $ventas);
    }


    
      public function delete($id_venta){

        $this -> request -> allowMethod(['post','delete']);
        $sale = $this -> Sales-> get($id_venta);
        if ($this -> Sales -> delete($sale)){
            $this -> Flash -> success(__('la venta: {0} se elimino. ' , h($id_venta)));
            return $this -> redirect(['action' => 'index']);
        }
    }

     public function add(){
    $sale = $this->Sales->newEntity();
    if ($this->request->is('post')){
        $sale = $this->Sales->patchEntity($sale, $this->request->data());
        $sale->created = date("Y-m-d H:i:s");
        $sale->modified = date("Y-m-d H:i:s");
        if ($this->Sales->save($sale)){
            $this->Flash->success(__('venta Guardada.'));
            return $this->redirect(['action'=>'index']);
            
        }
        if($sale->errors()){
            $error_msg = [];
            foreach( $sale->errors()as $errors){
                if(is_array($errors)){
                    foreach($errors as $error){
                        $error_msg[] = $error;
                    }
                }else{
                    $error_msg[] = $errors;
                }
            }
        }
        if(!empty($error_msg)){
            $this->Flash->error(__("plase fix the following errors(s):".implode("\n\r",$error_msg)));
        }
       #$this->Flash->error(__('no se a ingresado.'));
    }
    $this->set('sale',$sale);

    }




    
     public function index (){
    $this->set('ventas',$this->paginate());
}

}
?>