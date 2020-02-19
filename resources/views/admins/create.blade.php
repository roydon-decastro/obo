

@extends('layouts.navigations')

@section('head-jq-date-picker')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@stop

@section('content')
<div class="container pt-5">
      <div class="row wow fadeIn">
              <div class="col-md-12 col-sm-12 mb-4">
                        <div class="card">
                              <div class="card-header blue  white-text">
                                    <h2 class="h2">Create New Permit</h2>
                              </div>
                              <div class="card-body">
                                    <form class="" action=" {{isset($permit) ? route('permits.update', $permit->id) : route('admins.store') }}" method="POST"  enctype="multipart/form-data">
                                          @csrf
                                          @if(isset($permit))
                                              @method('PUT')
                                          @endif
                                        <h4 class="h4 pink-text">Permit Details</h4>
                                        <div class="row">
                                          <div class="col-md-3">

                                            <div class="form-group">
                                                <label class="grey-text" for="category_id">Category</label>
                                                <select class="form-control browser-default custom-selects" value="" name="category_id" id="category_id">
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
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="grey-text" for="ownerform">Form of Ownership</label>
                                                  <input type="text" class="form-control" value="{{ isset($permit) ? $permit->ownerform  : '' }}" name="ownerform" id="ownerform">
                                              </div>
                                    
                                          </div>
                                        </div>
                                    


                                              <h4 class="h4 pink-text">Owner/Applicant Details</h4>
                                              <div class="row">
                                                <div class="col-md-3">

                                                <div class="form-group">
                                                    <label class="grey-text" for="fname">First Name</label>
                                                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->fname  : '' }}" name="fname" id="fname" required>
                                                </div>

                                                </div>
                                                <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="grey-text" for="lname">Last Name</label>
                                                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->lname  : '' }}" name="lname" id="lname">
                                                </div>

                                                </div>
                                                <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="grey-text" for="mi_name">M.I</label>
                                                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->mi_name  : '' }}" name="mi_name" id="mi_name">
                                                </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="grey-text" for="tin">TIN</label>
                                                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->tin  : '' }}" name="tin" id="tin">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="grey-text" for="email">Email</label>
                                                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->email  : '' }}" name="email" id="email">
                                                </div>
                                                </div>

                                              </div>






                                                <div class="row">
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                      <label class="grey-text" for="address">Address</label>
                                                      <input type="text" class="form-control" value="{{ isset($permit) ? $permit->address  : '' }}" name="address" id="address">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                  <label class="grey-text" for="loc_brgy">Barangay</label>
                                                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_brgy  : '' }}" name="loc_brgy" id="loc_brgy">
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="form-group">
                                                      <label class="grey-text" for="city">City</label>
                                                      <input type="text" class="form-control" value="Calapan" name="city" id="city" disabled>
                                                  </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <div class="form-group">
                                                        <label class="grey-text" for="zipcode">Zip Code</label>
                                                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->zipcode  : '' }}" name="zipcode" id="zipcode">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <div class="form-group">
                                                        <label class="grey-text" for="telephone">Telephone</label>
                                                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->telephone  : '' }}" name="telephone" id="telephone">
                                                      </div>
                                                  </div>
                                                </div>

                                                <h4 class="h4 pink-text">Location of Construction</h4>

                                                <div class="row">
                                                  <div class="col-md-2">
                                                      <div class="form-group">
                                                        <label class="grey-text" for="loc_lot">Lot No.</label>
                                                        <input type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_lot  : '' }}" name="loc_lot" id="loc_lot">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <div class="form-group">
                                                        <label class="grey-text" for="loc_blk">Block No.</label>
                                                        <input type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_blk  : '' }}" name="loc_blk" id="loc_blk">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <div class="form-group">
                                                        <label class="grey-text" for="loc_street">Street</label>
                                                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_street  : '' }}" name="loc_street" id="loc_street">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <div class="form-group">
                                                        <label class="grey-text" for="barangay_id">Barangay</label>
                                                        <select class="form-control browser-default custom-selects" value="" name="barangay_id" id="barangay_id">
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
                                                        <label class="grey-text" for="tct">TCT</label>
                                                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->tct  : '' }}" name="tct" id="tct">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <div class="form-group">
                                                        <label class="grey-text" for="taxdec">Tax Dec</label>
                                                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->taxdec  : '' }}" name="taxdec" id="taxdec">
                                                      </div>
                                                  </div>
                                                </div>
                                                <h4 class="h4 pink-text">Construction Details</h4>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                      <div class="form-group">
                                                          <label class="grey-text" for="storeys">Storeys</label>
                                                          <input type="number" class="form-control" value="{{ isset($permit) ? $permit->storeys  : '' }}" name="storeys" id="storeys">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                      <div class="form-group">
                                                          <label class="grey-text" for="floorarea">Floorarea in sqm</label>
                                                          <input type="number" class="form-control" value="{{ isset($permit) ? $permit->floorarea  : '' }}" name="floorarea" id="floorarea">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-2">

                                                      <div class="form-group">
                                                          <label class="grey-text" for="cost">Cost in PHP</label>
                                                          <input type="text" class="form-control" value="{{ isset($permit) ? $permit->cost  : '' }}" name="cost" id="cost">
                                                      </div>

                                                    </div>


                                                    
                                                    <div class="col-md-3 mb-3">
                                                        <label class="grey-text" for="start">Proposed Date of Construction </label>
                                                        <input type="text" class=" date form-control" name="start" id="start" placeholder="" value="{{Request::old('start')}}" required>
                                                    </div>

                                                    <div class="col-md-3 mb-3">
                                                        <label class="grey-text" for="start">Expected Date of Completion</label>
                                                        <input type="text" class=" date form-control" name="end" id="end" placeholder="" value="{{Request::old('end')}}" required> 
                                                    </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label class="grey-text" for="scopesid">Scope</label>
                                                          <select class="form-control browser-default custom-selects" multiple='multiple' name="scopes[]" id="scopesid" class="sselector form-control" value="">
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
                                                          <select class="form-control browser-default custom-selects" multiple='multiple' name="occupants[]" id="occupantsid" class="form-control" value="">
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
                                                    <button type="submit" class="btn pink">
                                                    {{isset($permit) ? 'Update Permit' : 'Create Permit' }}    
                                                    </button>
                                                </div>
                                    </form>
                              </div>
                        </div>
              </div>
      </div>
</div>
@stop
<!-------------------------------------------------------------------------------------------------------------------------------------  -->
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')



<script>
  // Material Design example
  $(document).ready(function () {
    $('#immediateTable').DataTable({
        "order": [[ 0, "desc" ]]
    });
    $('.dataTables_length').addClass('bs-select');
    });
  </script>

  <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>

  <script>
  setTimeout(function() {
    $('.alert').fadeOut('fast');
  }, 8000);
</script>
@stop