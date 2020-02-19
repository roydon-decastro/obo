

@extends('layouts.navigations')

@section('content')

<div class="container position-relative pt-5">

      <div class="row px-3 d-flex flex-row justify-content-between">
        <div class="col-12 col-md-4  light-blue darken-4 white-text mb-2  p-3" style="box-sizing:border-box" >
                <h6><i class="fas fa-wrench"></i> Plumbing Permit Approval Date: </h6> 
                      @if(!isset($permit->plumbing_approval_date))
                            <form action="{{ route('permits.approveplumbing', $permit->id) }}" method="POST">
                              @csrf
                              @if(auth()->user()->hasPlumbingAccess())
                              <button type="submit" class="btn blue lighten-1 btn-sm inline-block">
                                Approve Plumbing
                              </button>
                              @else
                              <p>No Approval Access</p>  
                              @endif
                            </form>
                      @else
                            <h5><strong> {{ \Carbon\Carbon::parse($permit->plumbing_approval_date)->toDayDateTimeString()}} </strong> </h5>
                      @endif

        </div>

        <div class="col-12 col-md-4  light-blue darken-4 white-text mb-2  p-3" style="box-sizing:border-box" >
          <h6><i class="fas fa-cogs"></i> Mechanical Permit Approval Date: </h6> 
          @if(!isset($permit->mechanical_approval_date))
          <form action="{{ route('permits.approvemechanical', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasMechanicalAccess())
            <button type="submit" class="btn blue lighten-1 btn-sm">
              Approve Mechanical
            </button>
            @else
            <p>No Approval Access</p>  
            @endif           
          </form>
          @else
          <h5><strong> {{ \Carbon\Carbon::parse($permit->mechanical_approval_date)->toDayDateTimeString()}} </strong> </h5>
          @endif           
        </div>

        <div class="col-12 col-md-4  light-blue darken-4 white-text mb-2  p-3" style="box-sizing:border-box" >
          <h6><i class="fas fa-laptop"></i> Electronics Permit Approval Date: </h6> 
          @if(!isset($permit->electronics_approval_date))
          <form action="{{ route('permits.approveelectronics', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasElectronicsAccess())
            <button type="submit" class="btn blue lighten-1 btn-sm">
              Approve Electronics
            </button>
            @else
            <p>No Approval Access</p>  
            @endif
          </form>
          @else
          <h5><strong> {{ \Carbon\Carbon::parse($permit->electronics_approval_date)->toDayDateTimeString()}} </strong> </h5>
          @endif
        </div>
      </div>
      
      
      <div class="row px-3 d-flex flex-row justify-content-between">
        <div class="col-12 col-md-4  light-blue darken-4 white-text mb-2  p-3" style="box-sizing:border-box" >
          <h6><i class="fas fa-bolt"></i> Electrical Permit Approval Date: </h6> 
          @if(!isset($permit->electrical_approval_date))
          <form action="{{ route('permits.approveelectrical', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasElectricalAccess())
            <button type="submit" class="btn blue lighten-1 btn-sm">
              Approve Electrical
            </button>
            @else
            <p>No Approval Access</p>  
            @endif
          </form> 
          @else
          <h5><strong> {{ \Carbon\Carbon::parse($permit->electrical_approval_date)->toDayDateTimeString()}} </strong> </h5>
          @endif
        </div>
      
      
        <div class="col-12 col-md-4  light-blue darken-4 white-text mb-2  p-3" style="box-sizing:border-box" >
          <h6> <i class="far fa-building"></i> Civil/Structural Permit Approval Date: </h6> 
          @if(!isset($permit->civil_approval_date))
          <form action="{{ route('permits.approvecivil', $permit->id) }}" method="POST">
            @csrf
            @if(auth()->user()->hasCivilAccess())
            <button type="submit" class="btn blue lighten-1 btn-sm">
              Approve Civil
            </button>
            @else
            <p>No Approval Access</p>  
            @endif       
          </form>
          @else
          <h5><strong> {{ \Carbon\Carbon::parse($permit->civil_approval_date)->toDayDateTimeString()}} </strong> </h5>
          @endif       
        </div>
      
      
        <div class="col-12 col-md-4  light-blue darken-4 white-text mb-2  p-3" style="box-sizing:border-box" >
          <h6><i class="fas fa-thumbs-up"></i> Building Permit Approval Date: </h6> 
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
          <h5><strong> {{ \Carbon\Carbon::parse($permit->building_approval_date)->toDayDateTimeString()}} </strong> </h5>
          @endif
        </div>
      </div>
</div>
@if(session()->has('error'))

    <div class="alert alert-danger container">
        {{session()->get('error')}}
    </div>
@endif
<main class="" >
    <div class="container mt-3">

      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 col-sm-12 mb-4">

          <!--Card-->
          <div class="card">
            <div class="card-header blue-grey darken-4  white-text">
              <h2 class="h2">Permit Details for <span class="blue-text">{{ substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12) }}</span> </h2>
            </div>
            <div class="card-body">
              <form class="" action=" {{isset($permit) ? route('permits.update', $permit->id) : route('admins.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                @if(isset($permit))
                    @method('PUT')
                @endif
                
                <div class="row">
                  <div class="col-md-4">

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

                    
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="grey-text" for="loc_brgy">Barangay</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_brgy  : '' }}" name="loc_brgy" id="loc_brgy">
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
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="grey-text" for="loc_lot">Lot No.</label>
                          <input disabled type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_lot  : '' }}" name="loc_lot" id="loc_lot">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="grey-text" for="loc_blk">Block No.</label>
                          <input disabled type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_blk  : '' }}" name="loc_blk" id="loc_blk">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="grey-text" for="loc_street">Street</label>
                          <input disabled type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_street  : '' }}" name="loc_street" id="loc_street">
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
                  </div>
                  <div class="row">
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
                  <div class="form-group d-inline">
                      @if(auth()->user()->hasUpdateAccess())
                      <a href="{{ route('permits.edit', $permit->id) }}" class=" mb-2 mr-2 btn btn-primary btn-lg text-white">Update Permit</a>
                      @endif
                  </div>
                  <div class="form-group d-inline">
                      <span data-toggle="modal" data-target="#modalRemark">
                            <a class="btn btn-lg blue darken-1" id="" data-toggle="tooltip" title="">Add Remarks</a>
                      </span>      
                  </div>


              </form> 
              <div>
                <h3>Remarks</h3>
                @foreach($remarks as $remark)
                <div class="row">
                    <div class="col-md-6">
                        <p class="note note-info"><strong>{{\Carbon\Carbon::parse($remark->created_at)->toDayDateTimeString()}}:</strong> {{$remark->body}} - <small>{{$remark->user->name}} </small></p>
                    </div>
                </div>  
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

</div>
<div class="modal fade" id="modalRemark" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered cascading-modal modal-avatar modal-info" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="/images/calapanlogo.png" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body mb-1">

            <form action="{{ route('admins.addpermitremarks', $permit->id) }}" method="POST"  enctype="multipart/form-data" class="" >
                @csrf
                <h3 class="blue darken-1 text-white text-center py-2 mb-4">Add Remark</h3>
                <div class="form-group">
                    <label for="body">Remarks</label>
                    <textarea class="form-control rounded-0" id="body" name="body" rows="5"></textarea>
                </div>
                <button class="btn pink mt-4 mb-3" type="submit">Add Remark</button>
            </form>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
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



