<?php
/**
* Compiler Class
*
* Compiles source files for use within a common library
 * 
 * 
 * simpliwp/util  https://github.com/simpliwp/util
*
* @package SimpliWPUtil
* @author Andrew Druffner <andrew@nomstock.com>
* @copyright  2012 Andrew Druffner
* @license    http://www.php.net/license/3_01.txt  PHP License 3.01
* @filesource
*/

class Compiler{

    public function __construct() {
        /*
         * Configuration
         */
        global $argv;
 
        if ( isset($argv[1])) {
           $config_file_path = $argv[1];  
}else {
        $config_file_path='config.json' ;
}
$config_file = file_get_contents( $config_file_path );
        $cfg = json_decode( $config_file, true );
        $this->FILE_HEADER = @file_get_contents( $cfg[ 'MAIN' ][ 'CONFIG' ][ 'PHP_FILE_HEADER' ] );
        $this->OUTPUT_FILE = $cfg[ 'MAIN' ][ 'CONFIG' ][ 'OUTPUT_FILE' ];
        $this->CLASS_NAME = $cfg[ 'MAIN' ][ 'CONFIG' ][ 'CLASS_NAME' ];
        $this->METHODS = $cfg[ 'MAIN' ][ 'CONFIG' ][ 'METHODS' ];
}

    /**
     * Config
     *
     * You can override the config file here
     *
     * @param none
     * @return void
     */
    public function config() {
        
        /*
         * e.g.:override FILE_HEADER
         * 
         * $this->FILE_HEADER='my file hader.php'
         */
        
    }

    /**
     * Short Description
     *
     * Long Description
     *
     * @param none
     * @return void
     */
    public function compile() {

        $this->config();
        ob_start();

        foreach ( $this->METHODS as $file_name => $libs_config ) {

            if ( $libs_config[ 'active' ] === true ) {

                $sourcestring = file_get_contents( "$file_name " );



                preg_match( '/(?:<\?php)(.*)\?>/is', $sourcestring, $matches );

                echo $matches[ 1 ];
}




}

        $contents = ob_get_clean();



        $contents = "<?php\n $this->FILE_HEADER \n\n class $this->CLASS_NAME {" . $contents . "} \n?>";



        file_put_contents( $this->OUTPUT_FILE, trim( $contents ) );


    }
}
?>