<?php
require_once dirname(__FILE__).'/../AbstractClass/Animal.php';

class Tiger extends Animal
{
   public function makeSound()
   {
      return 'Tiger : roarrrr !';
   }
}