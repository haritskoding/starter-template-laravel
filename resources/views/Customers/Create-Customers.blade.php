
<!DOCTYPE html>
<html lang="en">

<head>
@include('Template.head');
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
@include('Template.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
   
        <!-- Topbar -->
   @include('Template.topbar');
   <!-- End of Topbar -->

      <!-- Main Content -->
  
        {{-- <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
          </ol>
        </nav> --}}
   
      <div id="content"> 
        <div class="card card-info card-outline">
           
            <div class="card-header">
                <h3>Create New Customers</h3>
            </div>
        <div class="card-body">
         <form action="{{route('save-customers')}}" method="post">
        {{csrf_field()}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Customer Name</label>
                         <input type="text" name="name" id ='nama' class="form-control" placeholder="Customer Name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="name">Email Address</label>
                         <input type="email" name="email" id ='email' class="form-control" placeholder="Email Address">
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="DOB">DOB</label>
                        <input type="date" id ='bod' name="bod"  class="form-control" placeholder="Date of Birth">
                    </div>
                </div>
         
                <div class="col">
                    <div class="form-group">
                        <label for="name">CC Number : </label>
                         <input type="text" name="cc" id ='cc' class="form-control" placeholder="Customer Name">
                    </div>
                </div>
                
            </div>
         
            <div class="row">
                <div class="col">
            <div class="form-group">
                <label for="name">Gender : </label>
                 <input type="text" name="gender" id ='gender' class="form-control" placeholder="Customer Name">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="name">Phone Number : </label>
                 <input type="text" name="phonenumber" id ='phonenumber' class="form-control" placeholder="phonenumber">
            </div>
        </div>
    </div>

             <div class="form-group">
                <label for="Employee Address">Customers Address</label>
               <textarea name="address"  id="address" class="form-control" placeholder="Employee Address">
               </textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
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
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
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
