<div class="box-body no-padding">
    <div class="">
      <table class="table table-hover">
    <thead>
    <tr>


    <th> @lang('view_pages.s_no')
    <span style="float: right;">

    </span>
    </th>

    <th> Name
    <span style="float: right;">
    </span>
    </th>
    <th>Type
    <span style="float: right;">
    </span>
    </th>
    <th> Address
    <span style="float: right;">
    </span>
    </th>
      <th> Latitute
    <span style="float: right;">
    </span>
    </th>
    <th> Longtute
    <span style="float: right;">
    </span>
    </th>
    <th> Status
    <span style="float: right;">
    </span>
    </th>
    
    </tr>
    </thead>
    <tbody>
    @if(count($results)<1)
    <tr>
        <td colspan="11">
        <p id="no_data" class="lead no-data text-center">
        <img src="{{asset('assets/img/dark-data.svg')}}" style="width:150px;margin-top:25px;margin-bottom:25px;" alt="">
     <h4 class="text-center" style="color:#333;font-size:25px;">@lang('view_pages.no_data_found')</h4>
 </p>
    </tr>
    @else

    @php  $i= $results->firstItem(); @endphp

    @foreach($results as $key => $result)

    <tr>
    <td>{{ $i++ }} </td>
    <td> {{ $result->name }}</td>
    @if($result->type == "1")
    <td><button class="btn btn-success btn-sm">Nomal Charger</button></td>
    @elseif($result->type == "2")
    <td><button class="btn btn-warning btn-sm">Fast Charger</button></td>
    @endif
    
    <td>{{$result->address}}</td>
    <td>{{$result->lat}}</td>
    <td>{{$result->long}}</td>
    @if($result->status == "1")
    <td><button class="btn btn-success btn-sm">Active</button></td>
    @else
    <td><button class="btn btn-danger btn-sm">InActive</button></td>
    @endif
    <td>

    <div class="dropdown">
    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('view_pages.action')
    </button>
        <div class="dropdown-menu">
            <!--  -->
        </div>
    </div>

    </td>
    </tr>
    @endforeach
    @endif
    </tbody>
    </table>
    <div class="text-right">
    <span  style="float:right">
    {{$results->links()}}
    </span>
    </div>
    </div>
    </div>
