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

        public function goAttack()
        {
            return 'My name is ' .$this->name. ' and i will kill you, ' .$this->name. ' ,Prepare you !';
            return goDie($life);
        }

        public function goDie()
        {
            while ($life <= 0):
            echo $life;
            $life--;
            var_dump($life);
            endwhile;
        }
    }

$superHero1 = new superHero();
$superHero1->name = ('Vegeta');
$superHero1->power = ('Final flash');
$superHero1->life = ('100');
$superHero1->attack1 = ('50');

echo $superHero1->getInfos();
echo '</br>';
echo '</br>';
echo $superHero1->getLife();
echo '</br>';
echo '</br>';
$attack1 = $superHero1->life - 10 ;
echo $attack1;
echo '</br>';
echo '</br>';

 // new character

 echo "New challenger in game";
echo '</br>';
echo '</br>';

$superHero2 = new superHero();
$superHero2->name = ('Black Goku');
$superHero2->power = ('Black Kamehameha');
$superHero2->life = ('100');
$superHero2->attack2 = ('75');

echo $superHero2->getInfos();
echo '</br>';
echo '</br>';
echo $superHero2->getLife();
echo '</br>';
echo '</br>';
$attack1 = $superHero2->life - 50 ;
echo $attack1;
echo '</br>';
echo '</br>';

// new character

echo "New challenger in game";
echo '</br>';
echo '</br>';

$superHero3 = new superHero();
$superHero3->name = ('Trunks du futur');
$superHero3->power = ('Burning Storm');
$superHero3->life = ('100');
$superHero3->attack3 = ('25');

echo $superHero3->getInfos();
echo '</br>';
echo '</br>';
echo $superHero3->getLife();
echo '</br>';
echo '</br>';
$attack1 = $superHero3->life - 20 ;
echo $attack1;
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo $superHero1->goAttack(); //a modifier (superhero[random] attaque superhero[random]...)

?>