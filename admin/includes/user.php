<?php


class User extends Db_object {
    
    protected static $db_table = "users";
    protected static $db_table_fields = array('id', 'username', 'password', 'first_name', 'last_name', 'user_image');
    // User Class Properties
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $user_image;
    // User Class image properties
    public $upload_directory = "images";
    public $image_placeholder = "http://placehold.it/400x400&text=changeme";
    
    
    public static function verify_user($username, $password) {
        
        global $database;
        
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);
        
        $the_result_array = self::find_this_query("SELECT * FROM " . self::$db_table . " WHERE username = '{$username}' AND password = '{$password}' LIMIT 1");
        
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    
    public function user_image_func() {
        
        return empty($this->user_image) ? $this->image_placeholder : $this->upload_directory.DS.$this->user_image;
    }
  
    
    
    
    
    
    
}  // End of User class