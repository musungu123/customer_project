<?php
include("connection.php");
$stmt = $conn-> prepare("SELECT * from customer_details");
$stmt -> execute();
$result = $stmt -> get_result();
?>
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1"> 
            <thead>   
             <tr>    
                <th>Account Number</th>    
                <th>First Name</th>    
                <th>Last Name</th>   
                <th>Email</th>    
                <th>Phone No.</th>       
                <th>Address</th>    
             </tr> 
           </thead >  
        </table>    
    </body>    
</html>