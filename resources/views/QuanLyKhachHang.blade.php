@include('header')
        <!-- Sidebar End -->

        @include('nav')
        <!-- Content Start -->
        
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
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Sex</th>
                                            <th scope="col">ID Card</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            @foreach($khachhang as $kh)
                                            <tr>
                                                <th scope="row">{{$kh->khid}}</th>
                                                <td>{{$kh->hoten}}</td>
                                                <td>{{$kh->diachitt}}</td>
                                                <td>{{$kh->sdt}}</td>
                                                <td>{{$kh->email}}</td>
                                                <td>
                                                    <?php
                                                    if($kh->gioitinh==0)
                                                {
                                                    echo 'Nữ';
                                                }    else{
                                                    echo 'Nam';
                                                }
                                                ?>
                                                </td>
                                                <td>{{$kh->cmnd}}</td>
                                                <td><a class="btn btn-sm btn-primary" href="">Xem</a></td>
                                                <td><a class="btn btn-sm btn-primary" href="">Sửa</a></td>
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

@include('footer')