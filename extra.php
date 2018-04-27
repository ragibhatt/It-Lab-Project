<html>
        <?php
    session_start();
    $db_host="localhost";
    $db_user="root";
    $db_pass="tiger";
    $db_name="fin_vote";
   
    $dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Database");
    $query="select count(id) from cr";
    $query1="select * from cr where sec=1 order by vote desc;";
    $result1=mysqli_query($dbh,$query1);
    $query2="select * from cr where sec=2 order by vote desc;";
    $result2=mysqli_query($dbh,$query2);   
    $query3="select * from cr where sec=3 order by vote desc;";
    $result3=mysqli_query($dbh,$query3);   
?>
    <style>
        .table{
            float:left;
            margin-right:10px;
        }
        .tab{
            //float: left;
            margin-left:17%;
            width:100%;
        }
    </style>
    </head>
    <body>
   

        <center><h2>To remove the candidates which have CGPA less than 7</h2></center>
<div class="tab"><table class="table" border=1px rules="all">
        <tr>
                <th colspan="3">Section 1</th>
        </tr>
        <tr>
            <th>Candidate</th>
            <th>CGPA</th>
            <th>Delete</th>
        </tr>
        <?php while($row1=mysqli_fetch_array($result1)){ ?>
        <tr>
            <td><?php echo $row1['name']; ?></td>
            <td><?php echo $row1['cgpa']; ?></td>
            <td><center><input type="radio" name="rem" value="<?php echo $row1['id'];  ?>" form="del"/></center>
            </td>
        <?php } ?>
        </tr>
        </table>


        <table class="table" border=1px rules="all">
        <tr>
                <th colspan="3">Section 2</th>
        </tr>
        <tr>
            <th>Candidate</th>
            <th>CGPA</th>
            <th>Delete</th>
        </tr>
        <?php while($row2=mysqli_fetch_array($result2)){ ?>
        <tr>
            <td><?php echo $row2['name']; ?></td>
            <td><?php echo $row2['cgpa']; ?></td>
            <td><center><input type="radio" name="rem" value="<?php echo $row2['id'];  ?>" form="del"/></center>
            </td>
        </tr>
            <?php } ?>
        </table>
        <table border=1px rules="all">
        <tr>
                <th colspan="3">Section 3</th>
        </tr>
        <tr>
            <th>Candidate</th>
            <th>CGPA</th>
            <th>Delete</th>
        </tr>
        <?php while($row3=mysqli_fetch_array($result3)){ ?>
        <tr>
            <td><?php echo $row3['name']; ?></td>
            <td><?php echo $row3['cgpa']; ?></td>
            <td><center><input type="radio" name="rem" value="<?php echo $row3['id'];  ?>" form="del"/></center>
            </td>
        </tr>
            <?php } ?>
        </table>
       
</div>
<center>
<form action="delete.php" id="del" method="post">
    <input type="submit" value="Remove Candidate">
</form>
</center>

</html>
