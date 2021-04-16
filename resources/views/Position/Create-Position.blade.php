
<!DOCTYPE html>
<html lang="en">

<head>
@include('Template.head');
</head>

<body id="page-top">
<div id="wrapper">
@include('Template.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
   
        <!-- Topbar -->
   @include('Template.topbar');
   <!-- End of Topbar -->

      <!-- Main Content -->
      <div id="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Edit  Position</h3>
            </div>
        <div class="card-body">
         <form action="{{route('save-position')}}" method="post">
        {{csrf_field()}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Position</label>
                         <input type="text" name="position" id ='position' class="form-control" placeholder="Enter Position ...">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="name">Description</label>
                         <input type="text" name="description" id ='description' class="form-control" placeholder="Enter Description ...">
                    </div>
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Update</button>
              </div>
            </div>
            </form>
        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('Template.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
@include('Template.script')
</body>

</html>
