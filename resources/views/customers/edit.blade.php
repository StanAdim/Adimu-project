

@extends('layout.layout')
@section ('title', 'edit product')
@section('section')

    <h3 class="h3">Edit your Info {{$customer->name}}</h3>
    <a href="{{route('customers.show',['customer'=>$customer])}}" class="">Go back</a>
    <div class="card">

        <div class="card-body">
            <form action="{{route('customers.update',['customer'=>$customer])}}" method="POST">
                @method('PATCH')
                @include('customers.form')

                <div class="text-center">
                    <button class="btn btn-primary "  type="submit" >Save</button>
                </div>

            </form>
        </div>
    </div>

@endsection



