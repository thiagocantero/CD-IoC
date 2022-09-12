<?php
/**   
 * DI - Denpendency Injection - Injeção de Dependência" 
 * @version 1.0   
 * @package DI
 * @author Thiago Cantero Mari Monteiro   
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro   
 * @license http://www.thiagocantero.com.br/sobre  
 **/


class Funcionario {
   private $habilidades;
   public function __construct($habilidades){
      $this->habilidades = $habilidades;
   }
   public function contaHabilidades(){
      return count($this->habilidades);
   }
}
$criarHabilidades = array("Digitador", "Supervisor", "Logística", "Inglês Fluente");
$funcionario = new Funcionario($criarHabilidades);
echo "O número total de habilidades do Funcionário é(são): ". $funcionario->contaHabilidades();