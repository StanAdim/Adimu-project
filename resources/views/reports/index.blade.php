@extends('layouts.app')
@section('content')
<div class="container">
 <a href="{{route('reports.create')}}" class="btn btn-link text-danger">Create New report </a>
    @if(session()->has('deleted'))
        <div class="alert alert-danger">
            <span><strong>Alert!!!</strong></span>
            <span class="lead">{{session()->get('deleted')}}</span>
        </div>
    @endif
    @if(session()->has('NewReport'))
        <div class="alert alert-success">
            <span class="text-center"><strong>Congratulation</strong></span>
            <span class="lead"> {{session()->get('NewReport')}}</span>
        </div>
    @endif




        <em class="h5 text-center ">Reports <span class="badge badge-danger">{{count($userReports)}}</span></em>

        <div class="list-group">

            @if(count($userReports)>=1)
            @foreach($userReports as $userReport)


               <div class="list-group-item">
                    <a href="/reports/{{$userReport->id}}" class="btn btn-link"><span class="">{{$userReport->user->name}}</span></a>
                    <div class="container">
                        <h5 class="h5">Subject::{{$userReport->subject}}</h5>
                        <i class="lead text-muted text-center">Report::~{{$userReport->report}}</i>
                        <div class="">Created at:: {{$userReport->created_at->format('d/m/y ')}} </div>
                    </div>
                    <form action="/reports/{{$userReport->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>

                    </form>

                </div>

            @endforeach
            @else

                <div class="list-group-item text-center">
                    <span class="h5  text-muted"><em>No record found</em></span>
                </div>
            @endif

        </div>



</div>



    @endsection