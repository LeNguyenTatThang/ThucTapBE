@include('header')
@include('nav')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4"><button type="submit" class="btn py-3 w-100 mb-4"><a href="addProduct.blade.php">Thêm BDS</a></button>
                            <h6 class="mb-4">Responsive Table</h6>
                            
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">1</th>
                                            <th scope="col">Picture</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Acreage</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Distric</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            @foreach($batdongsan as $bds)
                                            <tr>
                                                <th scope="row">{{$bds->bdsid}}</th>
                                                <td>{{$bds->hinhanh}}</td>
                                                <td>{{$bds->loaiid}}</td>
                                                <td>{{$bds->dientich}}</td>
                                                <td>{{$bds->donggia}}</td>
                                                
                                                <td>
                                                    <?php
                                                    if($bds->tinhtrang==0)
                                                {
                                                    echo 'Không hoạt động';
                                                }    else{
                                                    echo 'Đang hoạt động';
                                                }
                                                ?>
                                                </td>
                                                <td>{{$bds->quan}}</td>
                                                <td>{{$bds->thanhpho}}</td>
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

@include('footer')