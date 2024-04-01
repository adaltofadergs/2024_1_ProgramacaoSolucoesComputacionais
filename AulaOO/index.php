<?php

include("clsCidade.php");
include_once("clsPessoa.php");

$c1 = new Cidade();
$c2 = new Cidade("Porto Alegre");

$p1 = new Pessoa( 1 , "João" );
$p2 = new Pessoa( 2 , "Maria" , 1.75 );
$p3 = new Pessoa( 3 , "José" , 1.81 , $c1 );
$p4 = new Pessoa( 4 , "Júlia" , 1.90 , $c2 );
$p5 = new Pessoa( 5 , "Suzy" , 1.70 , new Cidade() );
$p6 = new Pessoa( 6 , "Iracema" , 1.68 , new Cidade("Cacequi") );

print( "<br>".$p1->nome." - ".$p1->cidade->nome );
print( "<br>".$p2->nome." - ".$p2->cidade->nome );
print( "<br>".$p3->nome." - ".$p3->cidade->nome );
print( "<br>".$p4->nome." - ".$p4->cidade->nome );
print( "<br>".$p5->nome." - ".$p5->cidade->nome );
print( "<br>".$p6->nome." - ".$p6->cidade->nome );

echo "<hr>";
include_once("clsCategoria.php");
include_once("clsProduto.php");

$cat1 = new Categoria();
$cat2 = new Categoria("Bebidas");

$prod1 = new Produto( 1 , "Pote" );
$prod2 = new Produto( 2 , "Balde" , 12.95 );
$prod3 = new Produto( 3 , "Copo" , 10.50 , 50 );
$prod4 = new Produto( 4 , "Coca-Cola 2.5L" , 11 , 100 , $cat2 );
$prod5 = new Produto( 5 , "Sansung M23" , 1299.95 , 10 , $cat1 );

print( "<br>".$prod1->nome." - Preço: ".$prod1->preco." Cat: ".$prod1->cat->nome );
print( "<br>".$prod2->nome." - Preço: ".$prod2->preco." Cat: ".$prod2->cat->nome );
print( "<br>".$prod3->nome." - Preço: ".$prod3->preco." Cat: ".$prod3->cat->nome );
print( "<br>".$prod4->nome." - Preço: ".$prod4->preco." Cat: ".$prod4->cat->nome );
print( "<br>".$prod5->nome." - Preço: ".$prod5->preco." Cat: ".$prod5->cat->nome );





