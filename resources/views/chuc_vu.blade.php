@extends('master')
@section('noi_dung')
<div class="row">
    <div class="col-5">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-header">
                Thêm Mới Chức Năng
            </div>
            <div class="card-body">
                <label class="mb-1 mt-1">Tên Chức Vụ</label>
                <input class="form-control" type="text">
                <label class="mb-1 mt-1">Tình Trạng</label>
                <select class="form-control">
                    <option value="1">
                        Hoạt Động
                    </option>
                    <option value="0">
                        Tạm Tắt
                    </option>
                </select>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-primary">Thêm Mới</button>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-header">
                Danh Sách Chức Vụ
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="align-middle text-center">#</th>
                            <th class="align-middle text-center">Tên Chức Vụ</th>
                            <th class="align-middle text-center">Tình Trạng</th>
                            <th class="align-middle text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="align-middle text-center">1</th>
                            <td class="align-middle">Đội Trưởng Đội Bảo An</td>
                            <td class="align-middle text-center">
                                <button class="btn btn-success">Hoạt động</button>
                            </td>
                            <td class="align-middle text-center">
                                <button class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#capNhatModal">Cập Nhật</button>
                                <button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#xoaModal">Xóa</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal fade" id="capNhatModal" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhật Chức Vụ</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label class="mb-1 mt-1">Tên Chức Vụ</label>
                                <input class="form-control" type="text">
                                <label class="mb-1 mt-1">Tình Trạng</label>
                                <select class="form-control">
                                    <option value="1">
                                        Hoạt Động
                                    </option>
                                    <option value="0">
                                        Tạm Tắt
                                    </option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Thoát</button>
                                <button type="button" class="btn btn-danger">Cập Nhật</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="xoaModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Chức Vụ</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div
                                    class="alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
                                    <div class="d-flex align-items-center">
                                        <div class="font-35 text-dark"><i class="bx bx-info-circle"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 text-dark">Warning</h6>
                                            <div class="text-dark">
                                                <p>Bạn có muốn xóa danh mục <b>Điện Thoại</b> này không?
                                                </p>
                                                <p>
                                                    <b>Lưu ý:</b> Điều này không thể hoàn tác!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Thoát</button>
                                <button type="button" class="btn btn-danger">Xóa</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
