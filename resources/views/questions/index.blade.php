@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">  
            <div class="card-header">
                <h3 class="card-title">Questions Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                <!-- <a class="btn btn-primary" href="/questions/create"> Create New Question </a>  -->
                <a class="btn btn-primary" href="{{ route('questions.create') }}"> Create New Question </a>
                <table class="table table-bordered">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Judul</th>
                            <th>I s i</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($questions as $key =>$question)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td> {{ $question->judul }}</td>
                                <td> {{ $question->isi }}</td>
                                <td style="display:flex";> 
                                    <a href="{{ route('questions.show',['question'=>$question->id]) }}" class="btn btn-info btn-sm"     >Show</a>
                                    <a href="{{ route('questions.edit',['question'=>$question->id]) }}" class="btn btn-default btn-sm"  >Edit</a>
                                    <!--<form action="/questions/{{$question->id}}" method="post"> -->>
                                    <form action="{{ route('questions.destroy',['question'=>$question->id]) }}" method="post">                                    @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" align="center">No Post</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
    <!--    </div>
        </div> -->
    </div>
@endsection