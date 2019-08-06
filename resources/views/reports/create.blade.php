@extends('layouts.app')
@section('content')

<div class="container">


            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('reports.index')}}" class="btn btn-link text-danger">Check the reports</a>
                           <span class="h4">Report Now</span>
                        </div>
                        <div class="card-body">

                            <form action="{{route('reports.store')}}"  class="" method="post">

                                @include('reports.form')
                                <div class="text-center">
                                    <button role="button" class="btn btn-primary" type="submit">Send</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

</div>


@endsection

