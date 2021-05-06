<?php


/**************
 * 
 * En klass som hanterar product
 */

 class Product {
 /**
  * Instansvariabler (ej static) -> finns bara inuti klassen
  */
 private $id;
 private $title;
 private $description;
 private $price;
 private $category;
 private $image;


 /**
  * En konstruktor (skapar ett objekt)
  */
 public function __construct($id, $title, $description, $price, $category)
 {
  $this->id = $id;
  $this->title = $title;
  $this->description = $description;
  $this->price = $price;
  $this->category = $category;
  $this->image = "https://picsum.photos/500?random";       
 }


 /**
  * En instansmetod som konverterar objekt till array
  */
 public function toArray()
 {
  $array = array(
   "id" => $this->id,
   "title" => $this->title,
   "description" => $this->description,
   "price" => $this->price,
   "category" => $this->category,
   "image" => $this->image
  );

  return $array;
 }
}