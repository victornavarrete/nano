<?php if ( ! defined('BASEPATH') )  exit( 'No direct script access allowed' );

class  session
{

    var $user_key = 'usr';  
    var $name = '';  
    var $lifetime = 0; // 2 hrs

    public function __construct()
    {   

        /* 
        session_cache_limiter('private_no_expire');  
        session_cache_expire( $this->lifetime );   
        ini_set("session.cookie_lifetime", $this->lifetime );
        ini_set("session.gc_maxlifetime", $this->lifetime ); 
        session_set_cookie_params( $this->lifetime);
        */
        session_start(); 
    } 

    public function set( $key, $value )
    { 
        $_SESSION[$key] = $value;
    }

    public function get( $key )
    {
        return isset( $_SESSION[$key] ) ? $_SESSION[$key] : null;
    }

    public function regenerate_id( $d = false )
    {
        session_regenerate_id( $d );
    }

   
    public function name( $name = '' ) 
    {   
        if(empty($name))
        {
            return session_name();
        }
        else
        {
            $this->name = session_name($name);
            return $this->name;
        } 
    }
    
    public function status() 
    {  
        return session_status();
    } 

    public function delete( $key )
    {
        unset( $_SESSION[$key] );
    }
  
     
    public function destroy() {  
            unset( $_SESSION ); 
            session_destroy();
    }

    /* otros */ 

    public function login( $user )
    {
        $this->set($this->user_key, $user );
    }

    public function logout()
    {
        $this->delete($this->user_key);
    }

    public function get_user()
    {
        return $this->get($this->user_key);
    }

    public function is_login( $type = null )
    {
        $usr = $this->get($this->user_key);
        $out = false;
        $type_user = 'user_type';

        if(!empty($usr)){
            if(!empty($type)){
                if (is_array($type)) {  
                    foreach ($type as $t) {
                       if($usr[$type_user] == $t){  $out = true; }
                    }
                    return $out;
                }else{ 
                    return ($usr[$type_user] == $type)?true:false; 
                }
            }else{
                $out = true;
            }  
        } 
        return $out;
     
    } 

}