<?php 

    require_once('../includes/helper.php');
    
    class product{

        private $conn;
        private $table = 'products';

        //post properties

        public $id;
        public $product;


        public function __construct($db){

            $this->conn = $db;


        }

        public function read(){

            $query = 'SELECT * FROM '.$this->table;

            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }


        public function update($value){

            $query = 'UPDATE ' . $this->table. '
                    SET product = :product
                    WHERE id = :id';

            $stmt = $this->conn->prepare($query);

            $this->product = htmlspecialchars(strip_tags($this->product));
            $this->id = htmlspecialchars(strip_tags($this->id));


            //bind
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':product',$this->product);


            if($stmt->execute()){
                return true;
            }

            printf("Error %s. \n",$stmt->error);
            return false;


        }

    }



?>