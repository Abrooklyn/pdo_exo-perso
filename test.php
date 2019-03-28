<?php

// Créer une classe SuperHero

// 3 propriétés
// - name
// - power
// - life avec une valeur initial à 100;

// Créer trois methodes
// une qui affiche son nom
// une qui check si il est mort ou non
// une qui retire 10 points à se vie

class superHero
    {
        public $name;
        public $power;
        public $life = 100;

        public function __contruct($name,$power)
            {
                $this->name = $name;
                $this->power = $power;
                $this->life = $life;
            }
        
            
        public function getInfos():string
            {
                return 'My name is ' .$this->name. ' and my super Power is the ' .$this->power;
                return getLife($life);
            }

        public function getLife():string
        {
            if ($this->life <= 0) {
                return 'DEAD';
            } else {
                return 'ALIVE';
            }
        }
    }

$superHero = new superHero();
$superHero->name = ('Vegeta');
$superHero->power = ('Final flash');
$superHero->life = ('100');

echo $superHero->getInfos();
echo '</br>';
echo '</br>';
echo $superHero->getLife();
echo '</br>';
echo '</br>';
$attack1 = $superHero->life - 10 ;
echo $attack1;

?>