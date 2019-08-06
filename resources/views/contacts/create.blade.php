@extends('layout.layout')
@section('title','contact us')
@section('section')


    <div class="container ">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">Reach us as fast as You Can</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
        @if(session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-md-6 alert alert-success text-center">
                    <em class="lead">{{session()->get('message')}}</em>
                </div>
            </div>

            @endif
       <div class="row justify-content-center">
           <div class="col-md-5">
               <form action="{{route('contact.store')}}" method="post">
                   @csrf
                   <div class="form-group">
                       <label for="name">Name</label>
                       <input type="text" class="form-control" name="name" placeholder="John Doe" value="{{old('name')}}">
                       @if(count($errors)>0)
                           <span class="text-danger"> {{$errors->first('name')}}</span>
                       @endif
                   </div>
                   <div class="form-group">
                       <label for="email">E-Mail</label>
                       <input type="email" class="form-control" name="email" placeholder="email@email.com" value="{{old('email')}}">
                       @if(count($errors)>0)
                           <span class="text-danger"> {{$errors->first('email')}}</span>
                       @endif
                   </div>
                   <div class="form-group">
                       <label for="comment">Comment</label>
                       <textarea name="comment" id="comment" class="form-control" rows="8" placeholder="Write your comment here">{{old('comment')}}</textarea>
                       @if(count($errors)>0)
                          <span class="text-danger"> {{$errors->first('comment')}}</span>
                           @endif
                   </div>
                   <button class="btn-primary" type="submit">Send</button>
                   @csrf
               </form>
           </div>
       </div>
    </div>

@endsection