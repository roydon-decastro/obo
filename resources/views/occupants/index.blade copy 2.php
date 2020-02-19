{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="row">
<div class="col-lg-6" style="background-color: white; margin-left:20px">

<div class="card card-default"  style="padding:20px">
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
        <form action="{{ isset($occupant) ? route('occupants.update', $occupant->id) : route('occupants.store')}}" method="POST">
            @csrf
            @if(isset($occupant))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ isset($occupant) ? $occupant->name : '' }}"> 
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($occupant) ? 'Edit Use of Occupancy' : 'Add Use of Occupancy' }}
                </button>
            </div>
        </form>
        @endif
    </div>
</div>

<div class="card card-default"  style="padding:20px">
    <div class="card-body">
        <table class="table">

        <thead>
            <th>Name</th>
            <th>Permits Count</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($occupants as $occupant)
            <tr>
                <td>
                    {{$occupant->name}}
                </td>
                <td>
                {{ $occupant->permits->count()}}
                </td>
                <td>
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('occupants.edit', $occupant->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm mx-2" onclick="handleDelete({{ $occupant->id }})">Delete</button>
                @endif
                </td>
            </tr>
            @endforeach
            
        </tbody>


        </table>

        <!------------------------------------------------ MODAL -------------------------------------------->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <form action="" method="POST" id="deleteoccupantForm">
                @method('DELETE')
                @csrf
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Use of Occupany</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center">Are you sure you want to delete this Use of Occupanty?</h3>
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

@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteoccupantForm')
            form.action = '/occupants/' + id
            console.log('deleting ' , form);
            $('#deleteModal').modal('show')
        }
    </script>
@endsection