<?php
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
?>