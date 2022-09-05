<?php include("listing.php"); ?>

<?php foreach($result as $product){ ?>
    
        <tbody>
            <tr>  
                <td>  
                    <?php echo $product['account_number']?>  
                </td>  
                <td>  
                    <?php echo $product['first_name']?>  
                </td>  
                <td>  
                    <?php echo $product['last_name']?>  
                </td>  
                <td>  
                    <?php echo $product['email']?>  
                </td>  
                <td>  
                    <?php echo $product['phone_no']?>  
                </td>  
                <td>  
                    <?php echo $product['address']?>  
                </td>  
            </tr> 
        </tbody>
    
<?php } ?>