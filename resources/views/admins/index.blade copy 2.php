{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'ACP')

@section('content_header')
    <!-- <h1>Dashboard</h1> -->
  
    
@stop

@section('content')
    <!-- <p>Welcome to this beautiful admin panel.</p> -->

  <div class="row">
    <div class="col-lg-12">
        <!--Main layout-->

        <main class="pt-5 mx-lg-5">
    <div class="container-fluid">
    
      <p style="color:#032535; font-size:1.2em;">Logged in as <em> {{ucwords(Auth::user()->name)}}</em></p>

      <div class="row mb-4">

          <div class="col-md-2 col-xs-5 col-6 mb-4" style="background:#fd5f00; color:white; margin:10px;">
                <div class="card">

                    <!-- Card image -->
                    <div class="">

                        <!-- Title -->
                        <h2 class="">{{$newpermits->count()}}</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2"> <strong> New Permits </strong> </h4>

                    </div>

 

                </div>
          </div>
          <div class="col-md-2 col-xs-5 col-6 mb-4" style="background:green; color:white; margin:10px;">
                <div class="card">

                    <!-- Card image -->
                    <div class="">

                        <!-- Title -->
                        <h2 class="">{{$processing->count()}}</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2"> <strong> Processing </strong> </h4>

                    </div>

                </div>
          </div>
          <div class="col-md-2 col-xs-5 col-6 mb-4"  style="background:#af0404; color:white; margin:10px;">
                <div class="card ">

                    <!-- Card image -->
                    <div class="">

                        <!-- Title -->
                        <h2 class="">{{$immediates->count()}}</h2>
                        <!-- Subtitle -->
                        <h4 class="mb-0 pb-3 pt-2"> <strong> Delays </strong> </h4>

                    </div>

                </div>
          </div>
          <div class="col-md-2 col-xs-5 col-6 mb-4"  style="background:#204969; color:white; margin:10px;">
                        <h2 class="">{{$completed->count()}}</h2>
                        <h4 class="mb-0 pb-3 pt-2"> <strong> Completed </strong> </h4>
          </div>



      </div>

      @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif

      @if(session()->has('error'))
          <div class="alert alert-danger">
              {{session()->get('error')}}
          </div>
      @endif

      <!-- Heading -->

      <!-- Heading -->

      <!--Grid row-->
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
                      @if(auth()->user()->hasUpdateAccess())
                      <th class="th-sm font-weight-bold text-muted">Edit</th>
                      @endif
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
                              @if(auth()->user()->hasUpdateAccess())
                              <td  class="text-center"><a href="{{ route('permits.edit', $permit->id) }}" class="btn btn-info btn-sm text-white">Edit</a></td>
                              @endif
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
                      @if(auth()->user()->hasUpdateAccess())
                      <th class="font-weight-bold text-muted">Edit</th>
                      @endif
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

      @if($immediates->count() > 0)

      <!--Grid row-->
      <div class="row wow fadeIn" style="background-color:white; padding:0 15px; margin:20px 0">

          <!--Grid column-->
          <div class="col-md-12 col-sm-12 mb-4">

            <!--Card-->
            <div  data-toggle="collapse" data-target="#demo" style="border-bottom:1px solid green; padding:10px 0; border-bottom:1px grey; background-color:white; color:red;  font-size:2rem">Delayed Permits</div>
              <div class="card" id="demo" class="collapse" style="border-top: 1px solid red; padding-top:20px">
              <!--Card content-->
              <div class="card-body">
              <div class="table-responsive" >
                <table id="immediateTable" class="table table-striped table-bordered" cellspacing="0" >
                    <thead>
                        <tr>
                          <th class="th-sm font-weight-bold text-muted">ID</th>
                        <th class="th-sm font-weight-bold text-muted">Application ID</th>
                        <th class="th-sm font-weight-bold text-muted">Status</th>
                        <th class="th-sm font-weight-bold text-muted">Name</th>
                        <th class="th-sm font-weight-bold text-muted">Barangay</th>
                        <th class="th-sm font-weight-bold text-muted">Category</th>
                        <th class="th-sm font-weight-bold text-muted">TCT</th>
                        @if(auth()->user()->hasUpdateAccess())
                        <th class="th-sm font-weight-bold text-muted">Edit</th>
                        @endif
                        <th class="th-sm font-weight-bold text-muted">Accept</th>
                        <th class="th-sm font-weight-bold text-muted">Email</th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach($immediates as $immediate)
                            <tr>
                                <td style="font-size:1.6rem" class="">{{$immediate->id}}</td>
                                <td style="font-size:1.6rem;" class=""><a class="text-primary" href="{{route('admins.displaypermit', $immediate->id)}}">  {{substr($immediate->application_id,0,8) . "-" . substr($immediate->application_id,8,12)}}</a></td>
                                <td style="font-size:1.6rem" class="">{{$immediate->state->name}}</td>
                                <td style="font-size:1.6rem" class="">{{$immediate->fname}}  {{$immediate->lname}}</td>
                                <td style="font-size:1.6rem" class="">{{$immediate->barangay->name}}</td>
                                <td style="font-size:1.6rem" class="">{{$immediate->category->name}}</td>
                                <td style="font-size:1.6rem" class="">{{$immediate->tct}}</td>
                                @if(auth()->user()->hasUpdateAccess())
                                <td  class="text-center"><a href="{{ route('permits.edit', $immediate->id) }}" class="btn btn-info btn-sm text-white">Edit</a></td>
                                @endif
                                <td  class="text-center"> 
                                    
                                  
                                    @if(!isset($immediate->accepted_date))  
                                    <form action="{{ route('permits.acceptpermit', $immediate->id) }}" method="POST">
                                    @csrf
                                      <button type="submit" class="btn teal lighten-2 btn-sm">
                                          Accept
                                      </button>  
                                    </form>
                                    @else
                                    <form action="{{ route('permits.revokeacceptpermit', $immediate->id) }}" method="POST">
                                    @csrf
                                      <button type="submit" class="btn teal darken-2 btn-sm">
                                      {{ date('d-M-Y', strtotime($immediate->accepted_date)) }}
                                      </button>  
                                    </form>
                                      
                                    @endif
                                </td>
                                <td class="text-center">
                                  
                                @if(isset($immediate->email))  
                                  <form action="{{ route('mail.send', $immediate->id) }}" method="POST">
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
                        <th class="font-weight-bold text-muted">TCT</th>
                        @if(auth()->user()->hasUpdateAccess())
                        <th class="font-weight-bold text-muted">Edit</th>
                        @endif
                        <th class="font-weight-bold text-muted">Accept</th>
                        <th class="font-weight-bold text-muted">Email</th>
                        
                        </tr>
                    </tfoot>
                </table>
              </div>
            </div>
            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->


        </div>
      @endif
  </main>

  <!--Main layout-->
    </div>
  </div>
  <div class="row" style="padding-left:20px; margin-bottom:50px;">
    <div class="col-md-6 col-xs-12" style="text-align:center;">    
      <h3 style="  color:white; background-color:#032535; padding:10px">Permits By Status</h3>
      <div  style="background-color:white;">
      {!! $chart->container() !!}
      </div>
    </div>


    <div class="col-md-6 col-xs-12" style="text-align:center">    
      <h3 style="  color:white; background-color:#032535; padding:10px">Permits By Categories</h3>
      <div  style="background-color:white;">
      {!! $categ_chart->container() !!}
      </div>
    </div>

  </div>
@stop
<!-------------------------------------------------------------------------------------------------------------------------------------  -->
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
    {!! $chart->script() !!}
    {!! $brgy_chart->script() !!}
    {!! $categ_chart->script() !!}
    
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