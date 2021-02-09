<h1>Gallery</h1>
<div class="text-right">
  <a href="#" class="btn btn-success btn-sm mr-4" data-toggle="modal" data-target="#addService">Add Image</a>
</div> 
<div class="container">
        <div class="row">
                <div class="col-md-4">
                  <div class="card-deck">
                      <div class="card">
                        <div class="card-body">
                          <img src="img/undraw_profile.svg" alt="">
                          <h5 class="card-title">Card title</h5>    
                        </div>
                        <div class="card-footer text-right">
                            <a href="#" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#addService">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </div>  
                      </div>
                    </div>
               </div>
        </div>
        <div class="mt-4 text-right">
          <a href="/vcard" class="btn btn-info btn-sm">Finish</a>
        </div>
</div>
<!-- addService modal start-->
<div class="modal fade" id="addService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
          <div class="card-footer">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile"> Choose file </label>
            </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- addService modal end-->

      
      
  