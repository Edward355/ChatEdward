<?php
    include "classes.php";
    if(isset($_POST['UserMailLogin']) && isset($_POST['UserPasswordLogin'])){
        $user = new user();
        $user->setUserMail($_POST['UserMailLogin']);
        $user->setUserPassword(sha1($_POST['UserPasswordLogin']));
        $user->UserLogin();
    }

?>