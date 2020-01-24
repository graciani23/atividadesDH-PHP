
    <?php

        session_start();
       
        $_SESSION['cores'] = $_POST['cores'];
        header("location:formcores.php");


    ?>
</body>
