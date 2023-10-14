<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--====Bootstrap Links ====--> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <!--===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

         <!--===== CSS ===== -->
        <link rel="stylesheet" href="EditEmployee-assets/css/mainpagestyles.css">

        <title>Nils Management</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="option_title">
                <h1>Edit Item Details</h1>
            </div>
            <div class="header__img">
                <img src="MainPage-assets/img/mydada.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class="navbar__img"><img src="MainPage-assets/img/BrandingImg.jpg" alt=""></i>
                        <span class="nav__logo-name">Nils Management</span>
                    </a>

                    <div class="nav__list">
                        <a href="main-page.html" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="Employees.html" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Employees</span>
                        </a>
                        
                        <a href="Stocks.html" class="nav__link active">
                            <i class='bx bxs-cart nav__icon' ></i>
                            <span class="nav__name">Stocks</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bxs-ghost nav__icon' ></i>
                            <span class="nav__name">Kill Me Please!</span>
                        </a>
                    </div>
                </div>

                <a href="index.php" class="nav__link">
                    <i class='bx bx-log-out-circle nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <br>
        <center>
        <div class="container">
                <div class="dailySales box-Shadow-2">
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                      
                        $id = $_POST['id'];
                        $category = $_POST['category'];
                        $item_name = $_POST['item_name'];
                        $material = $_POST['material'];
                        $quantity = $_POST['quantity'];
                        $sizes = $_POST['sizes'];
                        $price = $_POST['price'];

                        $servername = "localhost";
                        $username = "test";
                        $password = "test";
                        $dbname = "company";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "UPDATE stock SET 
                        Category = '$category',
                        Item_name = '$item_name',
                        Material = '$material',
                        Quantity = $quantity,
                        Sizes = '$sizes',
                        Price = $price
                        WHERE ID = '$id'";
                    if ($conn->query($sql) === TRUE) {
                        echo "Item data with ID $id has been updated successfully!";
                    } else {
                        echo "Error updating user data: " . $conn->error;
                    }
                        $conn->close();
                    }
                ?>
                <form method="post" action="">
                    <br>
                    <br>
                    <label class="lblfont">ID:</label>
                    &nbsp;
                    <input type="text" name="id" required>
                    <br>
                    <label class="lblfont">Category:</label>
                    &nbsp;
                    <select name="category" required>
                        <option value="Tops">Tops</option>
                        <option value="Dresses">Dresses</option>
                        <option value="Pants">Pants</option>
                        <option value="Skirts">Skirts</option>
                        <option value="Accessories">Accessories</option>
                    </select>
                    <br>
                    <label class="lblfont">Item Name:</label>
                    &nbsp;
                    <input type="text" name="item_name" required>
                    <br>
                    <label class="lblfont">Material:</label>
                    &nbsp;
                    <input type="text" name="material" required>
                    <br>
                    <label class="lblfont">Quantity:</label>
                    &nbsp;
                    <input type="number" name="quantity" required>
                    &nbsp;
                    <br>
                    <label class="lblfont">Sizes:</label>
                    &nbsp;
                    <input type="text" name="sizes" required>
                    <br>
                    <label class="lblfont">Price:</label>
                    &nbsp;
                    <input type="number" step="0.01" name="price" required>
                    <br>
                    <br>
                    <input type="submit" value="Update" class="loging_BTN">
                    <br>
                    <br>
                </form>
                </div>  
            </div>    
        </center>
        <!-- ===== MAIN JS =====-->
        <script src="EditEmployee-assets/js/mainpagej.js"></script>
    </body>
</html>