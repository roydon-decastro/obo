

@extends('layouts.navigations')

@section('content')

<div class="container py-4 px-3">

        <div class="row my-3">
            <div class="col-lg-8" >
                    <div class="card card-default">
                        <div class="card-header blue lighten-1 white-text">
                            Add Status
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
                                <form action="{{ isset($state) ? route('states.update', $state->id) : route('states.store')}}" method="POST">
                                    @csrf
                                    @if(isset($state))
                                        @method('PUT')
                                    @endif
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ isset($state) ? $state->name : '' }}"> 
                                    </div>
                                    <div class="form-group">
                                        <button class="btn pink">
                                            {{ isset($state) ? 'Edit Status' : 'Add Status' }}
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
                            Status List
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
                                        @foreach($states as $state)
                                        <tr>
                                            <td>
                                                {{$state->id}}
                                            </td>
                                            <td>
                                                {{$state->name}}
                                            </td>
                                            <td>
                                            {{$state->permits->count()}}
                                            </td>
                                            @if(auth()->user()->isAdmin())
                                                <td>
                                                <a href="{{ route('states.edit', $state->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                <button class="btn btn-danger btn-sm mx-2" onclick="handleDelete({{ $state->id }})">Delete</button>
                                                </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!------------------------------------------------ MODAL -------------------------------------------->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="" method="POST" id="deleteStateForm">
                                                @method('DELETE')
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Delete Status</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3 class="text-center">Are you sure you want to delete this status?</h3>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteStateForm')
            form.action = '/states/' + id
            console.log('deleting ' , form);
            $('#deleteModal').modal('show')
        }
    </script>
@endsection