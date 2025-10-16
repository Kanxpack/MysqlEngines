<?php
namespace Kanxpack\MysqlEngines;

class MysqlEngines {

	private static $instance;
    
    public static function getInstance() : self
    { 
    	return empty(self::$instance) ? (new self()) : self::$instance; 
    }

	public static function all() : string
	{
		return 'TEST';
	}


}
