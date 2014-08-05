<?php




/**
 * This file contains an interface for Logging.
 */
class Logger {
        
    static protected $logFile;
    
    public static function setLogFile($logFile) {
        self::$logFile = $logFile;
    }

    public static function getLogFile() {
        return self::$logFile;
        if(!self::$logFile){
            self::$logFile = __DIR__ .'/../../../executionlog.txt';
        }
        self::$logFile = $configFile;
    }

	/**
	 * Logs messages depending on the ids trace level.
	 *
	 * @param TraceLevel $idsTraceLevel IDS Trace Level.
	 * @param string $messageToWrite The message to write.
	 *
	 */
	public function Log($idsTraceLevel, $messageToWrite)
	{
		file_put_contents(self::getLogFile(), $messageToWrite."\n", FILE_APPEND);
	}
}

?>
