@extends('layouts.master')

@section('content') 
<div class="container-fluid">

                    <div class="container">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
                            </div>
                            <div class="card-body">
                                <a href="{{route('data_produk.tambah')}}" class="btn btn-primary mb-2">Tambah Produk</a>
                                <div class="table-responsive">
                                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Harga</th>
                                                <th>Diskon</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no=1;
                                            @endphp
                                        @foreach ($products as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->discount}}</td>
                                            <td><img src="{{asset($item->file)}}" width="100" alt=""></td>
                                            <td>
                                                <a href="{{route('data_produk.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                                                <form action="{{route('data_produk.aksi_hapus',$item->id)}}" method="post">
                                                @csrf
                                                <button class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
@endsection