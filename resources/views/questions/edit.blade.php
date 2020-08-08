@extends('adminlte.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Question {{$questions->id}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <!-- <form role="form" action='/questions' method='POST'> -->>
    <form role="form" action='/questions/{{$questions->id}}' method='POST'>
        @csrf
        @method('PUT')
        <div class="card-body">
        <div class="form-group">
            <label for="judul1">Judul</label>
            <input type="text" class="form-control" id="judul1" name="judul1" value="{{ old('judul'),$questions->judul}}" placehoder="judul" required>
        </div>
        <div class="form-group">
            <label for="isi1">Isi</label>
            <input type="text" class="form-control" id="isi1" name="isi1" value="{{ old('isi'),$questions->isi}}" placeholder="Isi" required>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection