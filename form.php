<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Add/Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" action="POST" enctype="multipart/form-data"> </form>
      <div class="modal-body">
        
      <div class="form-group">
        <label> Name</label>
        <div class="input-group">
          <div class="input-group-prepend">
          <span class="input-group-text bg-dark text-light"><i class="fa-regular fa-user"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Enter Username" autocomplete="OFF" required="required" id="username">
        </div> </div>

        <div class="form-group">
        <label> Email </label>
        <div class="input-group">
          <div class="input-group-prepend">
          <span class="input-group-text bg-dark text-light"><i class="fa-regular fa-envelope"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Enter Email" autocomplete="OFF" required="required" id="Email">
        </div> </div>
        
        <!-- Mobile -->
        <div class="form-group">
        <label> Mobile </label>
        <div class="input-group">
          <div class="input-group-prepend">
          <span class="input-group-text bg-dark text-light"><i class="fa-solid fa-phone"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Enter Mobile No." autocomplete="OFF" required="required" id="mobile" maxlength="10" minlength="10">
        </div> </div>

        <!-- Photo -->
        <div class="form-group">
        <label > Photo </label>
        <div class="input-group">
        <label class="custom-file-label" for="userphoto"> Select an Image</label>
        <input type="file" class="custom-file-input" name="photo" placeholder="Select Profile Picture" autocomplete="OFF" required="required" id="userphoto">
        </div> 
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>