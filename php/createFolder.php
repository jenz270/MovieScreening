<!--
  createFolder.php creates a folder to store images
-->

<?php
class Folder {
    function createFolder($foldername) {
         if (is_dir($foldername)) {
//Return when folder already exists  
             return false; 
          } else {
//If folder doesnt exist, create folder and set permissions
              mkdir($foldername,0755);
             $error = error_get_last();
             echo $error['message'];
            return false;
        } //end of else
   } //end of function
} //end of class
?>