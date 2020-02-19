

@extends('layouts.navigations')

@section('content')
<div class="container py-4 px-3">

<div class="row py-5">
        <div class="col-lg-6" >

                <div class="card card-default" >
                    <div class="card-header red white-text">
                        {{ isset($occupant) ? 'Edit Use of Occupancy' : 'Add Use of Occupancy' }}
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
                                <button class="btn pink">
                                    {{ isset($occupant) ? 'Edit Use of Occupancy' : 'Add Use of Occupancy' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
</div>

</div>
@endsection