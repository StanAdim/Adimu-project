@extends('layouts.app')

@section('content')
    <div class="row justify-content-center ">
              <div class="col-md-9">
                  <div class="card">
                      <div class="card-header">
                          <em class="h5 text-center">Registered user's Info <span class="badge badge-pill badge-danger"> {{count($users)}}</span></em>
                      </div>
                      <div class="card-body">

                          <table class="table table-hover table-bordered">
                              <thead class="bg-dark text-light">

                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User Reports</th>

                              </thead>
                              <tbody id="tableBg2">



                                  @foreach($users as $user)

                                      <tr>
                                          <th>{{$user->id}}</th>
                                          <td>{{$user->name}}</td>
                                          <td>{{$user->email}}</td>
                                          <td>
                                              @if(count($user->userReports)>0)
                                                  <a href="{{route('usersReports',['user'=>$user])}}" class="text-dark">Check Reports <span class="badge badge-secondary"> {{count($user->userReports)}}</span></a>
                                              @else
                                                  <span class="text-muted">No reports</span>
                                              @endif


                                          </td>

                                      </tr>

                                  @endforeach


                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>

    </div>


@endsection
