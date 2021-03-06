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
    public $tmp_path;
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
      
    public function upload_photo() {
    
        if(!empty($this->errors)) {
            
            return false;
        }
        
        if(empty($this->user_image) || empty($this->tmp_path)) {
            
            $this->errors[] = "The file was not available";
            return false;
        }
        
        $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->user_image;
        
        if(file_exists($target_path)) {
            
            $this->errors[] = "The file {$this->user_image} arleady exists";
            return false;
        }
        
        if(move_uploaded_file($this->tmp_path, $target_path)) {
            
            unset($this->tmp_path);
            return true;
            
        } else {
            
            $this->errors[] = "The file directory probably does not have permission";
        }
    
        $this->save();
    }
    
    
    
    
    
    
}      
    
    
    
  // End of User class