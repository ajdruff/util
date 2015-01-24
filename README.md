# util
Create a Class that cherry picks methods from a common library of method files. Maintain your common library in a central repository.


##About

[simpliwp/util](https://github.com/simpliwp/util) provides a way to manage a common set of utility methods that are used across disparate projects. It allows you to maintain a shared set of methods , one method in each file, and use a compiler script to pull only those methods you need for your current project into a single class file.

##Quick Start

1. add each method to a single file and add that file under the `lib` directory.
2. for each method in the `lib` directory, add a line similar to the following in `config.json` , under `'METHODS'` :

        "lib/arrayToString.php":
                {"active": true}



3. From a command line, compile the utility class:

        php ./compile.php
4. View your compiled `Util.php` which includes each of the active methods contained in your config.json file.

##Configuration

The compiler is configured by editing the config.json file:

* **`PHP_FILE_HEADER`**  The path to a text file containing the comments that should be added to the top of your class file. The default is `header.php`.
* **`CLASS_NAME`**  A text string that will be the name of your declared class. The default is  
* **`OUTPUT_FILE`**  The path to the output file
* **`METHODS`** An array of file paths that include the methods that should be included in the class.

##Command Line Options


compile.php can be passed a path to a configuration file. In this way, you can maintain multiple configuration file, one for each project that includes your library.

    ./compile.php /path/to/my-projects-config.json
