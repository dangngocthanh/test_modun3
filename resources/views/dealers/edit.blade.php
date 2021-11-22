@extends('welcome')
@section('content')
    <div class="container mt-5">

        <strong>Cập nhật đại lý phân phối</strong>

        <form class="mt-5" action="{{ route('update') }} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Mã số đại lý</label>
                    <input type="text" class="form-control" value="{{ $dealer->id }}" id="inputEmail4" disabled>
                    <input type="hidden" class="form-control" value="{{ $dealer->id }}" name="id" id="inputEmail4" >

                    <label for="inputPassword4">Tên đại lý</label>
                    <input type="text" class="form-control" value="{{ $dealer->name }}" name="name" id="inputPassword4">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Địa chỉ</label>
                    <textarea class="form-control col-md-12" style="width: 550px" name="address"
                              id="exampleFormControlTextarea1" rows="3">{{ $dealer->address }}</textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Điện thoại</label>
                    <input type="text" class="form-control" value="{{ $dealer->phone_number }}" name="phone_number" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Tên người quản lý</label>
                    <input type="text" class="form-control" value="{{ $dealer->manager_name }}" name="manager_name" id="inputPassword4">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="text" class="form-control" value="{{ $dealer->email }}" name="email" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Trạng thái</label>
                    <select id="inputState" name="status" class="form-control">
                        <option selected>Hoạt động</option>
                        <option>Ngừng hoạt động</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2"
                     viewBox="0 0 16 16">
                    <path
                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                </svg>
                Cập nhật
            </button>
        </form>
    </div>
@endsection
