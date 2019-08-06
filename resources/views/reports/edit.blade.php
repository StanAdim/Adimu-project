


@extends('layouts.app')
@section('content')

    <div class="container">
        <h4 class="h3">Edit your reports {{$report->User->name}}</h4>
        <form action="{{route('reports.update',['report'=>$report])}}"  class="" method="POST">
            @method('PATCH')

            @include('reports.form')
            <div class="text-center">
                <button role="button" class="btn btn-primary" type="submit">Save</button>
            </div>

        </form>
    </div>


@endsection


