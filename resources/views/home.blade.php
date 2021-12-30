@extends('layouts.app')

@include('partials.menu')
@include('partials.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h3>Users List</h3>
           
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Contact No.</th>
                  <th scope="col">Profile Picture</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody> 
                @php
                    $i = 1;
                @endphp
                 @foreach($users as $user)
                    <tr>
                      <th scope="row">{{ $i }}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      @if($user->profile_pic)
                      <td>
                          <img width="50" height="50" src="{{asset('/storage/images/'.$user->profile_pic)}}" alt="{{ $user->name }}"
                            >
                      </td>
                      @endif
                      <td>
                          
                      </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                 @endforeach
               
              </tbody>
            </table>


        </div>
    </div>
</div>
@endsection


