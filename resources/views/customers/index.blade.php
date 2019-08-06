@extends('layouts.app')

@section('content')

<div class="">

        <div class=""><h4 class="h4 text-secondary">Detail provided</h4></div>
        <a href="{{url('customers/create')}}" class="btn btn-link text-danger">Add customer</a>



               <div class="row">
                   <div class="col-md-2">
                       <span class="h5"><em>Customer List</em></span>
                       <ul class="list-unstyled">
                           @foreach($customers as $customer)
                               <li><a href="{{route('customers.show',['customer'=>$customer])}}" class="btn btn-link text-dark">{{$customer->name}}</a></li>
                           @endforeach
                       </ul>
                   </div>{{--col no.1--}}
                   <div class="col-md-10">
                       <div class="h3"> Customer List</div>
                       <table class="table table-bordered   bg-info">
                           <thead class="bg-dark text-white">

                           <th>Name</th>
                           <th>Contacts</th>
                           <th>Status</th>
                           <th>Product choosen</th>
                           <th>Company</th>
                           <th>Action On Order</th>
                           </thead>
                           <tbody>
                           @foreach($customers as $customer)
                               <tr>

                                   <td>{{$customer->name}}</td>
                                   <td>{{$customer-> phone}}|{{$customer-> email}}</td>
                                   <td>{{$customer-> status}}</td>
                                   <td>{{$customer-> product}}</td>
                                   <td>{{$customer->company->name}}</td>
                                   <td class="btn-group">

                                       <form action="{{route('customers.destroy',['customer'=>$customer])}}" method="POST" >
                                           <a href="{{route('customers.show',['customer'=>$customer])}}" class=" btn btn-success btn-sm" >Show</a>
                                           <a href="{{route('customers.edit',['customer'=>$customer])}}" class=" btn btn-primary btn-sm" >Edit</a>
                                           @csrf
                                           @method('DELETE')
                                           <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                       </form>
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>






 </div>




@endsection