<?php
    // Пример 5.23. Наследование и распространение класса

    $object = new Subscriber;
    $object->name = "Fred";
    $object->password = "pword";
    $object->phone = "012 345 6768";
    $object->email = "fred@bloggs.com";
    $object->display();
    
    class User 
    {
        public $name, $password;

        function save_user()
        {
            echo "Сюда помещается код, сохраняющий данные пользователя";
        }
    }

    class Subscriber extends User 
    {
        public $phone, $email;

        function display()
        {
            echo "Name: " . $this->name . "<br>";
            echo "Pass: " . $this->password . "<br>";
            echo "Phone: " . $this->phone . "<br>";
            echo "Email: " . $this->email;
        }
    }
?>