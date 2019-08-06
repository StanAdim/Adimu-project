@extends('layout.layout')

@section('section')

    <div class="container-fluid">

        <div class=""><h4 class="h4 text-secondary">Detail For customer {{$customer->name}}</h4></div>
       <div class="list-item-inline">
           <a href="{{route('customers.edit',['customer'=>$customer])}}" class="list-inline-item btn btn-outline-primary">Edit Detail </a>
           <a href="{{route('customers.index',['customer'=>$customer])}}" class="list-inline-item btn btn-outline-success">Done </a>

           <form action="{{route('customers.destroy',['customer'=>$customer])}}" method="post" class="list-inline-item">

               @method('DELETE')
               @csrf
               <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>

           </form>
       </div>


        <p class="lead">Name: <em>{{$customer->name}}</em></p>
        <p class="lead">Email: <em>{{$customer->email}}</em></p>
        <p class="lead">Phone: <em>{{$customer->phone}}</em></p>
        <p class="lead">Company: <em>{{$customer->company->name}}</em></p>
        <p class="lead">Item: <em>{{$customer->product}}</em></p>
        <p class="lead">Status: <em>{{$customer->status}}</em></p>


    </div>




@endsection