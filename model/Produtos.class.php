<?php

class Produtos extends Conexao{
    function __construct(){
        parent::__construct();
    }
    //busca produto de acordo com uma categoria especifica
    function get_Produto(){
    $query="SELECT * FROM {$this->prefix}produto p INNER JOIN 
    {$this->prefix}categorias c ON p.prod_cat = c.cat_id";

    $query.="AND prod_id = :id";
    $this->exeSQL($query);
    $this->get_List();
    }

    private function get_List(){
        $i=1;
        while($lista=$this->listDados()):
        $this->itens[$i]=array(
            'prod_id'=>$lista['prod_id'],
            'prod_nome'=>$lista['prod_nome'],
            'prod_img'=>Rotas::get_ImgLink($lista['prod_img'],180,180),
            'prod_preco'=>$lista['prod_preco'],
            'prod_descr'=>$lista['prod_descr'],
            'prod_cat'=>$lista['prod_cat']);
    
        $i++;
        endwhile;
        }    
}