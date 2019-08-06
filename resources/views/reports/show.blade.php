@extends('layouts.app')
@section('content')
    <div class="container">

        <a href="{{route('reports.create')}}" class="btn btn-link text-danger">Create New report </a>

        <em class="h5 text-center ">Reported Details </em>

       <div>
           <a href="{{route('reports.edit',['report'=>$report])}}" class="btn btn-link ">Edit Report </a>
       </div>
        <p class="lead"><em>Name:</em>{{$report->user->name}}</p>
        <p class="lead"><em>Subject:</em>{{$report->subject}}</p>
        <p class="lead"><em>Report:</em>{{$report->report}}</p>



    </div>



@endsection