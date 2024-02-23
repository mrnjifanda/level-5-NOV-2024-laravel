<?php

    $services = [
        ['name' => 'Web Design', 'description' => 'Hello my web design service'],
        ['name' => 'UI/UX Design', 'description' => 'Hello my UI/UX Design service'],
        ['name' => 'Photography', 'description' => 'Hello my Photography service']
    ];



    class User {

        private $name;
        public function __construct($name)
        {
            $this->name = $name;
        }

        public function getName() {
            echo $this->name;
        }
    }

    $user = new User("Seven");

    $user->getName();