@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="card card-default" style="padding-right:15px">
    <div class="card-header">Permit Requests</div>
    <div class="card-body">
    @if($users->count() > 0)
        <table class="table">
                <thead>

                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>role</th>
                    <th>Category</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>
                        @if(!$user->isAdmin())
                            <form action="{{ route('users.make-admin', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">
                                    Make Admin
                                </button>  
                            </form>
                        @else
                            <form action="{{ route('users.make-staff', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-info btn-sm">
                                    Make Staff
                                </button>  
                            </form>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    @else
        <h3 class="text-center">No Records Found</h3>
    @endif
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop