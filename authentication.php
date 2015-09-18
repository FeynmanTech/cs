<?php

    $file = fopen("users.txt", "r") or exit("Unable TO OPEN file!");
    //Output a line of the file until the end is reached

    while(!feof($file))
    {
       $cs = fgets($file);
       $cd = explode($cs, ":");
       if ($cd[0] == $_POST['username'] & $cd[1] == $_POST['password']) { print("Success"); } else { print("Invalid!"); }
    }
    fclose($file);
?>
