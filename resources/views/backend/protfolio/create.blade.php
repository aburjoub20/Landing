<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Add Protfolio</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form  method="POST" action="{{route('protfolio.store')}}">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name Arabic</label>
                            <input type="text" class="form-control" name="name_ar" id="exampleInputEmail1" placeholder="Enter Name Arabic">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Name English</label>
                            <input type="text" class="form-control" name="name_en" id="exampleInputPassword1" placeholder="Enter name in English">
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputPassword1">Desc</label>
                            <input type="text" class="form-control"  name="desc" id="exampleInputPassword1" placeholder="Enter name in English">
                          </div>
                        </div>
                        <!-- /.card-body -->       
                    </div>
                    <!-- /.card -->
                  </div>
                <!-- /.row -->
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button> 
         </form>
        </div>
      </div>
    </div>
  </div>