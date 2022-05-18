<?php
/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

// echo inverse(0); // Causes an exception to be thrown and stops script execution

// Handles the exception
// try {
//   echo inverse(5) . ' ';
//   echo inverse(0) . ' '";
// } catch (Exception $e) {
//   echo 'Caught exception: ',  $e->getMessage(), ' ';
// }

// Finally block is executed regardless of whether an exception is thrown or not

function inverse($x){
    if(!$x){
        throw new Exception('Division by zero');
    }
    return 1/$x;
}


try{
  echo inverse(20);
  echo inverse(0);
} catch(Exception $e){
  echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
  echo 'First Finally';
}

?>