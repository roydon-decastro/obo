

@extends('layouts.navigations')

@section('content')

<div class="container">
    <div class="row pt-5">
        <div class="col-md-12 white p-5">
                <h3 class="blue white-text d-block p-3 text-center">Choose Filters</h3>
            <form class="" action="{{ route('admins.searchresults')}}" method="POST" target="_blank"  enctype="multipart/form-data"> 
                @csrf
                <div class="row">
                        <div class="col-sm">
                                    <label class="grey-text" for="year">Year</label>
                                    <select class="browser-default custom-select" name="year">
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019" selected>2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2027">2028</option>
                                        <option value="2027">2029</option>
                                        <option value="2027">2030</option>
                                        <option value="2027">2031</option>
                                        <option value="2027">2032</option>
                                        <option value="2027">2033</option>
                                        <option value="2027">2034</option>
                                        <option value="2027">2035</option>
                                    </select>
                        </div>
                        <div class="col-sm">
                                <label class="grey-text" for="month">Month</label>
                                <select class="browser-default custom-select" name="month">
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                        <option value="13" selected>All</option>
                                </select>
                        </div>

                </div>
                <div class="row mt-4">
                       <div class="col-sm selDiv">
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
                        <div class="col-sm selDiv">
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

                    
                        <div class="col-sm selDiv">
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
                <div class="row mt-4">
                        <div class="col-sm">
                            <label for="scopes" class="grey-text">Scope of Work</label>
                            <select class="form-control browser-default custom-selects" value="" name="scopes" id="scopes">
                                    @foreach($scopes as $scope)
                                            <option value=" {{ $scope->id }} "> {{ $scope->name }} </option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="occupantsid" class="grey-text">Use or Character of Occupancy</label>
                            <select class="form-control browser-default custom-selects" value="" name="occupants" id="occupantsid">
                                    @foreach($occupants as $occupant)
                                            <option value=" {{ $occupant->id }} "> {{ $occupant->name }} </option>
                                    @endforeach
                            </select>
                        </div>
                </div>
                <button type="submit" class="btn pink mt-5" name="submit" value="show">Show</button>
                <button type="submit" class="btn grey mt-5" name="submit" value="pdfform">PDF form</button>
            </form>
        </div>
    </div>
</div>

<div class="container pt-5">

      <div class="row wow fadeIn" >
                <div class="col-md-12 col-sm-12 mb-4">
                      <div class="card">
                            <div class="card-header">
                                <h3>Total: {{$permits->count()}}</h3>
                            </div>
                              <div class="card-body">
                                      <div class="table-responsive">
                                            <table id="" class="table table-striped table-bordered" cellspacing="0">
                                              <thead>
                                                  <tr>
                                                  <th class="">Application ID</th>
                                                  <th class="">Status</th>
                                                  <th class="">Name</th>
                                                  <th class="">Barangay</th>
                                                  <th class="">Category</th>
                                                  <th class="">Scope</th>
                                                  <th class="">Occupancy</th>
                                                  </tr>
                                              </thead>
                                              <tbody>

                                                      @foreach($permits as $permit)
                                                      <tr>
                                                          <td>{{substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12)}}</td>
                                                          <td>{{$permit->state->name}}</td>
                                                          <td>{{$permit->fname}}  {{$permit->lname}}</td>
                                                          <td>{{$permit->barangay->name}}</td>
                                                          <td>{{$permit->category->name}}</td>
                                                          <td>
                                                                @foreach($scopes as $scope)
                                                                        @if(isset($permit))
                                                                            @if($permit->hasScope($scope->id))
                                                                            {{ $scope->name}}
                                                                            @endif
                                                                        @endif 
                                                                @endforeach
                                                          </td>
                                                          <td>
                                                                @foreach($occupants as $occupant)
                                                                        @if(isset($permit))
                                                                            @if($permit->hasOccupant($occupant->id))
                                                                            {{ $occupant->name}}
                                                                            @endif
                                                                        @endif 
                                                                @endforeach
                                                          </td>
                                                      </tr>
                                                      @endforeach

                                              </tbody>
                                              <tfoot>
                                                      <tr>
                                                          <th>Application ID</th>
                                                          <th>Status</th>
                                                          <th>Name</th>
                                                          <th>Barangay</th>
                                                          <th>Category</th>
                                                          <th>Occupancy</th>
                                                          <th>Scope</th>
                                                      </tr>
                                                </tfoot>
                                            </table>
                                      </div>
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
<script>

$('#state_id').append($('<option>', {
    value: 100,
    text: 'All'
}));
    
$('#category_id').append($('<option>', {
    value: 100,
    text: 'All'
}));

$('#barangay_id').append($('<option>', {
    value: 100,
    text: 'All'
}));

$('#scopes').append($('<option>', {
    value: 100,
    text: 'All'
}));

$('#occupantsid').append($('<option>', {
    value: 100,
    text: 'All'
}));
</script>
<script>
    var categ_count = $("#category_id option").length - 1;
    var brgy_count  = $("#barangay_id option").length - 1;
    var scopes_count  = $("#scopes option").length - 1;
    var occupants_count  = $("#occupantsid option").length - 1;
    var status_count  = $("#state_id option").length - 1;
    console.log(occupants_count);
    $('#category_id').children()[categ_count].selected = true;
    $('#barangay_id').children()[brgy_count].selected = true;
    $('#state_id').children()[status_count].selected = true;
    $('#scopes').children()[scopes_count].selected = true;
    $('#occupantsid').children()[occupants_count].selected = true;
</script>
@stop