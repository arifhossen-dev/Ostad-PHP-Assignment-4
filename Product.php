<?php
class Product
{
  // TODO: Add properties
  private $id;
  private $name;
  private $price;

  public function __construct($id, $name, $price)
  {
    // TODO: Initialize properties
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }


  /* TODO: Add getFormattedPrice method
  * @method that returns the price of the product 
  * formatted as a string with two decimal places.
  */
  public function getFormattedPrice()
  {
    $priceWith2DecimalPlace = number_format($this->price, 2, '.', '');
    return "$" . $priceWith2DecimalPlace;
  }


  /* TODO: Add showDetails method
  * method that prints the details of the 
  * product (id, name, and formatted price) to the console.
  */
  public function showDetails()
  {
    $formattedPrice = $this->getFormattedPrice();

    return <<<END
      ID: $this->id
      Name: $this->name
      Price: $formattedPrice
    END;
  }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
echo $product->showDetails();
