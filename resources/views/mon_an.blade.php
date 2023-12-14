@extends('master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-12">
            <div class="card  shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-header mt-2">
                    <div class="row">
                        <div class="col-6">
                            <h5>Danh Sách Món Ăn</h5>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-outline-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#themmoimodal">Thêm mới</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center align-middle">
                                <th>#</th>
                                <th>Tên Món Ăn</th>
                                <th>Slug Món Ăn</th>
                                <th>Hình Ảnh</th>
                                <th>Giá Bán</th>
                                <th>Danh Mục</th>
                                <th>Tình trạng</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(v, k) in list_mon_an">
                                <th class="align-middle text-nowrap text-center"> @{{ k + 1 }} </th>
                                <td class="align-middle text-nowrap"> @{{ v.ten_mon_an }} </td>
                                <td class="align-middle text-nowrap"> @{{ v.slug_mon_an }} </td>
                                <td class="align-middle text-nowrap text-center">
                                    <img v-bind:src="v.hinh_anh" alt="Hình ảnh món ăn" style="height: 100px; width: 100px">
                                </td>
                                <td class="align-middle text-nowrap"> @{{ v.gia_ban }} </td>
                                <td class="align-middle text-nowrap"> @{{ v.tinh_trang }} </td>
                                <td class="align-middle text-nowrap text-center">
                                    <button v-if="v.tinh_trang == 1" class="btn btn-success">Hoạt Động</button>
                                    <button v-else class="btn btn-warning">Tạm Dừng</button>
                                </td>
                                <td class="align-middle text-nowrap text-center">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#capNhatmodal">Cập
                                        Nhật</button>
                                    <button class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#xoaModal">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="themmoimodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Tên Món Ăn</label>
                                <input type="text" class="form-control" placeholder="Nhập tên món ăn">
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Slug Món Ăn</label>
                                <input type="text" class="form-control" placeholder="Nhập slug món ăn">
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Hình Ảnh</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Giá Bán</label>
                                <input type="text" class="form-control" placeholder="Nhập giá bán">
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Danh Mục</label>
                                <select class="form-select">
                                    <option value="">--Chọn Danh Mục--</option>
                                </select>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Tình trạng</label>
                                <select class="form-select">
                                    <option value="0">Tạm Dừng</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button data-bs-dismiss="modal" type="button" class="btn btn-primary">Xác
                            nhận</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="capNhatmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhật Nhân Viên</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Họ Và Tên</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Chức Vụ</label>
                                <select class="form-select">
                                    <option value="">Quản Lý</option>
                                </select>
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label">Tình trạng</label>
                                <select class="form-select">
                                    <option value="0">Tạm tắt</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button data-bs-dismiss="modal" type="button" class="btn btn-primary">Xác
                            nhận</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="xoaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Nhân Viên</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                list_mon_an: [],
                create_mon_an :   {},
            },
            created() {
                this.loadDataMonAn();
            },
            methods: {
                loadDataMonAn() {
                    axios
                        .get('http://127.0.0.1:8000/api/admin/mon-an/lay-du-lieu')
                        .then((res) => {
                            this.list_mon_an = res.data.mon_an;
                        });
                },

                createMonAn() {
                    console.log(this.create_mon_an);
                    axios
                        .post('http://127.0.0.1:8000/api/admin/mon-an/tao-mon-an', this.create_mon_an)
                        .then((res) => {
                            if (res.data.status == true) {
                                alert(res.data.message);
                                this.loadDataMonAn();
                            }
                        });
                },
            },
        });
    </script>
@endsection
