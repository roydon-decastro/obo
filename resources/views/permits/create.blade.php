

@extends('layouts.navigations')

@section('content')
<div class="container position-relative ">
      <main class="pt-5">
        <div class="container-fluid">

          <div class="row wow fadeIn">

            <div class="col-md-12 col-sm-12 mb-4">

                <div class="card" >
                <div class="card-header blue-grey darken-4  white-text">
                  <h2 class="h2">Permit Details for <span class="blue-text">{{ substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12) }}</span> </h2>
                </div>
                <div class="card-body">

                <form  action=" {{isset($permit) ? route('permits.update', $permit->id) : route('admins.store') }}" method="POST"  enctype="multipart/form-data" style="background-color:white; ">
                @csrf
                @if(isset($permit))
                    @method('PUT')
                @endif
              <div class="form-group">
                    <input type="hidden" class="form-control" value="{{ isset($permit) ? $permit->application_id  : '' }}" name="application_id" id="application_id">
                </div>
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
                        <select class="form-control browser-default custom-selects" name="state_id" id="state_id">
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
                      <label class="grey-text" for="type_id">Type</label>
                      <input type="text" class="form-control" value="{{ isset($permit) ? $permit->type  : '' }}" name="type_id" id="type_id">
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="grey-text" for="ownerform">Form of Ownership</label>
                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->ownerform  : '' }}" name="ownerform" id="ownerform">
                    </div>
          
                </div>
              </div>
                


              <h4 class="h4">Owner/Applicant Details</h4>
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

                  <div class="form-group">
                        <label class="grey-text" for="loc_brgy">Barangay</label>
                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_brgy  : '' }}" name="loc_brgy" id="loc_brgy">
                      </div>
      
      
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

                <h4 class="h4">Location of Construction</h4>

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
                  <div class="col-md-3">
                      <div class="form-group">
                        <label class="grey-text" for="loc_street">Street</label>
                        <input type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_street  : '' }}" name="loc_street" id="loc_street">
                      </div>
                  </div>
                  <div class="col-md-2">
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
                </div>
                <div class="row">
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
                <h4 class="h4">Construction Details</h4>
                <div class="row">
                    <div class="col-md-1">
                      <div class="form-group">
                          <label class="grey-text" for="storeys">storeys</label>
                          <input type="text" class="form-control" value="{{ isset($permit) ? $permit->storeys  : '' }}" name="storeys" id="storeys">
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group">
                          <label class="grey-text" for="floorarea">floorarea</label>
                          <input type="text" class="form-control" value="{{ isset($permit) ? $permit->floorarea  : '' }}" name="floorarea" id="floorarea">
                      </div>
                    </div>
                    <div class="col-md-2">

                      <div class="form-group">
                          <label class="grey-text" for="cost">cost</label>
                          <input type="text" class="form-control" value="{{ isset($permit) ? $permit->cost  : '' }}" name="cost" id="cost">
                      </div>

                    </div>


                    <div class="col-md-3 mb-3">
                      <div class="form-group">

                        <label for="start">Proposed Date of Construction </label>
                        <input type="text" class="form-control" name="start" id="start" placeholder="YYYY-MM-DD" value="{{ isset($permit) ? $permit->start  : '' }}" required> 
                      </div>
                    </div>

                    <div class="col-md-3 mb-3">
                      <div class="form-group">

                        <label for="end">Expected Date of Construction</label>
                        <input type="text" class="form-control" name="end" id="end" placeholder="YYYY-MM-DD" value="{{ isset($permit) ? $permit->end  : '' }}"required>
                      </div>
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
                    <button type="submit" class="btn btn-info">
                    {{isset($permit) ? 'Update Request' : 'Create Requests' }}    
                    </button>
                </div>
            </form>
              </div>
              <!--/.Card-->
            </div>
            <!--Grid column-->
          </div>
        </div>
      </main>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    
    </script>
@stop