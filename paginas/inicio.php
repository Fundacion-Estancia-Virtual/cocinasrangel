<?php
 class Inicio  extends Context {
     private $context;
     function __construct($context){
         $this->context = $context;
         $this->context->title = "Inicio";
     }
     public function index(){
         $html  = ($this->context->sessionExist())
            ?$this->context->create("_componentes/navLog")
            :$this->context->create("inicio/nav"); 
            $html  .= $this->context->create("inicio/carruselprin");
            $html  .= $this->context->create("inicio/razonescr");
            $html  .= $this->context->create("inicio/galeriatrabajo");
            $html  .= $this->context->create("inicio/metodologiacr"); 
            $html  .= $this->context->create("inicio/contacto");
            $html  .= $this->context->create("inicio/formulario");
            $html  .= $this->context->create("inicio/ubicacion");
         //$html  .= $this->context->create("inicio", [
         //    "title" => "Inicio"
         //]);
          $html  .= $this->context->create("_componentes/footer");

         
         return $this->context->ret($html);
     }
}

?>
