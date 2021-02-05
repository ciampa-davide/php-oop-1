<?php

class book{
    public $title;
    public $pages;
    public $price;

    //cancella i titoli dei libri
    public function deleteBookTitle(){
       $this->title = "";
    }

    public function addBookTitle($titolo){
        $this->title = $titolo; 
    }

    public function discount(){

        if ($this->price > 19){

            $this->price = $this->price - 10;
        }

    }
}

$bookOne = new book();

$bookOne->title = "pinco";
$bookOne->pages = 140;
$bookOne->price = 10;
$bookOne->deleteBookTitle();
// $bookOne->addBookTitle("pallino");
var_dump($bookOne);


$bookTwo = new book();
$bookTwo->title = "davide";
$bookTwo->pages = 200;
$bookTwo->price =  25;
$bookTwo->deleteBookTitle();
$bookTwo->addBookTitle("pallino");
$bookTwo->discount();
 var_dump($bookTwo); 