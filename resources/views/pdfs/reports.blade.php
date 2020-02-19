<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title></title>
 <style>

.page-break {
    page-break-after: always;
}

table {
    width: 100%;
}
table, th, td {
  border: 1px solid #8bbabb;
}

th, td {
  padding: 5px;
}

table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: #407088;
  color: white;
  text-align: center;
  font-size: .9rem;
}
td {
    font-size:.8rem;
}

.smaller {
    font-size:.7rem;
}

.report {
    font-size: 1.2rem;

    text-align: center;
    margin-bottom: 20px;
}

.totals {
    margin-top: 20px;
}

ul {
  list-style-type: none;
}

.detail {
    font-weight: bolder;
}

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="">
    <div class="report">
        <h4 class="">Office of the Building Official</h4>
        <h6 class="">Calapan Oriental Mindoro</h6>
        <h6 class="">{{$display_date}} Report </h6>
    </div>
    <table id="t01" class="" cellspacing="0">
        <thead>
            <tr>
            <th class="">Application ID</th>
            <th class="">Category</th>
            <th class="">Status</th>
            <th class="">Name</th>
            <th class="">Barangay</th>
            <th class="">Scope</th>
            <th class="">Occupancy</th>
            </tr>
        </thead>
        <tbody>

            @foreach($permits as $permit)
            <tr>
                <td>{{substr($permit->application_id,0,8) . "-" . substr($permit->application_id,8,12)}}</td>
                <td>{{$permit->category->name}}</td>
                <td>{{$permit->state->name}}</td>
                <td>{{$permit->fname}}  {{$permit->lname}}</td>
                <td>{{$permit->barangay->name}}</td>
                <td>
                    @foreach($scopes as $scope)
                            @if(isset($permit))
                                @if($permit->hasScope($scope->id))
                                {{ $scope->name}} <br>
                                @endif
                            @endif 
                    @endforeach
                </td>
                <td>
                    @foreach($occupants as $occupant)
                            @if(isset($permit))
                                @if($permit->hasOccupant($occupant->id))
                                {{ $occupant->name}} <br> 
                                @endif
                            @endif 
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="totals">
        <h5>Total: <span class="detail">{{$permits->count()}}</span></h5>
        <h5>Filters:</h5>
        <ul>
            <li>Year: <span class="detail"> {{$myYear}} </span></li>
            <li>Month: <span class="detail"> {{($myMonth == '13' ? 'All' : $month_name)}} </span></li>
            <li>Category: <span class="detail"> {{($myCategory == '100' ? 'All' : $category_name)}} </span></li>
            <li>Status: <span class="detail"> {{($myState == '100' ? 'All' : $state_name)}} </span></li>
            <li>Barangay: <span class="detail"> {{($myBarangay == '100' ? 'All' : $barangay_name)}} </span></li>
            <li>Scope of Work: <span class="detail"> {{($myScope == '100' ? 'All' : $scopes_name)}} </span></li>
            <li>Use/Character of Occupancy: <span class="detail"> {{($myCharacter == '100' ? 'All' : $occupant_name)}} </span></li>
        </ul>
    </div>
</div>

</body>
</html>