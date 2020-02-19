{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

<div id="approvals" class="container-fluid" style="margin-bottom:15px;">

      <div class="row">
        <div class="col-md-3 ml-2 col-xs-12 col-sm-12 " style="padding:15px; background-color: #145374; color:white">
          <h5> Plumbing Permit Approval Date: </h5> 
          @if(!isset($permit->plumbing_approval_date))
          <form action="{{ route('permits.approveplumbing', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasPlumbingAccess())
            <button type="submit" class="btn btn-default btn-sm inline-block">
              Approve Plumbing
            </button>
            @else
            <p>No Approval Access</p>  
            @endif
          </form>
          @else
          <h4><strong> {{ \Carbon\Carbon::parse($permit->plumbing_approval_date)->toDayDateTimeString()}} </strong> </h4>
          @endif

        </div>
        <div class="col-md-3 ml-2 col-xs-12 col-sm-12 " style="padding:15px; background-color: #145374; color:white">
          <h5> Mechanical Permit Approval Date: </h5> 
          @if(!isset($permit->mechanical_approval_date))
          <form action="{{ route('permits.approvemechanical', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasMechanicalAccess())
            <button type="submit" class="btn btn-default btn-sm">
              Approve Mechanical
            </button>
            @else
            <p>No Approval Access</p>  
            @endif           
          </form>
          @else
          <h4><strong> {{ \Carbon\Carbon::parse($permit->mechanical_approval_date)->toDayDateTimeString()}} </strong> </h4>
          @endif           
        </div>
        <div class="col-md-3 ml-2 col-xs-12 col-sm-12 " style="padding:15px; background-color: #145374; color:white">
          <h5> Electronics Permit Approval Date: </h5> 
          @if(!isset($permit->electronics_approval_date))
          <form action="{{ route('permits.approveelectronics', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasElectronicsAccess())
            <button type="submit" class="btn btn-default btn-sm">
              Approve Electronics
            </button>
            @else
            <p>No Approval Access</p>  
            @endif
          </form>
          @else
          <h4><strong> {{ \Carbon\Carbon::parse($permit->electronics_approval_date)->toDayDateTimeString()}} </strong> </h4>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ml-2 col-xs-12 col-sm-12 " style="padding:15px; background-color: #145374; color:white">
          <h5> Electrical Permit Approval Date: </h5> 
          @if(!isset($permit->electrical_approval_date))
          <form action="{{ route('permits.approveelectrical', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasElectricalAccess())
            <button type="submit" class="btn btn-default btn-sm">
              Approve Electrical
            </button>
            @else
            <p>No Approval Access</p>  
            @endif
          </form> 
          @else
          <h4><strong> {{ \Carbon\Carbon::parse($permit->electrical_approval_date)->toDayDateTimeString()}} </strong> </h4>
          @endif
        </div>
        <div class="col-md-3 ml-2 col-xs-12 col-sm-12 " style="padding:15px; background-color: #145374; color:white">
          <h5> Civil/Structural Permit Approval Date: </h5> 
          @if(!isset($permit->civil_approval_date))
          <form action="{{ route('permits.approvecivil', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasCivilAccess())
            <button type="submit" class="btn btn-default btn-sm">
              Approve Civil
            </button>
            @else
            <p>No Approval Access</p>  
            @endif       
          </form>
          @else
          <h4><strong> {{ \Carbon\Carbon::parse($permit->civil_approval_date)->toDayDateTimeString()}} </strong> </h4>
          @endif       
        </div>
        <div class="col-md-3 ml-2 col-xs-12 col-sm-12 " style="padding:15px; background-color: #145374; color:white">
          <h5> Building Permit Approval Date: </h5> 
          @if(!isset($permit->building_approval_date))
          <form action="{{ route('permits.approvebuilding', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasBuildingAccess())
            <button type="submit" class="btn btn-danger btn-sm">
              Approve Building
            </button>
            @else
            <p>No Approval Access</p>  
            @endif
          </form>  
          @else
          <h4><strong> {{ \Carbon\Carbon::parse($permit->building_approval_date)->toDayDateTimeString()}} </strong> </h4>
          @endif
        </div>
      </div>
</div>
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error')}}
    </div>
@endif
<main class="pt-5 mx-lg-5" style="background-color:white; padding-top:15px;">
    <div class="container-fluid mt-5">

      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 col-sm-12 mb-4">

          <!--Card-->
          <div class="card">
            <div class="card-body">
              <form class="p-5" action=" {{isset($permit) ? route('permits.update', $permit->id) : route('admins.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                @if(isset($permit))
                    @method('PUT')
                @endif
                <h2 class="h2">Permit Details for <span class="blue-text">{{ substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12) }}</span> </h2>
                <div class="row">
                  <div class="col-md-3">

                  <div class="form-group">
                      <label class="grey-text" for="category_id">Category</label>
                      <select disabled class="form-control browser-default custom-selects" value="" name="category_id" id="category_id">
                      @foreach($categories as $category)
                          <option value="{{ $category->id }}"
                          @if(isset($permit))
                            @if($category->id === $permit->category_id)
                                selected
                            @endif 
                        @endif > {{ $category->name}}

                    @endforeach
                        </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="grey-text" for="state_id">Status</label>
                          <select disabled class="form-control browser-default custom-selects" name="state_id" id="state_id">
                          @foreach($states as $state)
                              <option value="{{ $state->id }}"
                              @if(isset($permit))
                                  @if($state->id === $permit->state_id)
                                      selected
                                  @endif 
                              @endif > {{ $state->name}}

                          @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <label class="grey-text" for="type">Type</label>
                        <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->type  : '' }}" name="type" id="type">
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="grey-text" for="ownerform">Form of Ownership</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->ownerform  : '' }}" name="ownerform" id="ownerform">
                      </div>
            
                  </div>
                </div>
                  


                <h4 class="h4">Owner/Applicant Details</h4>
                <div class="row">
                  <div class="col-md-3">

                  <div class="form-group">
                      <label class="grey-text" for="fname">First Name</label>
                      <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->fname  : '' }}" name="fname" id="fname" required>
                  </div>

                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                      <label class="grey-text" for="lname">Last Name</label>
                      <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->lname  : '' }}" name="lname" id="lname">
                  </div>

                  </div>
                  <div class="col-md-1">
                  <div class="form-group">
                      <label class="grey-text" for="mi_name">M.I</label>
                      <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->mi_name  : '' }}" name="mi_name" id="mi_name">
                  </div>

                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label class="grey-text" for="tin">TIN</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->tin  : '' }}" name="tin" id="tin">
                      </div>
                  </div>

                  <div class="col-md-3">
                  <div class="form-group">
                      <label class="grey-text" for="email">Email</label>
                      <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->email  : '' }}" name="email" id="email">
                  </div>
                  </div>

                </div>






                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="grey-text" for="address">Address</label>
                        <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->address  : '' }}" name="address" id="address">
                      </div>
                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                          <label class="grey-text" for="barangay_id">Barangay</label>
                          <select disabled class="form-control browser-default custom-selects" value="" name="barangay_id" id="barangay_id">
                          @foreach($barangays as $barangay)
                              <option value="{{ $barangay->id }}"
                              @if(isset($permit))
                                  @if($barangay->id === $permit->barangay_id)
                                      selected
                                  @endif 
                              @endif > {{ $barangay->name}}

                          @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="grey-text" for="city">City</label>
                        <input disabled type="text" class="form-control" value="Calapan" name="city" id="city" disabled>
                    </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="grey-text" for="zipcode">Zip Code</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->zipcode  : '' }}" name="zipcode" id="zipcode">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="grey-text" for="telephone">Telephone</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->telephone  : '' }}" name="telephone" id="telephone">
                        </div>
                    </div>
                  </div>

                  <h4 class="h4">Location of Construction</h4>

                  <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                          <label class="grey-text" for="loc_lot">Lot No.</label>
                          <input disabled type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_lot  : '' }}" name="loc_lot" id="loc_lot">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                          <label class="grey-text" for="loc_blk">Block No.</label>
                          <input disabled type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_blk  : '' }}" name="loc_blk" id="loc_blk">
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="grey-text" for="loc_street">Street</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_street  : '' }}" name="loc_street" id="loc_street">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="grey-text" for="loc_brgy">Barangay</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_brgy  : '' }}" name="loc_brgy" id="loc_brgy">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="grey-text" for="tct">TCT</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->tct  : '' }}" name="tct" id="tct">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="grey-text" for="taxdec">Tax Dec</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->taxdec  : '' }}" name="taxdec" id="taxdec">
                        </div>
                    </div>
                  </div>
                  <h4 class="h4">Construction Details</h4>
                  <div class="row">
                      <div class="col-md-1">
                        <div class="form-group">
                            <label class="grey-text" for="storeys">storeys</label>
                            <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->storeys  : '' }}" name="storeys" id="storeys">
                        </div>
                      </div>
                      <div class="col-md-1">
                        <div class="form-group">
                            <label class="grey-text" for="floorarea">floorarea</label>
                            <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->floorarea  : '' }}" name="floorarea" id="floorarea">
                        </div>
                      </div>
                      <div class="col-md-1">

                        <div class="form-group">
                            <label class="grey-text" for="cost">cost</label>
                            <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->cost  : '' }}" name="cost" id="cost">
                        </div>

                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label class="grey-text" for="image">image</label>
                            <input disabled type="file" class="form-control" value="{{ isset($permit) ? $permit->image  : '' }}" name="image" id="image">
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                          <div class="form-group">
                            <label class="grey-text" for="scopesid">Scope</label>
                            <select disabled class="form-control browser-default custom-selects" multiple='multiple' name="scopes[]" id="scopesid" class="sselector form-control" value="">
                                @foreach($scopes as $scope)
                                    <option value="{{ $scope->id }}"
                                        @if(isset($permit))
                                            @if($permit->hasScope($scope->id))
                                                selected
                                            @endif
                                        @endif > {{ $scope->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                          <div class="form-group">
                            <label class="grey-text" for="occupantsid">Use of Occupancy</label>
                            <select disabled class="form-control browser-default custom-selects" multiple='multiple' name="occupants[]" id="occupantsid" class="form-control" value="">
                                @foreach($occupants as $occupant)
                                    <option value="{{ $occupant->id }}"
                                        @if(isset($permit))
                                            @if($permit->hasOccupant($occupant->id))
                                                selected
                                            @endif
                                        @endif > {{ $occupant->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                  @if(auth()->user()->hasUpdateAccess())
                  <a href="{{ route('permits.edit', $permit->id) }}" class=" mb-2 mr-2 display-inline btn btn-primary btn-lg text-white">Update Permit</a>
                  @endif
                  </div>
                  <div class="row" style="margin-bottom:50px; margin-top:50px;">
                    <ul>
                      <li class="list-unstyled" style=""> </li>
                      <li class="list-unstyled" style=""> </li>
                      <li class="list-unstyled" style=""> </li>
                      <li class="list-unstyled" style=""></li>
                      <li class="list-unstyled" style=""> </li>
                      <li class="list-unstyled" style=""> </li>
                    </ul>
                  </div>

              </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
  <!--Main layout-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>
      .mr-2 {
        margin-right:10px;
      }

      .button-secondary{
        background-color: blue;
      }
    </style>
@stop

@section('js')
<script>
  setTimeout(function() {
    $('.alert').fadeOut('fast');
  }, 8000);
</script>
@stop



