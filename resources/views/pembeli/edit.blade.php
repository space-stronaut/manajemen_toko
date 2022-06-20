@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Pembeli</label>
                        <input type="text" value="{{ $pembeli->nama_pembeli }}" name="nama_pembeli" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="radio" name="jk" value="L" id="" {{ $pembeli->jk == 'L' ? 'checked' : '' }}>L
                        <input type="radio" name="jk" value="P" id="" {{ $pembeli->jk == 'P' ? 'checked' : '' }}>P
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="number" name="no_telp" id="" class="form-control" value="{{ $pembeli->no_telp }}">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="" class="form-control" value="{{ $pembeli->alamat }}">
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection