@extends('master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="row">
                        <div class="col-1">
                            <div class="chat-user-online mt-2">
                                <img src="https://webcoban.vn/image/face.png" width="45" height="45" class="rounded-circle"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="d-grid mt-3">
                                <button class="btn btn-outline-dark radius-15" data-bs-toggle="modal" data-bs-target="#capNhatModal">Bạn nghĩ gì thế?</button>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="capNhatModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tạo bài viết</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-1">
                                        <div class="chat-user-online mt-2">
                                            <img src="https://webcoban.vn/image/face.png" width="45" height="45" class="rounded-circle"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-11">
                                        <select class="form-select mt-3 mb-5" aria-label="Default select example">
                                            <option selected>Chọn tài khoản</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Bạn nghĩ gì thế?"></textarea>
                                      </div>

                                    <div class="col">
                                        <label for="">Hình Ảnh</label>
                                        <input type="text" class="form-control mt-2" placeholder="Nhập link ảnh">
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer d-grid">
                                <div class="row">
                                    <div class="col-12"><button type="button" class="btn btn-secondary d-grid mt-3" data-bs-dismiss="modal">Đăng</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <hr>

                    <div class="row">
                        <div class="col-5">
                            <p><i class="fa-solid fa-video" style="color: #f50000;"></i> Video trực tiếp</p>
                        </div>
                        <div class="col-5">
                            <p><i class="fa-solid fa-images" style="color: #10f000;"></i> Ảnh/Video</p>
                        </div>
                        <div class="col-2">
                            <p><i class="fa-solid fa-face-laugh-squint" style="color: #ffbb00;"></i> Cảm xúc/Hoạt động</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
