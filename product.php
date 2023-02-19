<?php require_once 'includes/header.php'; ?>


<div class="row">
  <div class="col-md-12">
      <div class="panel panel-success">
        <div class="panel-heading">Manage Employee</div>
        <div class="panel-body">
          <div class="div-action"">
            <button class="btn btn-success" data-toggle="modal" data-target="#addProductModal">Add Employee</button>
            <a href="editProduct.php" class="btn btn-warning" role="button">Update Employee</a>
          </div>

          <table class="tables" id="manageProductTable" style="width:90%;">
            <thead>
              <tr>

        				<th style="text-align: center;">Employee ID</th>
                <th style="text-align: center;">Employee Name</th>
                <th style="text-align: center;">Division</th>
                <th style="text-align: center;">Start Date</th>
                <th style="text-align: center;">End Date</th>
                <th style="text-align: center;">Location</th>
                <th style="text-align: center;">SAP Company</th>
                <th style="text-align: center;">Catalog Item Name</th>

                <th style="text-align: center;">Status</th>

              </tr>
            </thead>
          </table>


        </div>
    </div>


  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="addProductModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  <form class="form-horizontal" id="submitProductForm" action="php_action/createProduct.php" method="POST">
      <div class="modal-body">
        <div id="add-product-messages"></div>

		<div class="form-group">
  <label class="control-label col-sm-3" for="product_id">Employee ID:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Enter ID" required>
    </div>
  </div>

       <div class="form-group">
  <label class="control-label col-sm-3" for="name">Employee Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
    </div>
  </div>

      <div class="form-group">
      <label class="control-label col-sm-3" for="division">Division:</label>
      <div class="col-sm-9">
      <input type="text" class="form-control" id="divison" name="division" placeholder="Enter Division" required>
      </div>
      </div>


   <div class="form-group">
    <label class="control-label col-sm-3" for="startDate">Start Date:</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Start Date" required>
    </div>
  </div>



   <div class="form-group">
    <label class="control-label col-sm-3" for="endDate">End Date:</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" id="endDate" name="endDate" placeholder="End Date" required>
    </div>
  </div>


  <div class="form-group">
  <label class="control-label col-sm-3" for="location">Course Location:</label>
  <div class="col-sm-9">
  <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" required>
  </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-3" for="brandName" required>SAP Company:</label>
      <div class="col-sm-9">
        <select class="form-control" id="brandName" name="brandName">
          <option value="">---Select---</option>
          <?php
          $sql = "SELECT brand_id, brand_name FROM brands WHERE brand_status = 1 AND brand_active = 1";
          $result = $connect->query($sql);
          while ($row = $result->fetch_array()){
            echo "<option value='".$row[0]."'>".$row[1]."</option>";
          }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="categoryName" required>Catalog Item Name:</label>
        <div class="col-sm-9">
          <select class="form-control" id="categoryName" name="categoryName">
            <option value="">---Select---</option>
            <?php
            $sql = "SELECT category_id, category_name FROM category WHERE category_status = 1 AND category_active = 1";
            $result = $connect->query($sql);
            while ($row = $result->fetch_array()){
              echo "<option value='".$row[0]."'>".$row[1]."</option>";
            }
            ?>
          </select>
        </div>
      </div>


      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
</form>

    </div>
  </div>
</div>

<script type="text/javascript" src="custom/js/product.js"></script>

<?php require_once 'includes/footer.php'; ?>
