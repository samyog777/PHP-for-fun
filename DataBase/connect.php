<?php
    include("database.php");
    // $userName = "Bill";
    // $password = "ILovePHP";
    // $hash = password_hash($password, PASSWORD_DEFAULT);

    // $sql = "INSERT INTO user (Name, Password) 
    //         VALUES ('$userName', '$hash')";


    // ! exception handling
    // try {
    //     mysqli_query($conn, $sql);
    //     echo "you are Loged in";
    // } catch(mysqli_sql_exception) {
    //     echo " Could not regester";
    // }

    // $sq = "SELECT * FROM user WHERE Name  = 'Saitama'";
    $sq = "SELECT * FROM user";
    $result = mysqli_query($conn, $sq);

    if(mysqli_num_rows($result) > 0) {
        // $row = mysqli_fetch_assoc($result);
        // echo $row["Id"] . "<br>";
        // echo $row["Name"] . "<br>";
        // echo $row["password"] . "<br>";
        // echo $row["reg_date"] . "<br>";
        while( $row = mysqli_fetch_assoc($result)) {
            echo $row["Id"] . "<br>";
            echo $row["Name"] . "<br>";
            // todo: echo $row["password"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    } else {
        echo " No User Found ";
    }

    mysqli_close($conn);

?>