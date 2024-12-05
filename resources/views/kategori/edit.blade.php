@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2>Edit Kategori</h2>
            @if ($errors)
                @foreach ($errors->all() as $item)
                    <p class="text-danger"> {{ $item }}</p>
                @endforeach
            @endif

            <form class="user" action="{{ route('kategori.aksi_edit',$category->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                <p>Judul</p>
                <div class="form-group">
                    <input type="text" name="title" value="{{$category->title}}" class="form-control form-control-user" aria-describedby="emailHelp"
                        placeholder="Masukan judul">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-user ">
                        Edit
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
