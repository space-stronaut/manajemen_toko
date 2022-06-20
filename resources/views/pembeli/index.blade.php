@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('pembeli.create') }}" class="btn btn-primary">+</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pembeli</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telpon</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pembelis as $item)
                            <tr>
                                <th>
                                    {{$loop->iteration}}
                                </th>
                                <td>
                                    {{$item->nama_pembeli}}
                                </td>
                                <td>
                                    {{$item->jk}}
                                </td>
                                <td>
                                    {{$item->no_telp}}
                                </td>
                                <td>
                                    {{$item->alamat}}
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('pembeli.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('pembeli.destroy', $item->id) }}" method="post">
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