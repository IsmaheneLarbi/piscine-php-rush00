<?

    function connect($host, $user, $pwd)
    {
        $con = mysqli_connect($host, $user, $pwd);
        if (!$con)
        {
            die("Could not connect to the database ".mysqli_connect_error());   
        }
        else
            echo "You are connected\n";
        return $con;
    }
?>