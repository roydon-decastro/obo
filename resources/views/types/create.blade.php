@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">
        {{ isset($type) ? 'Edit Type' : 'Create Type' }}
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
        <form action="{{ isset($type) ? route('types.update', $type->id) : route('types.store')}}" method="POST">
            @csrf
            @if(isset($type))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ isset($type) ? $type->name : '' }}"> 
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($type) ? 'Edit Type' : 'Add Type' }}
                </button>
            </div>
        </form>
    </div>
</div>


@endsection