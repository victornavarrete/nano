<?php if ( ! defined('BASEPATH') )  exit( 'No direct script access allowed' );

class  uri
{

   // global uri
    var $segments = null;
    var $path = '';
    var $protocol = 'http';
    var $server_name = '';

    public function __construct()
    {    
        $this->protocol =  isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
        $this->server_name = $_SERVER['SERVER_NAME'];  
        $this->_set_segments();   
    }  

    
    public function getPath(){  
        return $this->path;
    }

    public function getSegment($key=null){    
        return empty($this->segments[$key])?null:$this->segments[$key];
    } 

    public function totalSegments()
    {
        return count($this->segments);
    }

    public function redirect($path='', $external = false){  
        if($external == true){
            $this->_redirect($path);  
        }else{
            $p = $this->base_url($path); 
            $this->_redirect($p);   
        }
    }

    private function _redirect($path=''){ 
        header('Location: '.$path); 
        exit(); 
    }   

    public function baseUrl($path=''){   
        $p = sprintf( "%s://%s%s", $this->protocol, $this->server_name,'/'.$path );
        return $p; 
    }

    private  function _set_segments(){ 
        $path =  strip_tags(str_replace('?'.$_SERVER['QUERY_STRING'], "", $_SERVER['REQUEST_URI'] )); 
        if($path[0]=='/'){ 
            $path = substr($path, 1, strlen($path));
        } 
        if($path[strlen($path)-1]=='/'){  
            $path = substr($path, 0, -1);
        }  
        $this->segments = explode('/', $path);
        $this->path = $path; 
    }  
 
}