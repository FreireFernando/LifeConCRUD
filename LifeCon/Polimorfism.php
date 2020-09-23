<?php

    Class Animal{
        public function latir(){
            echo "auau!";
        }
        public function mugir(){
            echo "muuuuu!";
        }
        public function carcarejar(){
            echo "cócóricó!";
        }
    }

    Class Cachorro extends Animal {
        public function latir(){
            $this->latir();
        }
    }
    Class Vaca extends Animal {
        public function mugir(){
            $this->mugir();
        }
    }
    Class Galinha extends Animal {
        public function carcarejar(){
            $this->carcarejar();
        }
    }

    Class Fazenda {
        function emitirSom($animal){

            if (!($animal instanceof Cachorro || $animal instanceof Vaca || $animal instanceof Galinha))
                throw new InvalidArgumentException("Fazenda.class: tipo de 'animal' inválido!");

            if ($animal instanceof Cachorro) $animal->latir();

            if ($animal instanceof Vaca) $animal->mugir();
            
            if ($animal instanceof Galinha) $animal->cacarejar();
                
        }
    }
?>