@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('occupants.create') }}" class="btn btn-success">Add Use of Occupancy</a>

</div>

<div class="card card-default">
    <div class="card-header">Use of Occupancy</div>
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
                    <a href="{{ route('occupants.edit', $occupant->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm mx-2" onclick="handleDelete({{ $occupant->id }})">Delete</button>
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