<aside class="right-side">

<!-- Main content -->
<div class="isi">
		<div class="container">
		    <h1>Ajax CRUD with Bootstrap modals and Datatables</h1>
		 
		    <h3>Person Data</h3>
		    <br />
		    <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add Person</button>
		    <br />
		    <br />
		    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
		      <thead>
		        <tr>
		          <th>First Name</th>
		          <th>Last Name</th>
		          <th>Gender</th>
		          <th>Address</th>
		          <th>Date of Birth</th>
		          <th style="width:125px;">Action</th>
		        </tr>
		      </thead>
		      <tbody>
		      </tbody>
		 
		      <tfoot>
		        <tr>
		          <th>First Name</th>
		          <th>Last Name</th>
		          <th>Gender</th>
		          <th>Address</th>
		          <th>Date of Birth</th>
		          <th>Action</th>
		        </tr>
		      </tfoot>
		    </table>
		  </div>
</div>
</aside>
		 

		 
		  <!-- Bootstrap modal -->
		  <div class="modal fade" id="modal_form" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 class="modal-title">Person Form</h3>
		      </div>
		      <div class="modal-body form">
		        <form action="#" id="form" class="form-horizontal">
		          <input type="hidden" value="" name="id"/>
		          <div class="form-body">
		            <div class="form-group">
		              <label class="control-label col-md-3">First Name</label>
		              <div class="col-md-9">
		                <input name="firstName" placeholder="First Name" class="form-control" type="text">
		              </div>
		            </div>
		            <div class="form-group">
		              <label class="control-label col-md-3">Last Name</label>
		              <div class="col-md-9">
		                <input name="lastName" placeholder="Last Name" class="form-control" type="text">
		              </div>
		            </div>
		            <div class="form-group">
		              <label class="control-label col-md-3">Gender</label>
		              <div class="col-md-9">
		                <select name="gender" class="form-control">
		                  <option value="male">Male</option>
		                  <option value="female">Female</option>
		                </select>
		              </div>
		            </div>
		            <div class="form-group">
		              <label class="control-label col-md-3">Address</label>
		              <div class="col-md-9">
		                <textarea name="address" placeholder="Address"class="form-control"></textarea>
		              </div>
		            </div>
		            <div class="form-group">
		              <label class="control-label col-md-3">Date of Birth</label>
		              <div class="col-md-9">
		                <input name="dob" placeholder="yyyy-mm-dd" class="form-control" type="text">
		              </div>
		            </div>
		          </div>
		        </form>
		          </div>
		          <div class="modal-footer">
		            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
		            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
		          </div>
		        </div><!-- /.modal-content -->
		      </div><!-- /.modal-dialog -->
		    </div><!-- /.modal -->
		  <!-- End Bootstrap modal -->

