<?php
/**
 * From PHP5, you can write PHP in either a procedural or object oriented way. 
 * Classes can hold "properties" and "methods". 
 */
class User {
    /**
     * Properties
     * - public: be accessed from anywhere
     * - private: only be accessed from inside the class
     * - protected: only be accessed from inside the class and by inheriting classes
     */
    private $name;
    public $email;
    protected $password;

    /**
     * Constructor
     */
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    
    /**
     * Methods
     */
    function get_name() {
        return $this->name;
    }
    function set_name($name) {
        $this->name = $name;
    }
    function login() {
        return "User $this->name is logged in. <br>";
    }

    /**
     * Destructor: call when an object is destroyed or the end of the script
     */
    function __destruct() {
        echo "The user name is {$this->name}. <br>";
    }
}


/**
 * Instantiate
 */
$user1 = new User('Charlie', 'charlie@gmail.com', '12345');
// var_dump($user1);
/*
    object(User)#1 (3) 
    { 
        ["name":"User":private]=> string(4) "Pete" 
        ["email"]=> string(17) "charlie@gmail.com" 
        ["password"]=> string(5) "12345" 
    }
*/

// echo $user1->name, '<br>'; // Fatal error: Uncaught Error: Cannot access private property
echo $user1->get_name(), '<br>';

echo $user1->email, '<br>';

// echo $user1->password, '<br>'; // Fatal error: Uncaught Error: Cannot access protected property

echo $user1->login();


/**
 * Modify value of property
 */
// $user1->name = 'Pete'; // Fatal error: Uncaught Error: Cannot access private property
$user1->set_name('Pete');

echo $user1->get_name(), '<br>';


/**
 * Inheritance
 */
class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Jerry', 'jerry@gmail.com', '12345', 'Manager');
echo $employee1->get_title(), '<br>';
?>