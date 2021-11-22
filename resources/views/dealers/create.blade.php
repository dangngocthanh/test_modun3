@extends('welcome')
@section('content')
    <div class="container mt-5">

        <strong>Thêm mới đại lý phân phối</strong>

        <form class="mt-5" action="{{ route('store') }} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Mã số đại lý</label>
                    <input type="text" class="form-control" name="id" id="inputEmail4">
                    @error('id')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <label for="inputPassword4">Tên đại lý</label>
                    <input type="text" class="form-control" name="name" id="inputPassword4">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Địa chỉ</label>
                    <textarea class="form-control col-md-12" style="width: 550px" name="address"
                              id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('address')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Điện thoại</label>
                    <input type="text" class="form-control" name="phone_number" id="inputEmail4">
                    @error('phone_number')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Tên người quản lý</label>
                    <input type="text" class="form-control" name="manager_name" id="inputPassword4">
                    @error('manager_name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="text" class="form-control" name="email" id="inputEmail4">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Trạng thái</label>
                    <select id="inputState" name="status" class="form-control">
                        <option selected>Hoạt động</option>
                        <option>Ngừng hoạt động</option>
                    </select>
                    @error('status')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2"
                     viewBox="0 0 16 16">
                    <path
                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                </svg>
                Thêm
            </button>
        </form>
    </div>
@endsection
