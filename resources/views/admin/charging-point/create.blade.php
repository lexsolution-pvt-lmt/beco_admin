@extends('admin.layouts.app')


@section('title', 'Main page')

<!-- Bootstrap fileupload css -->
    <link href="{{asset('plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet"/>
    
    <link href="{{asset('assets/css/bootstrap-imageupload.css')}}" rel="stylesheet">


@section('content')



<!-- Start Page content -->
<div class="content">
<div class="container-fluid">

<div class="row">
<div class="col-sm-12">
    <div class="box">
                            
        <div class="box-header with-border">
            <a href="{{ url('charging-point') }}">
                <button class="btn btn-danger btn-sm pull-right" type="submit">
                    <i class="mdi mdi-keyboard-backspace mr-2"></i>
                    @lang('view_pages.back')
                </button>
            </a>
        </div>

<div class="col-sm-12">

<form  method="post" class="form-horizontal" action="{{url('charging-point/create')}}" enctype="multipart/form-data">
{{csrf_field()}}


<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}" required="" placeholder="">
            <span class="text-danger">{{ $errors->first('name') }}</span>

        </div>
    </div>
    <div class="col-sm-6">
            <div class="form-group">
            <label for="owner_name">Type</label>
            <select name = "type" id = "type" class = "form-control" >
                <option value = "1">Nomal Charger</option>
                <option value = "2">Fast Charger</option>
            </select>
            <span class="text-danger">{{ $errors->first('owner_name') }}</span>

        </div>
    </div>
    <div class="col-sm-6">
            <div class="form-group">
            <label for="owner_name">Address</label>
            <input class="form-control" type="text" id="address" name="address" value="{{old('address')}}" required="" placeholder="">
            <span class="text-danger">{{ $errors->first('owner_name') }}</span>

        </div>
    </div>
    <div class="col-sm-6">
            <div class="form-group">
            <label for="owner_name">Latitute</label>
            <input class="form-control" type="text" id="lat" name="lat" value="{{old('lat')}}" required="" placeholder="">
            <span class="text-danger">{{ $errors->first('owner_name') }}</span>

        </div>
    </div>
    <div class="col-sm-6">
            <div class="form-group">
            <label for="owner_name">Longtute</label>
            <input class="form-control" type="text" id="long" name="long" value="{{old('long')}}" required="" placeholder="">
            <span class="text-danger">{{ $errors->first('owner_name') }}</span>

        </div>
    </div>
    <div class="col-sm-6">
            <div class="form-group">
            <label for="owner_name">Status</label>
            <select name = "status" id = "status" class = "form-control" >
                <option value = "1">Active</option>
                <option value = "0">Deactive</option>
            </select>
            <span class="text-danger">{{ $errors->first('owner_name') }}</span>

        </div>
    </div>
</div>


<div class="form-group">
        <div class="col-12">
            <button class="btn btn-primary pull-right mb-10" type="submit">
                @lang('view_pages.save')
            </button>
        </div>
    </div>

</form>

            </div>
        </div>


    </div>
</div>
</div>

</div>
<!-- container -->

</div>
<!-- content -->


<!-- Bootstrap fileupload js -->
<script src="{{asset('plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-imageupload.js')}}"></script>
<script>
    var $imageupload = $('.imageupload');
    $imageupload.imageupload();

    $('#imageupload-disable').on('click', function () {
        $imageupload.imageupload('disable');
        $(this).blur();
    })

    $('#imageupload-enable').on('click', function () {
        $imageupload.imageupload('enable');
        $(this).blur();
    })

    $('#imageupload-reset').on('click', function () {
        $imageupload.imageupload('reset');
        $(this).blur();
    });
</script>

@endsection

