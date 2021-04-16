
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
      <div id="content">

     <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{route('create-pegawai')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
        </div>
     </div>
<div class="card-body">
    <table class="table table-bordered">
        <tr>
          <th>No</th>
            <th>Employee Name</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Position</th>
            <th>Address</th>
        </tr>
        @foreach ($dataEmployee as $index=>$item)
        <tr>
          <th>{{$index+1}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->dob}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->position}}</td>
          <td>{{$item->address}}</td>
          <td>
            <a href="{{url('edit-position',$item->id)}}">
              <i class="fas fa-edit"></i>
            </a>
            |
            <a href="{{url('delete-position',$item->id)}}">
              <i class="fas fa-trash-alt" style="color:red"></i>
            </a>
          </td>
      </tr>
        @endforeach
    </table>
      </div>
      <div class="card-footer">
        {{$dataEmployee->links()}}
        
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
@include('sweetalert::alert')
</body>

</html>
