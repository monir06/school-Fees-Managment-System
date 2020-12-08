@extends('layouts.app')

@section('content')
<div class="container mg-t-20">
    <div class="row title1 m-b-md">
        Welcome {{ Auth::user()->name }}, teacher
    </div>
    <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            {{-- <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Users</a> --}}
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Users</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            {{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> --}}
            {{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Users</h2>
                        </div>
                        
                    </div>
                </div>
                
                
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                  <p>{{ $message }}</p>
                </div>
                @endif
                
                
                <table class="table">
                 <tr>
                   <th>No</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Role</th>
                   <th width="150px">Action</th>
                 </tr>
                 {{-- @foreach ($data as $key => $user) --}}
                  <tr>
                    <td>1</td>
                    <td>Ramadevi Kunapareddy</td>
                    <td>ramadevi.kunapareddy@gmail.com</td>
                    <td>parent</td>
                    <td>
                        <a class="btn btn-primary" href="">Show Fees</a>
                        {{-- <a class="btn btn-danger" href="">Delete</a> --}}
                        {{-- <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a> --}}
                         {{-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!} --}}
                             {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                         {{-- {!! Form::close() !!} --}}
                     </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Naveen</td>
                    <td>naveen@gmail.com</td>
                    <td>parent</td>
                    <td>
                        <a class="btn btn-primary" href="">Show Fees</a>
                        {{-- <a class="btn btn-danger" href="">Delete</a> --}}
                        {{-- <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a> --}}
                         {{-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!} --}}
                             {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                         {{-- {!! Form::close() !!} --}}
                     </td>
                  </tr>
                  
                 {{-- @endforeach --}}
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
            
            {{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> --}}
          </div>
        </div>
      </div>
    
</div>
@endsection
