@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('transaksi.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Barang</label>
                        <select name="barang_id" id="" class="form-control">
                            <option value="">Choose...</option>
                            @foreach ($barangs as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pembeli</label>
                        <select name="pembeli_id" id="" class="form-control">
                            <option value="">Choose...</option>
                            @foreach ($pembelis as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_pembeli }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Beli</label>
                        <input type="number" name="jumlah_beli" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" id="" class="form-control">
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