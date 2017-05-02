<?php
namespace App\Controller;
use App\Controller\AppController;
class ProductsController extends AppController{

	 public function edit ($ID_producto = null){
        $productos = $this -> Products -> get($ID_producto);
        if($this -> request ->is(['productos','put']))
        {
           $this -> Products -> patchEntity($productos, $this-> request -> data);

        if($this -> Products -> save($productos))
           {
             $this -> Flash -> success(__('El producto ha sido editado exitosamente. '));
             return $this -> redirect(['action' => 'index']);
           }
           $this -> Flash -> error(__('No se pudo guardar los cambios del producto.'));
        }
        $this -> set('productos', $productos);
    }


	
	  public function delete($ID_producto){

        $this -> request -> allowMethod(['post','delete']);
        $product = $this -> Products -> get($ID_producto);
        if ($this -> Products -> delete($product)){
            $this -> Flash -> success(__('El Producto: {0} se elimino. ' , h($ID_producto)));
            return $this -> redirect(['action' => 'index']);
        }
    }

	 public function add(){
    $product = $this->Products->newEntity();
    if ($this->request->is('post')){
        $product = $this->Products->patchEntity($product, $this->request->data());
        $product->created = date("Y-m-d H:i:s");
        $product->modified = date("Y-m-d H:i:s");
        if ($this->Products->save($product)){
            $this->Flash->success(__('Producto Guardado.'));
            return $this->redirect(['action'=>'index']);
            
        }
        if($product->errors()){
            $error_msg = [];
            foreach( $product->errors()as $errors){
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
    $this->set('product',$product);

    }




    
     public function index (){
    $this->set('productos',$this->paginate());
}

}
?>