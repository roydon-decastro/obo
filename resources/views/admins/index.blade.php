

@extends('layouts.navigations')

@section('content')

<div class="container">
      <div class="row d-flex flex-row justify-content-start pt-5 mb-4">
            <div class="col-sm white-text p-3 mr-1  orange">
                          <h2 class="">{{$newpermits->count()}}</h2>
                          <h4 class="mb-0 pb-3 pt-2"> <strong><i class="fas fa-file-signature"></i> New Permits </strong> </h4>
            </div>
            <div class="col-sm white-text p-3 mr-1  green">
                          <h2 class="">{{$processing->count()}}</h2>
                          <h4 class="mb-0 pb-3 pt-2"> <strong><i class="fas fa-cogs"></i> Processing </strong> </h4>
            </div>
            <div class="col-sm white-text p-3 mr-1  red">
                          <h2 class="">{{$immediates->count()}}</h2>
                          <h4 class="mb-0 pb-3 pt-2"> <strong><i class="fas fa-stopwatch"></i> Delays </strong> </h4>
            </div>
            <div class="col-sm white-text p-3 mr-1  blue">
                          <h2 class="">{{$completed->count()}}</h2>
                          <h4 class="mb-0 pb-3 pt-2"> <strong><i class="fas fa-check"></i> Completed </strong> </h4>
            </div>
      </div>



      <div class="row">
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
      </div>

      <div class="row mb-5">
              <div class="card">
                <div class="card-header blue  white-text">
                  <h3>Permits</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dtPermits" class="table table-striped" cellspacing="0">
                              <thead>
                                <tr>
                                <th>ID</th>
                                <th>App ID</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Barangay</th>
                                <th>Category</th>
                                @if(auth()->user()->hasUpdateAccess())
                                <th>Edit</th>
                                @endif
                                <th>Accept</th>
                                <th>Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                    @foreach($permits as $permit)
                                    <tr>
                                        <td>{{$permit->id}}</td>
                                        <td><a class="text-primary" href="{{route('admins.displaypermit', $permit->id)}}">  {{substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12)}}</a></td>
                                        <td>{{$permit->state->name}}</td>
                                        <td>{{$permit->fname}}  {{$permit->lname}}</td>
                                        <td>{{$permit->barangay->name}}</td>
                                        <td>{{$permit->category->name}}</td>
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
                                                <button type="submit" class="btn btn-success btn-sm">
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
                                      <th>ID</th>
                                      <th>Application ID</th>
                                      <th>Status</th>
                                      <th>Name</th>
                                      <th>Barangay</th>
                                      <th>Category</th>
                                      @if(auth()->user()->hasUpdateAccess())
                                      <th>Edit</th>
                                      @endif
                                      <th>Accept</th>
                                      <th>Email</th>
                                  </tr>
                              </tfoot>
                        </table>
                    </div>
                </div>
              </div>
      </div>

      <div class="row mb-5">
          @if($immediates->count() > 0)
              <div class="card" id="demo" class="collapse">
                    <div class="card-header red white-text">
                      <h3>For Immediate Action</h3>
                    </div>  
                    <div class="card-body">
                        <div class="table-responsive" >
                          <table id="immediateTable" class="table table-striped " cellspacing="0" >
                              <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Application ID</th>
                                    <th>Status</th>
                                    <th>Name</th>
                                    <th>Barangay</th>
                                    <th>Category</th>
                                    @if(auth()->user()->hasUpdateAccess())
                                    <th>Edit</th>
                                    @endif
                                    <th>Accept</th>
                                    <th>Email</th>
                                  </tr>
                              </thead>
                              <tbody>

                                      @foreach($immediates as $immediate)
                                      <tr>
                                          <td  class="">{{$immediate->id}}</td>
                                          <td  class=""><a class="text-primary" href="{{route('admins.displaypermit', $immediate->id)}}">  {{substr($immediate->application_id,0,8) . "-" . substr($immediate->application_id,8,12)}}</a></td>
                                          <td  class="">{{$immediate->state->name}}</td>
                                          <td  class="">{{$immediate->fname}}  {{$immediate->lname}}</td>
                                          <td  class="">{{$immediate->barangay->name}}</td>
                                          <td  class="">{{$immediate->category->name}}</td>
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
                                      <th>ID</th>
                                      <th>Application ID</th>
                                      <th>Status</th>
                                      <th>Name</th>
                                      <th>Barangay</th>
                                      <th>Category</th>
                                      @if(auth()->user()->hasUpdateAccess())
                                      <th>Edit</th>
                                      @endif
                                      <th>Accept</th>
                                      <th>Email</th>
                                  </tr>
                              </tfoot>
                          </table>
                        </div>
                    </div>
              </div>
          @endif
      </div>
      
      <div class="row mb-5">
            <div class="col-md-6 col-12" >    
                <h3>Permits By Status</h3>
                <div  style="background-color:white;">
                {!! $chart->container() !!}
                </div>
            </div>


            <div class="col-md-6 col-12" >    
                <h3>Permits By Categories</h3>
                <div  style="background-color:white;">
                {!! $categ_chart->container() !!}
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
    <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
    {!! $chart->script() !!}
    {!! $brgy_chart->script() !!}
    {!! $categ_chart->script() !!}
    
    <script>

  $(document).ready(function () {
    $('#dtPermits').DataTable({
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