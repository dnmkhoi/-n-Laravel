@extends('backend.layout.master')

@section('title')
Danh sách Loại
@endsection

@section('feature-title')
Danh sách Loại   
@endsection

@section('content')
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Import Dữ liệu từ file excel
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Nhập dữ liệu loại</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Xuất Dữ liệu loại</a>
            </form>
        </div>
    </div>
</div> 
@endsection