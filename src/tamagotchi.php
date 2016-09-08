<?php
class Tamagotchi{

    private $name;
    private $happiness;
    private $hunger;
    private $sleep;
    private $life;

    function __construct($name)
      {
        $this->name = $name;
        $this->happiness = 10;
        $this->hunger = 0;
        $this->sleep = false;
        $this->life = 0;

      }

      function setName($new_name)
      {
          $this->name = (string) $new_name;
      }

      function getName()
      {
          return $this->name;
      }

      function setHappiness($new_happiness)
      {
          $this->happiness = $happiness;
      }

      function setHunger($new_hunger)
      {
          $this->hunger = $hunger;
      }

      function setSleep($new_sleep)
      {
          $this->sleep = $sleep;
      }
      function setLife($new_life)
      {
          $this->sleep = $life;
      }

      function save()
      {
        array_push($_SESSION['list_of_Tamagotchis'], $this);
      }

      static function getAll()
      {
          return $_SESSION['list_of_Tamagotchis'];
      }
      static function deleteAll()
      {
          $_SESSION['list_of_Tamagotchis'] = array();
      }
  }
  ?>
