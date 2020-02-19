

@extends('layouts.navigations')

@section('content')
<div class="container py-4 px-3">

    <div class="row py-5">
        <div class="col-lg-6">
            <div class="card card-default">
                    <div class="card-header red white-text">
                        {{ isset($barangay) ? 'Edit Barangay' : 'Create Barangay' }}
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
                        <form action="{{ isset($barangay) ? route('barangays.update', $barangay->id) : route('barangays.store')}}" method="POST">
                            @csrf
                            @if(isset($barangay))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ isset($barangay) ? $barangay->name : '' }}"> 
                            </div>
                            <div class="form-group">
                                <button class="btn pink">
                                    {{ isset($barangay) ? 'Update Barangay' : 'Add Barangay' }}
                                </button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
