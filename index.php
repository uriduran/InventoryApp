<!DOCTYPE html>
<html lang="en">
<?php
    require 'htmlhead.php';
?>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <div class="container">
        <div class="center">
            <h1>Create New Inventory Listing</h1>
        </div>
        <div class="row">
            <div class="one-half column">
                <form method="post" action="" enctype="multipart/form-data">
            <!-------------------------------------------------------------->

                <label for="Category">Category</label>
                    <input id="Category" type="text" name="Category" value="">
            <!-------------------------------------------------------------->
                <label for="GNumber">G-I Number</label>
                    <input id="GNumber" type="text" name="GNumber" value="">
            <!-------------------------------------------------------------->
                <label for="PNumber">Part Number</label>
                    <input id="PNumber" type="text" name="PNumber" value="">
            <!-------------------------------------------------------------->
                <label for="Vendor">Vendor</label>
                    <input id="Vendor" type="text" name="Vendor" value="">
            <!-------------------------------------------------------------->
                <label for="Price">Price</label>
                    <input id="Price" type="text" name="Price" value="">
            <!-------------------------------------------------------------->
            </div>
            <div class="one-half column">

                <label for="Location">Location</label>
                    <input id="Location" type="text" name="Location" value="">
            <!-------------------------------------------------------------->
                <label for="InStock">In Stock</label>
                    <input id="InStock" type="text" name="InStock" value="">
            <!-------------------------------------------------------------->
                <label for="Capacity">Capacity</label>
                    <input id="Capacity" type="text" name="Capacity" value="">
            <!-------------------------------------------------------------->
               <label for="Description">Description</label>
                    <textarea id="Description" type="text" name="Description" rows="2" cols="20"></textarea>
            <!-------------------------------------------------------------->

            </div>
        </div>
            <div class="center">
                <input id="submit" class="button-primary" type="submit" name="submit" value="submit">
            </div>
                </form> 
  </div>

<!----FOR TESTING---->

<?php include 'database/Connection.php'; ?>

<!-- End Document–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
