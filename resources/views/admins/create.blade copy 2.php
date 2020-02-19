{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'ACP')

@section('content_header')
    <!-- <h1>Dashboard</h1> -->
@stop

@section('content')
<main class="pt-5 mx-lg-5" style="background-color: white; padding: 20px;">
    <div class="container-fluid mt-5">




            <!-- Heading -->

<!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 col-sm-12 mb-4">
        <div style="border-bottom:1px solid green; padding:10px 0; border-bottom:1px grey; background-color:white;  font-size:2rem">Create New Permit</div>
            <!--Card-->
            <div class="card" style="border-top: 1px solid green; padding-top:20px">
          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">




            <form class="p-5" action=" {{isset($permit) ? route('permits.update', $permit->id) : route('admins.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            @if(isset($permit))
                @method('PUT')
            @endif
          <h4 class="h4">Permit Details</h4>
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

            <h4 class="h4">Location of Construction</h4>

            <div class="row">
              <div class="col-md-1">
                  <div class="form-group">
                    <label class="grey-text" for="loc_lot">Lot No.</label>
                    <input type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_lot  : '' }}" name="loc_lot" id="loc_lot">
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="form-group">
                    <label class="grey-text" for="loc_blk">Block No.</label>
                    <input type="number" class="form-control" value="{{ isset($permit) ? $permit->loc_blk  : '' }}" name="loc_blk" id="loc_blk">
                  </div>
              </div>
              <div class="col-md-1">

              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <label class="grey-text" for="loc_street">Street</label>
                    <input type="text" class="form-control" value="{{ isset($permit) ? $permit->loc_street  : '' }}" name="loc_street" id="loc_street">
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
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
                      <input type="number" class="form-control" value="{{ isset($permit) ? $permit->storeys  : '' }}" name="storeys" id="storeys">
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                      <label class="grey-text" for="floorarea">floorarea</label>
                      <input type="number" class="form-control" value="{{ isset($permit) ? $permit->floorarea  : '' }}" name="floorarea" id="floorarea">
                  </div>
                </div>
                <div class="col-md-1">

                  <div class="form-group">
                      <label class="grey-text" for="cost">cost</label>
                      <input type="text" class="form-control" value="{{ isset($permit) ? $permit->cost  : '' }}" name="cost" id="cost">
                  </div>

                </div>


                
                <div class="col-md-3 mb-3">
                  <div class="md-form">
                    <label for="date-picker-example">Start of Construction</label>
                    <input placeholder="YYYY-MM-DD" name="start" type="text" id="date-picker-example" class="form-control datepickerme">
                    <!-- <input type="text" class="form-control" name="start" id="start" placeholder="YYYY-MM-DD" value="{{ isset($permit) ? $permit->start  : '' }}" required>  -->
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="end">Expected Date of Construction</label>
                    <input type="text" class="form-control" name="end" id="end" placeholder="YYYY-MM-DD" value="{{ isset($permit) ? $permit->end  : '' }}"required>
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
                <button type="submit" class="btn btn-success">
                {{isset($permit) ? 'Update Request' : 'Create Requests' }}    
                </button>
            </div>
        </form>
          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->


      </div>
      <!--Grid row-->
    </div>
  </main>

@stop
<!-------------------------------------------------------------------------------------------------------------------------------------  -->
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script type="text/javascript">

(function() {
            $('.datepickerme').datepicker();
        });
</script>
    <script>

  $(document).ready(function () {
    $('#dtBasicExample').DataTable({
        "order": [[ 0, "desc" ]],
        "responsive": true
    });
    $('.dataTables_length').addClass('bs-select');
    });
  </script>

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