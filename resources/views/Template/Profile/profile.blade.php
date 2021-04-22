
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css' rel='stylesheet'>
                                <link href="css/profile.css" rel="stylesheet">
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h2>{{auth()->user()->name}}</h2>
                                @if (auth()->user()->level=="1")
                                      <p>admin</p>
                                @endif
                                @if (auth()->user()->level=="2")
                                       <p>Employee</p>
                                @endif
                                @if (auth()->user()->level=="3")
                                   <p>Customer</p>
                                  @endif
                              
                                 <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h5 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Username</p>
                                        <h5 class="text-muted f-w-400"> <h5 class="text-muted f-w-400">{{auth()->user()->name}}</h5></h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h5 class="text-muted f-w-400">{{auth()->user()->email}}</h5>
                                    </div>       
                                </div>
                                <h5 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Authorisation</h5>
                                <div class="row">
                                    <div class="col-sm-8">
                                        @if (auth()->user()->level=="1")
                                            <p class="m-b-10 f-w-600">Dashboard</p>
                                             <p class="m-b-10 f-w-600">Pegawai</p>
                                             <p class="m-b-10 f-w-600">Customer</p>
                                             <p class="m-b-10 f-w-600">Position</p>
                                             <p class="m-b-10 f-w-600">Profile</p>
                                        @endif
                                        @if (auth()->user()->level=="2")
                                        <p class="m-b-10 f-w-600">Dashboard</p>
                                        <p class="m-b-10 f-w-600">Customer</p>
                                        <p class="m-b-10 f-w-600">Profile</p>
                                   @endif
                                   @if (auth()->user()->level=="3")
                                          <p class="m-b-10 f-w-600">Profile</p>
                                   @endif()
                                    </div>
                                
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                            </body>
                        </html>