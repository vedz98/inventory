<?php require_once 'includes/header.php'; ?>


<div class="row">
  <div class="col-md-12">
      <div class="panel panel-success">
        <div class="panel-heading">Manage SAP Company</div>
        <div class="panel-body">
          <div class="div-action"">
            <button class="btn btn-success" data-toggle="modal" data-target="#addBrandModal">Add SAP Company</button>
            <a href="editDelBrand.php" class="btn btn-warning" role="button">Edit SAP Company</a>
          </div>

          <table class="tables" id="manageBrandTable" style="width:100%;">
            <thead>
              <tr>
                <th style="text-align: center;">No. List</th>
                <th style="text-align: center;">SAP Company Name</th>
                <!-- <th style="text-align: center;">Status</th> -->
              </tr>
            </thead>
          </table>


        </div>
    </div>  


  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="addBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add SAP Company</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  <form class="form-horizontal" id="submitBrandForm" action="php_action/createBrand.php" method="POST"> 
      <div class="modal-body">
        <div id="add-brand-messages"></div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="BrandName">SAP Company Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="brandName" name="brandName" placeholder="Enter SAP Company Name" required>
    </div>
  </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="BrandName">Status</label>
    <div class="col-sm-10">
              <select class="form-control" id="brandStatus" name="brandStatus">
                  <option value="1">Enrolled</option>
                  <option value="2">Not Enrolled</option>
				  <option value="3">Completed</option>
				  <option value="4">Not Completed</option>
              </select>
            </div>
          </div> 

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
</form>

    </div>
  </div>
</div>


<div class="modal fade" id="editBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" id="editBrandForm" action="php_action/editBrand.php" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Update Company Name</h4>
        </div>
        <div class="modal-body">

          <div id="edit-brand-messages"></div>
          <div class="edit-brand-result">
            <div class="form-group">
              <label for="editBrandName" class="col-sm-2 control-label">Company:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="editBrandName" placeholder="Brand Name" name="editBrandName" autocomplete="off">
              </div>
            </div> 

            <!-- <div class="form-group">
              <label for="editBrandName" class="col-sm-2 control-label">Status:</label>
              <div class="col-sm-10">
                <select class="form-control" id="editBrandStatus" name="editBrandStatus">
                  <option value="1">Enrolled</option>
                  <option value="2">Not Enrolled</option>
				  <option value="3">Completed</option>
				  <option value="4">Not Completed</option>
                </select>
              </div>
            </div>

          </div>                  
        </div> -->
        
        <div class="modal-footer editBrandFooter">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="editBrandBtn" data-loading-text="Loading.." autocomplete="off">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="removeBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Remove Brand</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Really remove this brand?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="removeBrandBtn" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="custom/js/brand.js"></script>

<?php require_once 'includes/footer.php'; ?>