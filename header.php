<header class="header">
   <div class="flex">
      <a href="index.php" class="logo">Lapak Gadget</a>
      <nav class="navbar">
         <a href="products.php">Tambah Produk</a>
         <a href="index.php">Lihat Produk</a>
      </nav>
      <?php
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);
      ?>
      <a href="cart.php" class="cart">Keranjang <span><?php echo $row_count; ?></span> </a>
      <div id="menu-btn" class="fas fa-bars"></div>
      
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        /* Style the dropdown container */
        .dropdown {
            position: relative;
            display: inline-block;
            margin: 20px;
        }

        /* Style the button that is used to open the dropdown */
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Style the dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Style the links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown content when the dropdown is hovered over */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <title>Profil</title>
</head>
<body>

<div class="dropdown">
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
        <a href="logout.php">Update Data</a>
        <a href="updateprofil.php">Logout</a>
        
    </div>
</div>

</body>
</html>

   </div>
</header>

