<?php
    class Personnage{
        private $speudo;
        private $vie;

        public function construct(){}

        public function __construct($speudo) {
            $this->speudo = $speudo;
            $this->vie = 100;
        }

        public function afficherInfos() {
            echo "$this->speudo a $this->vie PV.";
        }
    }

    class Personnage2{
        private $speudo;
        private $vie;

        public function __construct($speudo) {
            $this->speudo = $speudo;
            $this->vie = 100;
        }

        public function attaquer($cible){
            echo $this->speudo . " attaque " . $cible->speudo . "<br>";
            $cible->défense(50);
        }

        public function défense($dégats){
            $this->vie -= $dégats;
            echo $this->speudo . " perd " . $dégats . " PV <br>";
        }

        public function afficherInfos() {
            echo $this->speudo . " a " . $this->vie . " PV <br>";
          }
    }


    class Personnage3
    {
        public $speudo;
        public $vie;
        private $id;
        private $pdo;
    
        public function __construct($id) {
            $this->id = $id;
    
            try {
                $dsn = 'mysql:host=localhost;dbname=Personnage;charset=utf8';
                $user = 'root';
                $password = 'root';
                $this->pdo = new PDO($dsn, $user, $password);
            } catch(PDOException $e) {
                echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
            }
    
            $query = "SELECT * FROM personnage WHERE id = :id";
            $statement = $this->pdo->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
    
            if ($result !== false) {
                $this->speudo = $result['speudo'];
                $this->vie = $result['vie'];
            } else {
                echo "Erreur: le personnage avec l'id $id n'a pas été trouvé.<br>";
            }
        }

        public function attaquer($cible) {
            echo $this->speudo . " attaque " . $cible->speudo . "<br>";
            $cible->defense(50);
        }
    
        public function defense($degats) {
            $this->vie -= $degats;
            echo $this->speudo . " perd " . $degats . " PV <br>";
        }

        public function afficherInfos() {
            echo $this->speudo . " a " . $this->vie . " PV <br>";
        }
    }
    

?>