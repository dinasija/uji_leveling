@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2>Tambah Kategori</h2>
            @if ($errors)
                @foreach ($errors->all() as $item)
                    <p class="text-danger"> {{ $item }}</p>
                @endforeach
            @endif

            <form class="user" action="{{ route('kategori.aksi_tambah') }}" enctype="multipart/form-data" method="post">
                @csrf
                <p>Judul</p>
                <div class="form-group">
                    <input type="text" name="title" class="form-control form-control-user" aria-describedby="emailHelp"
                        placeholder="Masukan judul">
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
