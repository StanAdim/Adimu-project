@extends('layouts.app')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <em class="h5 text-center">Here down are {{$user->name}} Reports <span class="badge badge-pill badge-danger"> {{count($user->userReports)}}</span></em>
                </div>
                <div class="card-body">

                    @if(count($user->userReports)>0)

                        @foreach($user->userReports as $report)
                            <div class="list-group">
                                <div class="list-group-item text-center">
                                    {{$report->report}} <br>
                                    <span class="disabled float-left">Created at:{{$report->created_at}}</span>
                                </div>

                            </div>
                        @endforeach
                        @else
                        <div class="lead text-center">No report submitted</div>
                    @endif

                </div>
            </div>
        </div>
    </div>


@endsection
