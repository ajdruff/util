<?php
 /**
* Utility Class
*
* Common Utility Library - Built using simpliwp/util  https://github.com/simpliwp/util
*
* @package SimpliWPUtil
* @author Andrew Druffner <andrew@nomstock.com>
* @copyright  2012 Andrew Druffner
* @license    http://www.php.net/license/3_01.txt  PHP License 3.01
* @filesource
*/

 

 class Util {

/**
* Array To Html
*
* Returns the elements of an array as a table
 * 
* @param none
* @return void
*/
     function arrayToHtml( $array, $table = true )
    {
        $out = '';
        foreach ( $array as $key => $value ) {
            if ( is_array( $value ) ) {
                if ( !isset( $tableHeader ) ) {
                    $tableHeader = '<th>' .
                            implode( '</th><th>', array_keys( $value ) ) .
                            '</th>';
}
                array_keys( $value );
                $out .= '<tr>';
                $out .= $this->array2Html( $value, false );
                $out .= '</tr>';
} else {
                $out .= "<td>$value</td>";
}
}

        if ( $table ) {
            return '<table>' . $tableHeader . $out . '</table>';
} else {
            return $out;
}


        /* TODO: write  a vertical header array2html 
         * 
          <table>
          <tbody>
          <tr>
          <th>ip</th>
          <th>domain</th>
          </tr>
          <tr>
          <td>1.2.3.4</td>
          <td>mydomain.com</td>
          </tr>
          <tr>
          <td>1.2.3.4</td>
          <td>mydomain.com</td>
          </tr>
          </tbody>
          </table>

          <table">
          <caption>First Way</caption>
          <tr>
          <th>Header 1</th>
          <td>data</td><td>data</td><td>data</td>
          </tr>
          <tr>
          <th>Header 2</th>
          <td>data</td><td>data</td><td>data</td>
          </tr>
          <tr>
          <th>Header 2</th>
          <td>data</td><td>data</td><td>data</td>
          </tr>
          </table>
         */



    }


/**
* Array To String
*
* If input is array, returns an imploded string or a specified element of the array, otherwise returns the input.
 * 
* @param mixed $text The array or text to be converted to a string
 * @param mixed $index The index of the array to be returned. if not provided, returns the entire array as an imploded string
* @return void
*/


    function arrayToString( $text, $index=null ) {

        if ( is_array( $text ) ) {
            if ( (!isnull($index) ) ) {
                $result = implode( ' ', $text );
} else {

                $result = $text[ $index ];
}
} else {

            $result = $text;

}
        return $result;
    }
} 
?>