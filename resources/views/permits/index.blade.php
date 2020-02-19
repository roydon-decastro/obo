@extends('layouts/app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('permits.create') }}" class="btn btn-success">Add Permit Request</a>

</div>


<div class="card card-default">
    <div class="card-header">Permit Requests</div>
    <div class="card-body">
    @if($permits->count() > 0)
        <table class="table">
                <thead>

                    <th>ID</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($permits as $permit)
                    <tr>
                        <td>{{$permit->id}}</td>
                        <td>{{$permit->type}}</td>
                        <td>{{$permit->state->name}}</td>
                        <td>{{$permit->fname}}  {{$permit->lname}}</td>
                        <td>
                            <a href="{{ route('categories.edit', $permit->category->id) }}">{{$permit->category->name}}</a>
                            
                        </td>
                        @if($permit->trashed())
                        <td>
                            <form action="{{ route('restore-permits', $permit->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-info btn-sm">Restore</button>
                            </form>
                        </td>
                        @else
                            <td> <a href="{{ route('permits.edit', $permit->id) }}" class="btn btn-info btn-sm">Edit</a>  </td>
                        @endif

                        <td>
                            <form action="{{ route('permits.destroy', $permit->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    {{$permit->trashed() ? 'Delete' : 'Trash'}}
                                </button>  
                            </form>
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
@endsection