
<!--
Filename: index.php
Author: Afsaneh Khabbazibasmenj
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Furniture Store</title>
        <!-- three font sources link for body font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
        
        <meta charset="UTF-8">
        <link href='style.css' rel='stylesheet' />
    </head>
    <body class="mainPage">

        <header>
            <h1>Product List</h1>
        </header>

        <aside>
            <h2>Categories</h2>
            <a href='index.php?productCategory=Livingroom' >Livingroom</a>
            <a href='index.php?productCategory=Diningroom' >Diningroom</a>
            <a href='index.php?productCategory=Bedroom' >Bedroom</a>
            <a href='addNew.php' class="addNewButton">Add new product</a>
        </aside>
        
        <main>
            <?php
               /* connection to database */ 
               require 'connect.php';

               /* set a default for category */
            //    $category = isset($_GET['productCategory']) ? $_GET['productCategory'] : "";
               if(isset($_GET['productCategory']) ){
                    $category=$_GET['productCategory'] ;
               }else{
                    $category="";
               }
               
               /* if no category is selected show a photo on the main page */
               if( $category == ""){
                   echo 
                        "<div class='empty-page'>
                            <img src='images/select.png' alt='select a product' />
                            <p>Please select one category</p>
                        </div>";
                   return false;
               }

               /* select query to show products by category */
               $sql = "SELECT * FROM products WHERE productCategory='" . $category . "'";
               $result = mysqli_query($mysqli, $sql);
              
                /* check for error*/
                if (!mysqli_query($mysqli, $sql))
                {
                echo 'Query error: ' . mysqli_error($mysqli);
                }
                
                /* Implement data creating a table*/
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                    echo '<table>';
                    echo '<caption>'.$category.'</caption>';
                    echo '<tr>';
                    echo '<th>Name</th>';
                    echo '<th>Color</th>';
                    echo '<th>Price</th>';
                    echo '</tr>';
                    foreach($rows as $row) {
                        echo
                        '<td>'. $row['productName'].'</td>' ,
                        '<td>'. $row['productColor'].'</td>',
                        '<td>'. $row['productPrice'].'</td>';
                        echo '</tr>';
                    }
              
                    /* close connection */
              mysqli_close($mysqli);
            ?>
        </main>
    </body>
</html>
