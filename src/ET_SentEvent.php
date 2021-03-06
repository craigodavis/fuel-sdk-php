<?php
// spl_autoload_register( function($class_name) {
//     include_once 'src/'.$class_name.'.php';
// });
namespace FuelSdk;

/**
* Contains tracking data related to a send, including information on individual subscribers.
*/
class ET_SentEvent extends ET_GetSupport
{
    /**
    * @var bool 	Gets or sets a boolean value indicating whether this object get since last batch. true if get since last batch; otherwise, false.
    */
	public  $getSinceLastBatch;

	/** 
	* Initializes a new instance of the class and set the since last batch to true.
	*/	
	function __construct() 
	{
		$this->obj = "SentEvent";
		$this->getSinceLastBatch = true;
	}
}
?>