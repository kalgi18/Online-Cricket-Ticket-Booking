<?php

session_start();
//destroy session
if(session_destroy()){
    //redirect to home page
    header("Location: index.html");
}

?>