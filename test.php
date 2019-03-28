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
        public $attack;

        public function __contruct($name,$power)
            {
                $this->name = $name;
                $this->power = $power;
                $this->life = $life;
                $this->attack = $attack;
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

        public function getAttack()
        {
            if ($this->attack //est = à $degats alors $newlife = $life - $degats)
            {
            
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
echo '</br>';
echo '</br>';

 // new character

 echo "New challenger in game";
echo '</br>';
echo '</br>';

$superHero = new superHero();
$superHero->name = ('Black Goku');
$superHero->power = ('Black Kamehameha');
$superHero->life = ('200');

echo $superHero->getInfos();
echo '</br>';
echo '</br>';
echo $superHero->getLife();
echo '</br>';
echo '</br>';
$attack1 = $superHero->life - 50 ;
echo $attack1;
echo '</br>';
echo '</br>';

// new character

echo "New challenger in game";
echo '</br>';
echo '</br>';

$superHero = new superHero();
$superHero->name = ('Trunks du futur');
$superHero->power = ('Burning Storm');
$superHero->life = ('100');

echo $superHero->getInfos();
echo '</br>';
echo '</br>';
echo $superHero->getLife();
echo '</br>';
echo '</br>';
$attack1 = $superHero->life - 20 ;
echo $attack1;
echo '</br>';
echo '</br>';


?>