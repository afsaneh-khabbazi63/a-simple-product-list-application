<!--
Filename: addNew.php
Author: Afsaneh Khabbazibasmenj
-->
 <!-- a new page for adding new product to database-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Furniture Store</title>
        <link href='style.css' rel='stylesheet' />
    </head>
    <body>
        <div class='container' >
            <form class="addNew" action="" method="post">
                <fieldset>
                    <legend >Add new product</legend>

                    <table class='add'>
                        <tr>
                            <td><lable for='cat'>Product Category  </lable></td>
                            <td>
                                <!-- select category to add new product -->
                                <select name="cat" id="cat">
                                    <option value="Livingroom">Livingroom</option>
                                    <option value="Diningroom">Diningroom</option>
                                    <option value="Bedroom">Bedroom</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><lable for='name'>Product Name  </lable></td>
                            <td><input type="text" id='name' name='name' minlength="6" required/></td>
                        </tr>

                        <tr>
                            <td><lable for='color'>Product Color  </lable></td>
                            <td><input type="text" id='color' name='color' required/></td>
                        </tr>

                        <tr>
                            <td><lable for='price'>Product Price  </lable></td>
                            <td><input type="number" id='price' name='price'  required/></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><button name="SubmitButton" type="submit">Submit</button></td>
                        </tr>

                    </table>
                </fieldset>
                
            </form>

            <div class="image-holder">
                    <img src="images/enter.png" alt="enter new product" />
                    <a class="backButton" href='index.php'>Back to home page</a>     
            </div>

            <?php  
                
                if(!isset($_POST['SubmitButton'])) {
                    return false;
                }

                /* connect to database and code to be run if submit happens */
                require 'connect.php';
                $cat =  $_POST['cat'];
                $name =  $_POST['name'];
                $color =  $_POST['color'];
                $price = $_POST['price'];
                
                $sql = "INSERT INTO products (productName , productColor,productCategory, productPrice) VALUES ('$name', '$color', '$cat', '$price')";
            
            
                if (!mysqli_query($mysqli, $sql))
                {
                /* if mysqli_query() returns FALSE it means an error occurred */
                echo 'Query error: ' . mysqli_error($mysqli);
                }
                
                echo "<br /> Product submitted successfully.";
                
                /* close database connection */
                mysqli_close($mysqli);
            ?>
        </div>
    </body>
</html>