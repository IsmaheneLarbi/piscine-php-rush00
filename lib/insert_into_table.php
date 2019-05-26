<?php
    
    function insert_into_table($con, $tbl_name, $query)
    {
        if (!mysqli_query($con, $query))
        {
            echo "Error: failed to  insert into ".$tbl_name."  ".mysqli_error($con);
        }
    }
?>