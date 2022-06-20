@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('barang.create') }}" class="btn btn-primary">+</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Stok Barang</th>
                            <th>Harga Satuan</th>
                            <th>Nama Supplier</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($barangs as $item)
                            <tr>
                                <th>
                                    {{$loop->iteration}}
                                </th>
                                <td>
                                    {{$item->nama_barang}}
                                </td>
                                <td>
                                    {{$item->stok_barang}}
                                </td>
                                <td>
                                    {{$item->harga_barang}}
                                </td>
                                <td>
                                    {{$item->supplier->nama_supplier}}
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('barang.destroy', $item->id) }}" method="post">
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