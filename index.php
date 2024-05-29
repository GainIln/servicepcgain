<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
		html {
		  background-image: url('https://i.postimg.cc/XvXLp5g4/phon.jpg');
		  background-repeat: no-repeat;
		  background-position: center center;
		  background-attachment: fixed;
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
        table{
            width: 10%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
			 padding: 12px;
			 display: flex;
			border-radius: 21px;
            background-color: #fff;
            #padding: 15px;
           margin-bottom: 10px;
           border: 1px solid #4169E1;
			margin-left: auto;
			margin-right: auto;
			
			width: 500px;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 12px;
			
			
			
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
    </style>
<body>
      
<?php
    //storing database details in variables.
    $hostname = "sql8.freesqldatabase.com";
    $username = "sql8709986";
    $password = "C8bBbEZuw6";
    $dbname = "sql8709986";

    //creating connection to database
    $con = mysqli_connect($hostname, $username, $password, $dbname);
	
    #$con->set_charset('utf8');

	
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
    {
        echo "";
    }
    //Output Form Entries from the Database
    $sql = "SELECT id, var, cash FROM price utf8";
    //fire query
    $result = mysqli_query($con, $sql );
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr> <th> Id </th> <th> Наименование </th> <th> Цена </th> </tr>';
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '<tr > <td>' . $row["id"] . '</td>
           <td>' . $row["var"] . '</td>
           <td> ' . $row["cash"] . '</td></tr>';
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);

?>
</body>
</html>
