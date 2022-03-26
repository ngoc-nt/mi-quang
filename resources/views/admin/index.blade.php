@extends('layout.admin')


@section('main-admin')
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Thống kê</h6>
                </div>
                <div class="card-body" style="position: relative;">
                    <div
                        class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 row-cols-xxl-4">
                        <div class="col">
                            <div class="card bg-primary">
                                <div class="card-body text-white d-flex align-items-center">
                                    <i class="icofont-binary fs-3"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <h6 class="mb-0">Tổng số hóa đơn</h6>
                                        <span class="text-white">{{$listOrders}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-primary">
                                <div class="card-body text-white d-flex align-items-center">
                                    <i class="icofont-spoon-and-fork fs-3"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <h6 class="mb-0">Tổng số món </h6>
                                        <span class="text-white">{{$listProducts}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-primary">
                                <div class="card-body text-white d-flex align-items-center">
                                    <i class="icofont-livejournal fs-3"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <h6 class="mb-0">Tổng số bài viết</h6>
                                        <span class="text-white">{{$listPosts}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-primary">
                                <div class="card-body text-white d-flex align-items-center">
                                    <i class="icofont-users fs-3"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <h6 class="mb-0">Tổng số người dùng</h6>
                                        <span class="text-white">{{$listUsers}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Thông tin mới</h3>
                    </div>
                </div>
            </div>

            <div class="row clearfix  g-2">
                <div class="col-lg-12 col-md-12 flex-column">
                    <div class="row g-2 row-deck">

                        <div class="col-md-12 col-lg-5 col-xl-6 col-xxl-6">
                            <div class="card">
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <div class="lesson_name">
                                        <div class="project-block bg-lightgreen">
                                            <i class="icofont-ui-messaging"></i>
                                        </div>
                                        <h6 class="project_name fw-bold"> Thông tin liên hệ mới nhất </h6>
                                    </div>
                                </div>

                                <div class="card-body mem-list">
                                    <div class="progress_task">
                                        <div class="fade show alert-light">
                                            <div class="toast-header  bg-primary text-light">
                                                <img class="avatar rounded-circle"
                                                     src="{{asset('admin/teamplate/admin/assets/images/xs/avatar4.jpg')}}" alt="">
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="d-flex justify-content-between mb-0">
                                                            <span class="badge alert-primary text-end">
                                                                Đào Nhật Trung
                                                            </span>
                                                    </h6>
                                                    <a href="mailto:trungdao9a1@gmail.com">
                                                        <i class="icofont-email"></i>
                                                        <span class="ms-1">trungdao9a1@gmail.com</span>
                                                        <i class="icofont-reply"></i>
                                                    </a>
                                                    <h2>
                                                        <a href="Tel: +375307021">
                                                            <i class="icofont-ui-dial-phone"></i>
                                                            <span class="ms-1">0375307021</span>
                                                            <i class="icofont-reply"></i>
                                                        </a>
                                                    </h2>
                                                    <div class="text-end">
                                                        <i class="icofont-clock-time"></i>
                                                        <span class="ms-1">
                                                                2022-01-10 20:29:21
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="toast-body alert-info">
                                                <p class="py-2 mb-0 ">
                                                    <i class="icofont-ui-text-chat"></i>
                                                    5230
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tikit-info row g-3 align-items-center">
                                            <div class="col-sm">
                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                    <li>
                                                        <div class="d-flex align-items-center ">
                                                            <div role="alert" class="text-success">

                                                                <h5 class="alert-link">
                                                                    <i class="icofont-checked"></i>
                                                                    <span class="ms-1">Đã được xử lý.</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="fade show alert-light">
                                            <div class="toast-header  bg-primary text-light">
                                                <img class="avatar rounded-circle"
                                                     src="{{asset('admin/teamplate/admin/assets/images/xs/avatar4.jpg')}}" alt="">
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="d-flex justify-content-between mb-0">
                                                            <span class="badge alert-primary text-end"> Châu Tinh
                                                            </span>
                                                    </h6>
                                                    <a href="mailto:danchoi@gmail.com">
                                                        <i class="icofont-email"></i>
                                                        <span class="ms-1">danchoi@gmail.com</span>
                                                        <i class="icofont-reply"></i>
                                                    </a>
                                                    <h2>
                                                        <a href="Tel: +559549484">
                                                            <i class="icofont-ui-dial-phone"></i>
                                                            <span class="ms-1">0559549484</span>
                                                            <i class="icofont-reply"></i>
                                                        </a>
                                                    </h2>
                                                    <div class="text-end">
                                                        <i class="icofont-clock-time"></i>
                                                        <span class="ms-1">
                                                                2021-12-24 01:49:53
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="toast-body alert-info">
                                                <p class="py-2 mb-0 ">
                                                    <i class="icofont-ui-text-chat"></i>
                                                    Xin chào cửa hàng tôi có chuyện muốn nói :))
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tikit-info row g-3 align-items-center">
                                            <div class="col-sm">
                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                    <li>
                                                        <div class="d-flex align-items-center ">
                                                            <div role="alert" class="text-success">

                                                                <h5 class="alert-link">
                                                                    <i class="icofont-checked"></i>
                                                                    <span class="ms-1">Đã được xử
                                                                                lý.</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="fade show alert-light">
                                            <div class="toast-header  bg-primary text-light">
                                                <img class="avatar rounded-circle"
                                                     src="teamplate/admin/assets/images/xs/avatar4.jpg" alt="">
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="d-flex justify-content-between mb-0">
                                                            <span class="badge alert-primary text-end">
                                                                xxh oanh xxi
                                                            </span>
                                                    </h6>
                                                    <a href="mailto:xxh.oanhxxi@gmail.com">
                                                        <i class="icofont-email"></i>
                                                        <span class="ms-1">xxh.oanhxxi@gmail.com</span>
                                                        <i class="icofont-reply"></i>
                                                    </a>
                                                    <h2>
                                                        <a href="Tel: +314402151">
                                                            <i class="icofont-ui-dial-phone"></i>
                                                            <span class="ms-1">0314402151</span>
                                                            <i class="icofont-reply"></i>
                                                        </a>
                                                    </h2>
                                                    <div class="text-end">
                                                        <i class="icofont-clock-time"></i>
                                                        <span class="ms-1">
                                                                2021-12-22 05:13:23
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="toast-body alert-info">
                                                <p class="py-2 mb-0 ">
                                                    <i class="icofont-ui-text-chat"></i>
                                                    Xử lý đơn hàng nhanh. Lầm t2 đặt hàng ở shop
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tikit-info row g-3 align-items-center">
                                            <div class="col-sm">
                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                    <li>
                                                        <div class="d-flex align-items-center ">
                                                            <div role="alert" class="text-success">

                                                                <h5 class="alert-link">
                                                                    <i class="icofont-checked"></i>
                                                                    <span class="ms-1">Đã được xử
                                                                                lý.</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br>
                                    </div>

                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-5 col-xl-6 col-xxl-6">
                            <div class="card">
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <div class="lesson_name">
                                        <div class="project-block bg-lightgreen">
                                            <i class="icofont-dining-table"></i>
                                        </div>
                                        <h6 class="project_name fw-bold"> Thông tin đặt bàn mới nhất </h6>
                                    </div>
                                </div>
                                <div class="card-body mem-list">
                                    <div class="fade show alert-light">
                                        <div class="toast-header bg-primary text-light">
                                            <img class="avatar rounded-circle"
                                                 src="teamplate/admin/assets/images/xs/avatar4.jpg" alt="">
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="d-flex justify-content-between mb-0">
                                                        <span class="badge alert-primary text-end">
                                                            Đào Nhật Trung
                                                        </span>
                                                </h6>
                                                <a href="mailto:trungdao9a1@gmail.com">
                                                    <i class="icofont-email"></i>
                                                    <span class="ms-1">trungdao9a1@gmail.com</span>
                                                    <a href=""><i class="icofont-reply"></i></a>
                                                </a>

                                                <h2>
                                                    <a href="Tel: +375307021">
                                                        <i class="icofont-ui-dial-phone"></i>
                                                        <span class="ms-1">0375307021</span>
                                                        <i class="icofont-reply"></i>
                                                    </a>
                                                </h2>
                                                <div class="text-end">
                                                    <i class="icofont-clock-time"></i>
                                                    <span class="ms-1">
                                                            2022-01-10 20:28:29
                                                        </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="toast-body alert-info">
                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-ui-text-chat"></i>
                                                bàn rộng
                                            </p>
                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-people"></i>
                                                4 Người
                                            </p>

                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-stopwatch"></i>
                                                01/19/20222022 - 10.30
                                            </p>
                                        </div>

                                    </div>
                                    <div class="tikit-info row g-3 align-items-center">
                                        <div class="col-sm">
                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div role="alert" class="text-success">
                                                            <h5 class="alert-link">
                                                                <i class="icofont-checked"></i>
                                                                <span class="ms-1">Đã được xử
                                                                            lý.</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="fade show alert-light">
                                        <div class="toast-header bg-primary text-light">
                                            <img class="avatar rounded-circle"
                                                 src="teamplate/admin/assets/images/xs/avatar4.jpg" alt="">
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="d-flex justify-content-between mb-0">
                                                        <span class="badge alert-primary text-end">
                                                            Nguyễn Văn Tèo
                                                        </span>
                                                </h6>
                                                <a href="mailto:teoem@gmail.com">
                                                    <i class="icofont-email"></i>
                                                    <span class="ms-1">teoem@gmail.com</span>
                                                    <a href=""><i class="icofont-reply"></i></a>
                                                </a>

                                                <h2>
                                                    <a href="Tel: +982655144">
                                                        <i class="icofont-ui-dial-phone"></i>
                                                        <span class="ms-1">0982655144</span>
                                                        <i class="icofont-reply"></i>
                                                    </a>
                                                </h2>
                                                <div class="text-end">
                                                    <i class="icofont-clock-time"></i>
                                                    <span class="ms-1">
                                                            2021-12-24 05:43:44
                                                        </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="toast-body alert-info">
                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-ui-text-chat"></i>
                                                Cho tôi đặt bàn ở nơi có ảnh sáng tốt. Cảm ơn!
                                            </p>
                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-people"></i>
                                                4 Người
                                            </p>

                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-stopwatch"></i>
                                                12/24/20212021 - 20.00
                                            </p>
                                        </div>

                                    </div>
                                    <div class="tikit-info row g-3 align-items-center">
                                        <div class="col-sm">
                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div role="alert" class="text-success">
                                                            <h5 class="alert-link">
                                                                <i class="icofont-checked"></i>
                                                                <span class="ms-1">Đã được xử
                                                                            lý.</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="fade show alert-light">
                                        <div class="toast-header bg-primary text-light">
                                            <img class="avatar rounded-circle"
                                                 src="teamplate/admin/assets/images/xs/avatar4.jpg" alt="">
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="d-flex justify-content-between mb-0">
                                                        <span class="badge alert-primary text-end">
                                                            Trung Dao
                                                        </span>
                                                </h6>
                                                <a href="mailto:dntrung.20it6@vku.udn.vn">
                                                    <i class="icofont-email"></i>
                                                    <span class="ms-1">dntrung.20it6@vku.udn.vn</span>
                                                    <a href=""><i class="icofont-reply"></i></a>
                                                </a>

                                                <h2>
                                                    <a href="Tel: +2147483647">
                                                        <i class="icofont-ui-dial-phone"></i>
                                                        <span class="ms-1">02147483647</span>
                                                        <i class="icofont-reply"></i>
                                                    </a>
                                                </h2>
                                                <div class="text-end">
                                                    <i class="icofont-clock-time"></i>
                                                    <span class="ms-1">
                                                            2021-12-17 09:39:46
                                                        </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="toast-body alert-info">
                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-ui-text-chat"></i>
                                                á
                                            </p>
                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-people"></i>
                                                2 Người
                                            </p>

                                            <p class="py-2 mb-0 ">
                                                <i class="icofont-stopwatch"></i>
                                                12/24/20212021 - 19.00
                                            </p>
                                        </div>

                                    </div>
                                    <div class="tikit-info row g-3 align-items-center">
                                        <div class="col-sm">
                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div role="alert" class="text-success">
                                                            <h5 class="alert-link">
                                                                <i class="icofont-checked"></i>
                                                                <span class="ms-1">Đã được xử
                                                                            lý.</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br><br>
                                    <!-- timeline item end  -->
                                </div>
                            </div> <!-- .card: My Timeline -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
    </div>
@endsection




