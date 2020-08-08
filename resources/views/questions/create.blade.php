@extends('adminlte.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create New Question</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action='/questions' method='POST'>
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="judul1">Judul</label>
                <input type="text" class="form-control" id="judul1" name="judul1" placeholder="Judul" required>
            </div>
        </div>    
        <div class="form-group">
            <label for="isi1">Isi</label>
            <input type="text" class="form-control" id="isi1" name="isi1" placeholder="Isi" required>
        </div>
        </div>
            <!-- /.card-body -->
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
    </form>
</div>
@endsection