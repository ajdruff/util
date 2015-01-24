<?php

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

?>