@extends('master')
@section('noi_dung')
<div class="row" id="app">
    <div class="container ">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">

                <div class="col mx-auto">
                    <div class="mb-4 text-center">
                        <img src="https://dzfullstack.com/assets/images/logo-img.png" width="180" alt="">
                    </div>
                    <div class="card">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Đăng Nhập</h3>
                                    </div>

                                    <div class="form-body">
                                        <form class="row g-3">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmailAddress" placeholder="Nhập Email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Mật Khẩu</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="inputChoosePassword"
                                                        value="12345678" placeholder=""> <a href="javascript:;"
                                                        class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                {{-- <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                </div> --}}
                                            </div>
                                            {{-- <div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Forgot Password ?</a>
                                            </div> --}}
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Đăng Nhập</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-3">

            </div>

        </div>
    </div>
</div>
@endsection
