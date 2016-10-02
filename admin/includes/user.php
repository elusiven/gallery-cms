<?php


class User {
    
    protected static $db_table = "users";
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    
    public static function find_all_users() {
        
        return self::find_this_query("SELECT * FROM users");
    }
    
    public static function find_user_by_id($user_id) {
        
        $the_result_array = self::find_this_query("SELECT * FROM users WHERE id = $user_id LIMIT 1");
        
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    
    public static function find_this_query($sql) {
        
        global $database;
        
        $result_set = $database->query($sql);
        $the_object_array = array();
        
        while($row = mysqli_fetch_array($result_set)) {
            
            $the_object_array[] = self::instantation($row);
        }
        
        return $the_object_array;
    }
    
    public static function verify_user($username, $password) {
        
        global $database;
        
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);
        
        $the_result_array = self::find_this_query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' LIMIT 1");
        
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    
    public static function instantation($the_record) {
        
        $the_object = new self;
                        
        foreach ($the_record as $property => $value) {
            
            if($the_object->has_the_attribute($property)) {
                
                $the_object->$property = $value;
            }
        }
        
        return $the_object;                
    }
    
    private function has_the_attribute($property) {
        
        $object_properties = get_object_vars($this);
        
        return array_key_exists($property, $object_properties);
    }
    
    public function save() {
        
        return isset($this->id) ? $this->update() : $this->create();
    }
    
    public function create() {
        
        global $database;
        global $session;
                
        $sql = "INSERT INTO " . self::$db_table . " (username, password, first_name, last_name) VALUES ('{$database->escape_string($this->username)}', '{$database->escape_string($this->password)}', '{$database->escape_string($this->first_name)}', '{$database->escape_string($this->last_name)}')";
        
        if($database->query($sql)) {
            
            $this->id = $database->the_insert_id();
            return true;
        } else {
            
            return false;
        }
        
    }
    
    public function read() {
        
        global $database;
        
    }
    
    public function update() {
        
        global $database;
        
        $sql = "UPDATE " . self::$db_table . " SET username = '{$database->escape_string($this->username)}', password = '{$database->escape_string($this->password)}', first_name = '{$database->escape_string($this->first_name)}', last_name = '{$database->escape_string($this->last_name)}' WHERE id = {$database->escape_string($this->id)} ";
        
        $database->query($sql);
        
        return (mysqli_affected_rows($database->connection) == 1) ? true : false; 
    }
    
    public function delete() {
        
        global $database;
        
        $sql = "DELETE FROM " . self::$db_table . " WHERE id = {$database->escape_string($this->id)} LIMIT 1";
        $database->query($sql);
        
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }
    
    
}  // End of User class