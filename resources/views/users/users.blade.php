@extends('layouts.app')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-9">
                    <h5 class="h5 text-center">User Registered</h5>
                    <hr>
                    <ul class="list-unstyled">
                        @foreach($users as $user)
                            <li class="row justify-content-center mt-2">
                                <div class="col-md-3">{{$user->name}}</div>
                                <div class="col-md-3">
                                    <form action="{{route('deleteUser',['user'=>$user,'reports'=>$reports])}}" METHOD="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminate</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
        </div>
    </div>


@endsection
