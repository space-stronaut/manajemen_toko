@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('supplier.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('supplier.update', $supplier->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input type="text" value="{{ $supplier->nama_supplier }}" name="nama_supplier" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="number" name="no_telp" id="" class="form-control" value="{{ $supplier->no_telp }}">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="" class="form-control" value="{{ $supplier->alamat }}">
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection