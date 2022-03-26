
@extends('layout.admin')


@section('main-admin')

            <div class="body d-flex py-lg-3 py-md-2">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div
                            class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0"> Danh Sách Thư viện hình ảnh Mới Nhất</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <a href="{{route('galleries.create')}}"><button type="button" class="btn btn-dark btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i>Thêm ảnh</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Row end  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th style="width: 50px">Id</th>
                                            <th>Ảnh</th>
                                            <th>Trạng thái</th>
                                            <th>Xử lý</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($galleries))
                                            @foreach ($galleries as $item)
                                                 <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>
                                                        <a href="{{$item->g_path}}" target="_blank">
                                                            <img src="{{$item->g_path}}" height="80px" width="250px">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        @if($item->g_active == 1)
                                                            <span class="badge bg-success">Hiển thị </span>
                                                        @else
                                                            <span class="badge bg-danger">Đang ẩn ảnh</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal">
                                                                <a class="btn btn-primary btn-sm" href="{{ route('galleries.edit',$item->id) }}"><i class="icofont-edit text-success"></i></a>
                                                            </button>

                                                            <button type="button" class="btn btn-outline-secondary deleterow">
                                                                <a href="{{route('galleries.destroy',$item->id)}}" onclick="removeRow()"><i class="icofont-ui-delete text-danger"></i></a>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                    {!! $galleries->links() !!}
                </nav>

                </div>
            </div>

@endsection
