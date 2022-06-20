@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('transaksi.create') }}" class="btn btn-primary">+</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Nama Pembeli</th>
                            <th>Jumlah Beli</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksis as $item)
                            <tr>
                                <th>
                                    {{$loop->iteration}}
                                </th>
                                <td>
                                    {{$item->barang->nama_barang}}
                                </td>
                                <td>
                                    {{$item->pembeli->nama_pembeli}}
                                </td>
                                <td>
                                    {{$item->jumlah_beli}}
                                </td>
                                <td>
                                    {{$item->tanggal}}
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('transaksi.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                            <button class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection