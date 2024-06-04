<?php
// function greet($message){
//       echo "hello world".$message;

// }
// //greet("md. mainuddin");

// class Greet{

//       function greet($message){
//             echo "hello world".$message;
      
//       }
// }

// $getting = new Greet();
// $getting->greet("md. mainuddin");

// class User{
//       public $name;
//       public function setName($newname){
//             $this->name = $newname;
//       }

//       public function getName(){
//          echo   $this->name;
//       }


// }

// $user1=new User();
// $user1->setName("mainuddin");
// $user1->getName();

// class persons{
//       public $name;
//       public $age;

//       public function personName(){
//             echo "person name is ". $this->name;
//             echo "<br>";
//       }

      

//       public function personAge(){
//             echo " person name is ". $this->age;
//       }

// }

// $person1=new persons();
// $person1->name ="mainuiddin";
// $person1->age ="24";


// $person1->personName();
// $person1->personAge();


// class Fund{
//       private $fund;

//       public function __construct($intialblance=0){
//             echo "Fund";

//             $this->fund = $intialblance;
//             echo "<br>";

//       }

//       public function addFund($money){

//             $this->fund += $money;
//             echo "Fund added: $" . $this->fund;
//             echo "<br>";
//       }

//       public function deuctFund($money){

//             $this->fund -= $money;
//             echo "Fund deucted: $" . $this->fund;

//             echo "<br>"; 
//       }

      

//       public function getFund(){
//             echo "total fund is {$this->fund}";
//             echo "<br>";
//       }
// }

// $ourFund = new Fund(1000);

// $ourFund->getFund();
// $ourFund->addFund(500);
// $ourFund->getFund();
// //$ourFund->fund=300;
// $ourFund->deuctFund(500);





// class persons{
//             public $name;
//             public $age;
//             public $id;
      
//             public function __construct($name,$age){
//                   $this->name = $name;
//                   $this->age = $age;
//             }
      
//             public function setId($id){
//                   $this->id = $id;
//                   echo "id is {$this->id}";
//                   echo "<br>";
//             }

//             public function __destruct(){
//                   if(!empty($this->id)){

//                   echo "saving person";
//                   }
//                   echo "<br>";
//             }
      
//             public function personDeatails(){
//                   echo " person name is {$this->name} . $this->age";
//             }
      
//       }
      
//       $person1=new persons("mainuddin","22");
//       $person1->personDeatails();
//       $person1->setid(22);

