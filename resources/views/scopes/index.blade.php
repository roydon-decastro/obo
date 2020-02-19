

@extends('layouts.navigations')

@section('content')
<div class="container py-4 px-3">

  <div class="row my-3">
      <div class="col-lg-8" >
            <div class="card card-default">
                <div class="card-header blue lighten-1 white-text">
                    Add Scopes
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item text-danger">
                                    {{$error}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin())
                    <form action="{{ isset($scope) ? route('scopes.update', $scope->id) : route('scopes.store')}}" method="POST">
                        @csrf
                        @if(isset($scope))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ isset($scope) ? $scope->name : '' }}"> 
                        </div>
                        <div class="form-group">
                            <button class="btn pink">
                                {{ isset($scope) ? 'Edit Scope' : 'Add Scope' }}
                            </button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header blue lighten-1 white-text">
                            Scope of Work List
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Permits Count</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach($scopes as $scope)
                                    <tr>
                                        <td>
                                            {{$scope->id}}
                                        </td>
                                        <td>
                                            {{$scope->name}}
                                        </td>
                                        <td>
                                            {{ $scope->permits->count()}}
                                        </td>
                                        @if(auth()->user()->isAdmin())
                                            <td>
                                                <a href="{{ route('scopes.edit', $scope->id) }}" class="btn btn-info btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm mx-2" onclick="handleDelete({{ $scope->id }})">Delete</button>
                                            </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!------------------------------------------------ MODAL -------------------------------------------->
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <form action="" method="POST" id="deletescopeForm">
                                    @method('DELETE')
                                    @csrf
                                    <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Delete Scope</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="text-center">Are you sure you want to delete this scope?</h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No. Go back</button>
                                                <button type="submit" class="btn btn-danger">Yes. Delete</button>
                                            </div>
                                        </div>
                                </form>
                                </div>
                            </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</div>

@endsection

@section('js')
    <script>
        function handleDelete(id) {
            var form = document.getElementById('deletescopeForm')
            form.action = '/scopes/' + id
            console.log('deleting ' , form);
            $('#deleteModal').modal('show')
        }
    </script>
@endsection