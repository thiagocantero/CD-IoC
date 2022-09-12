<?php
/**   
 * IoC - Inversion of Controller - Inversão de Controle" 
 * @version 1.0   
 * @package IoC
 * @author Thiago Cantero Mari Monteiro   
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro   
 * @license http://www.thiagocantero.com.br/sobre  
 **/


//Classe Mãe que irá manipular as demais classes
class ClasseA
{
    public $ClasseB;
    public $ClasseC;
    public function ClasseA()
    {
        echo "<h2 style='color:blue'> Inicialização da Classe A </h2>";
    }
    public function metodo()
    {
        $this->ClasseB = new ClasseB();
        $this->ClasseC = new ClasseC();
        $this->ClasseB->metodo();
        $this->ClasseC->metodo();
    }
}

//Estabelece a Classe B
class ClasseB
{
    public function ClasseB()
    {
        echo "<h2 style='color:purple'> Initialização da Classe B </h2>";
    }
    public function metodo()
    {
        echo "<h3 style='color:purple'> A saída da Classe B </h3>";
    }
}

//Estabelece a Classe C
class ClasseC
{
    public function ClasseC()
    {
        echo "<h2 style='color:red'> Inicialização da Classe C </h2>";
    }
    public function metodo()
    {
        echo "<h3 style='color:red'> A saída da Classe C </h3>";
    }
}

//Cria o Objeto da Classe A
$objeto = new ClasseA();
//Faz a chamada da função metodo() 
$objeto->metodo();
