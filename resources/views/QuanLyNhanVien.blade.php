@include('header')
        <!-- Sidebar End -->


        <!-- Content Start -->
        @include('nav')
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">1</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Revenue</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Sex</th>
                                            <th scope="col">Birthday</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            @foreach($nhanvien as $nv)
                                            <tr>
                                                <th scope="row">{{$nv->nvid}}</th>
                                                <td>{{$nv->tennv}}</td>
                                                <td>{{$nv->email}}</td>
                                                <td>{{$nv->doanhthu}}</td>
                                                <td>{{$nv->diachi}}</td>
                                                <td>
                                                    <?php
                                                    if($nv->gioitinh==0)
                                                {
                                                    echo 'Nữ';
                                                }    else{
                                                    echo 'Nam';
                                                }
                                                
                                                ?>

                                                
                                                </td>
                                                
              
                                                <td>{{$nv->ngaysinh}}</td>
                                                <td><a class="btn btn-sm btn-primary" href="">Xem</a></td>
                                                <td><a class="btn btn-sm btn-primary" href="">Xoá</a></td>
                                                </tr>
                                            @endforeach
                                            
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
@include('footer')