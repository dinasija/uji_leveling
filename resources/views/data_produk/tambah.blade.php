@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2>Tambah Produk</h2>
            @if ($errors)
                @foreach ($errors->all() as $item)
                    <p class="text-danger"> {{ $item }}</p>
                @endforeach
            @endif

            <form class="user" action="{{ route('data_produk.aksi_tambah') }}" enctype="multipart/form-data" method="post">
                @csrf
                <p>Judul</p>
                <div class="form-group">
                    <input type="text" name="title" class="form-control form-control-user" aria-describedby="emailHelp"
                        placeholder="Masukan judul">
                </div>
                <p>Deskripsi</p>
                <div class="form-group">
                    <textarea name="description" class="form-control editor" placeholder="masukan deskripsi" cols="30" rows="3"></textarea>
                </div>
                <p>Kategori</p>
                <div class="form-group">
                    <select name="category_id" class="form-control" id="">
                        <option value="">Pilih Kategori</option>
                        @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <p>Harga</p>
                <div class="form-group">
                    <input type="number" name="price" class="form-control form-control-user" aria-describedby="emailHelp"
                        placeholder="Masukan harga">
                </div>
                <p>Diskon</p>
                <div class="form-group">
                    <input type="number" name="discount" class="form-control form-control-user" aria-describedby="emailHelp"
                        placeholder="Masukan diskon">
                </div>
                <P>File</P>
                <div class="form-group">
                    <input type="file" name="file" accept="" class="form-control form-control-user" placeholder="Masukan file">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-user ">
                        Tambah
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
