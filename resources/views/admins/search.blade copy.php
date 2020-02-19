{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


<form class="m-0 p-0" action="{{ route('admins.searchresults')}}" method="POST" enctype="multipart/form-data"> 
                                @csrf
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" name="month">
                        <option value="" disabled selected>Choose Month</option>
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
                        <option value="13">All of</option>
                </select>
            </div>

        </div>
        <div class="col-md-2">
            <div class="form-group">
                    <select class="form-control" name="year">
                            <option value="2019" selected>2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                    </select>
            </div>
        </div>
    </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>


<div class="row wow fadeIn" style="background-color:white; padding:0 15px; margin:10px 0">
          
          <!--Grid column-->
          <div class="col-md-12 col-sm-12 mb-4">
            
            <div style="border-bottom:1px solid green; padding:10px 0; border-bottom:1px grey; background-color:white;  font-size:2rem">All Permits</div>
            <!--Card-->
            <div class="card" style="border-top: 1px solid green; padding-top:20px">
              <!--Card content-->
              <div class="card-body">
                <div class="table-responsive">
                <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0">
                   <thead>
                      <tr>
                      <th class="th-sm font-weight-bold text-muted">ID</th>
                      <th class="th-sm font-weight-bold text-muted">Application ID</th>
                      <th class="th-sm font-weight-bold text-muted">Status</th>
                      <th class="th-sm font-weight-bold text-muted">Name</th>
                      <th class="th-sm font-weight-bold text-muted">Barangay</th>
                      <th class="th-sm font-weight-bold text-muted">Category</th>
                      <th class="th-sm font-weight-bold text-muted">TCT</th>
                      <th class="th-sm font-weight-bold text-muted">Edit</th>
                      <th class="th-sm font-weight-bold text-muted">Accept</th>
                      <th class="th-sm font-weight-bold text-muted">Email</th>
                      </tr>
                   </thead>
                   <tbody>

                          @foreach($permits as $permit)
                          <tr>
                              <td style="font-size:1.6rem">{{$permit->id}}</td>
                              <td style="font-size:1.6rem"><a class="text-primary" href="{{route('admins.displaypermit', $permit->id)}}">  {{substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12)}}</a></td>
                              <td style="font-size:1.6rem">{{$permit->state->name}}</td>
                              <td style="font-size:1.6rem">{{$permit->fname}}  {{$permit->lname}}</td>
                              <td style="font-size:1.6rem">{{$permit->barangay->name}}</td>
                              <td style="font-size:1.6rem">{{$permit->category->name}}</td>
                              <td style="font-size:1.6rem">{{$permit->tct}}</td>
                              <td  class="text-center"><a href="{{ route('permits.edit', $permit->id) }}" class="btn btn-info btn-sm text-white">Edit</a></td>
                              <td  class="text-center"> 
                                  
                                
                                  @if(!isset($permit->accepted_date))  
                                  <form action="{{ route('permits.acceptpermit', $permit->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn btn-warning btn-sm">
                                        Accept
                                    </button>  
                                  </form>
                                  @else
                                  <form action="{{ route('permits.revokeacceptpermit', $permit->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn btn-secondary btn-sm">
                                    {{ date('d-M-Y', strtotime($permit->accepted_date)) }}
                                    </button>  
                                  </form>
                                    
                                  @endif
                              </td>
                              <td class="text-center">
                                
                              @if(isset($permit->email))  
                                <form action="{{ route('mail.send', $permit->id) }}" method="POST">
                                  @csrf
                                    <button type="submit" class="btn btn-sm" style="background-color:#930077; color:white">
                                    Email
                                    </button>  
                                </form>
                                  @endif  
                              </td>
                              

                          </tr>
                          @endforeach

                   </tbody>
                   <tfoot>
                      <tr>
                      <th class="font-weight-bold text-muted">ID</th>
                      <th class="font-weight-bold text-muted">Application ID</th>
                      <th class="font-weight-bold text-muted">Status</th>
                      <th class="font-weight-bold text-muted">Name</th>
                      <th class="font-weight-bold text-muted">Barangay</th>
                      <th class="font-weight-bold text-muted">Category</th>
                      <th class="font-weight-bold text-muted">TCT </th>
                      <th class="font-weight-bold text-muted">Edit</th>
                      <th class="font-weight-bold text-muted">Accept</th>
                      <th class="font-weight-bold text-muted">Email</th>
                      
                      </tr>
                    </tfoot>
                </table>
                </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->


        </div>
      <!--Grid row-->

      <!--------------------------------------------------------------------------------------------------------------  -->
      
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
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
      $(document).ready(function() {
$('.mdb-select').materialSelect();
});
     </script>
    
@stop