

@extends('layouts.navigations')

@section('content')

<div class="container position-relative pt-5">
        <div class="row" >
                <div class="col-md-12 col-12">
                        @if(auth()->user()->isAdmin())
                            <div class="card card-default" >
                                <div class="card-header blue white-text"> <h3> Admins/Staff</h3></div>
                                <div class="card-body">
                                @if($users->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" cellspacing="0" id="dtBasicExample">
                                            <thead>

                                                <th>ID</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>role</th>
                                                <th>status</th>
                                                <th>Change Role</th>
                                                <th>Change Status</th>
                                                <th>Update</th>
                                                <th>Building</th>
                                                <th>Civil</th>
                                                <th>Electrical</th>
                                                <th>Electronics</th>
                                                <th>Mechanical</th>
                                                <th>Plumbing</th>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->role}}</td>
                                                    <td>{{$user->status}}</td>
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
                                                    <td>
                                                        @if(!$user->isActive())
                                                            <form action="{{ route('users.activate-account', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-success btn-sm">
                                                                    Activate Account
                                                                </button>  
                                                            </form>
                                                        @else
                                                            <form action="{{ route('users.deactivate-account', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                    Deactivate Account
                                                                </button>  
                                                            </form>
                                                        @endif
                                                    </td>
                                                    <td>
                                                    @if(!$user->hasUpdateAccess())
                                                            <form action="{{ route('users.grant-update-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-default btn-sm">
                                                                    Grant
                                                                </button>  
                                                            </form>
                                                        @else
                                                            <form action="{{ route('users.revoke-update-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm"  style="background:#ff8080; color:white">
                                                                    Revoke
                                                                </button>  
                                                            </form>
                                                        @endif                                
                                                    </td>
                                                    <td>
                                                        @if(!$user->hasBuildingAccess())
                                                            <form action="{{ route('users.grant-building-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-default btn-sm">
                                                                    Grant
                                                                </button>  
                                                            </form>
                                                        @else
                                                            <form action="{{ route('users.revoke-building-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm" style="background:#ff8080; color:white">
                                                                    Revoke
                                                                </button>  
                                                            </form>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!$user->hasCivilAccess())
                                                            <form action="{{ route('users.grant-civil-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-default btn-sm">
                                                                    Grant
                                                                </button>  
                                                            </form>
                                                        @else
                                                            <form action="{{ route('users.revoke-civil-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm" style="background:#ff8080; color:white">
                                                                    Revoke
                                                                </button>  
                                                            </form>
                                                        @endif
                                                    </td> 
                                                    <td>
                                                        @if(!$user->hasElectricalAccess())
                                                            <form action="{{ route('users.grant-electrical-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-default btn-sm">
                                                                    Grant
                                                                </button>  
                                                            </form>
                                                        @else
                                                            <form action="{{ route('users.revoke-electrical-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm" style="background:#ff8080; color:white">
                                                                    Revoke
                                                                </button>  
                                                            </form>
                                                        @endif
                                                    </td> 
                                                    <td>
                                                        @if(!$user->hasElectronicsAccess())
                                                            <form action="{{ route('users.grant-electronics-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-default btn-sm">
                                                                    Grant
                                                                </button>  
                                                            </form>
                                                        @else
                                                            <form action="{{ route('users.revoke-electronics-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm" style="background:#ff8080; color:white">
                                                                    Revoke
                                                                </button>  
                                                            </form>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!$user->hasMechanicalAccess())
                                                            <form action="{{ route('users.grant-mechanical-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-default btn-sm">
                                                                    Grant
                                                                </button>  
                                                            </form>
                                                        @else
                                                            <form action="{{ route('users.revoke-mechanical-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm" style="background:#ff8080; color:white">
                                                                    Revoke
                                                                </button>  
                                                            </form>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!$user->hasPlumbingAccess())
                                                            <form action="{{ route('users.grant-plumbing-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-default btn-sm">
                                                                    Grant
                                                                </button>  
                                                            </form>
                                                        @else
                                                            <form action="{{ route('users.revoke-plumbing-access', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm" style="background:#ff8080; color:white">
                                                                    Revoke
                                                                </button>  
                                                            </form>
                                                        @endif
                                                    </td>
                                                
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                @else
                                    <h3 class="text-center">No Records Found</h3>
                                @endif
                            </div>
                        @else
                            <h1>Contents are for Admin only.</h1>
                        @endif
                </div>
        </div>
</div>
@endsection


<!-------------------------------------------------------------------------------------------------------------------------------------  -->
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


<script>
  // Material Design example
  $(document).ready(function () {
    $('#immediateTable').DataTable({
        "order": [[ 0, "desc" ]]
    });
    $('.dataTables_length').addClass('bs-select');
    });
  </script>

  <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>

  <script>
  setTimeout(function() {
    $('.alert').fadeOut('fast');
  }, 8000);
</script>
@stop