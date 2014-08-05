<?php


/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType IntuitEntity
 * @xmlName IPPUserAlert
 * @var IPPUserAlert
 * @xmlDefinition 
				Product: QBW
				Description: A specific user alert to be notified to Quickbooks user, maps to a ToDo record in QuickBooks.
			
 */
class IPPUserAlert
	extends IPPIntuitEntity	{

		/**                                                                       
		* Initializes this object, optionally with pre-defined property values    
		*                                                                         
		* Initializes this object and it's property members, using the dictionary
		* of key/value pairs passed as an optional argument.                      
		*                                                                         
		* @param dictionary $keyValInitializers key/value pairs to be populated into object's properties 
		* @param boolean $verbose specifies whether object should echo warnings   
		*/                                                                        
		public function __construct($keyValInitializers=array(), $verbose=FALSE)
		{
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPUserAlert',$initPropName))
				{
					$this->{$initPropName} = $initPropVal;
				}
				else
				{
					if ($verbose)
						echo "Property does not exist ($initPropName) in class (".get_class($this).")";
				}
			}
		}

	
	/**
	 * @Definition 
								Product: QBW
								Description: The actual content of the user alert
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Notes
	 * @var string
	 */
	public $Notes;
	/**
	 * @Definition 
								Product: QBW
								Description: In use by the business
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Active
	 * @var boolean
	 */
	public $Active;
	/**
	 * @Definition 
								Product: QBW
								Description: True if the user alert has been completed
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Done
	 * @var boolean
	 */
	public $Done;
	/**
	 * @Definition 
								Product: QBW
								Description: The date to remind the user of this user alert
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName ReminderDate
	 * @var string
	 */
	public $ReminderDate;
	/**
	 * @Definition Internal use only: extension place holder for user alert  
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName UserAlertEx
	 * @var com\intuit\schema\finance\v3\IPPIntuitAnyType
	 */
	public $UserAlertEx;


} // end class IPPUserAlert
