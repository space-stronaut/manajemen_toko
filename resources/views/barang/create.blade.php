@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Stok Barang</label>
                        <input type="number" name="stok_barang" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Barang</label>
                        <input type="number" name="harga_barang" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Supplier</label>
                        <select name="supplier_id" id="" class="form-control">
                            <option value="">Choose...</option>
                            @foreach ($suppliers as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_supplier }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="" class="form-control">
                    </div> --}}
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection