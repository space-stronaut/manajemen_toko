@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('supplier.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('supplier.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input type="text" name="nama_supplier" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="number" name="no_telp" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection