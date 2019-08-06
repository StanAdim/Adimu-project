@extends('layout.layout')
@section ('title', 'Customer form')
@section('section')
    <a href="{{url('/customers')}}" class="btn btn-link">Go to customers list</a>
    <div class="container">
        @if(session()->has('status'))
            <div class="alert alert-success">
                <h3><strong class="text-center">SUCCESSFUL SUBMITTED!!!</strong></h3>
                <span class="lead">{{session()->get('status')}}</span>
            </div>
        @endif
       @if(!session()->has('status'))
                <h3 class="h2 text-center">Customers Form</h3>
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <div class="card">

                            <div class="card-body">
                                <form action="/customers" method="POST">
                                    @include('customers.form')

                                    <div class="text-center">
                                        <button class="btn btn-primary "  type="submit" >Submit</button>
                                    </div>

                                </form>

                            </div>


                        </div>
                    </div>
                </div>

            @endif

    </div>

@endsection