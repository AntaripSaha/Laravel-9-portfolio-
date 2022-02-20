@extends('layouts.admin.admin')


@section('admin_content')


<div class="container-fluid py-4">
 
 <div class="container">
    <div class="col-md-6">

        <form action="{{route('main.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="from-group col-md-3 mt-3 ">
                    <label for="img">Background Image</label>
                    <img src="{{url($main->bc_image)}}" class="img thumbnail" height="180px" width="280px">
                    <input style="margin-top: 23px;" class="mt-2" type="file" id="img" name="img">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div style="margin-left: 150px;margin-top: 0px;">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="" value="{{$main->title}}">

                    </div>
                    <div style="margin-left: 150px;margin-top: 23px;">
                        <label for="sub_title">Sub Title</label>
                        <input type="text" name="sub_title" id="" value="{{$main->sub_title}}">

                    </div>
                    <div style="margin-left: 150px;margin-top: 24px;">
                        <label for="resume">Resume</label>
                        <input type="file" name="resume" id="" {{$main->resume}}>
                    </div>
                </div>
            </div>

            <button type="submit" style="margin-top:100px; width:500px !important" class="btn btn-outline-info btn-lg">
                Submit
            </button>
        </form>
    </div>
 </div>


  <footer class="footer pt-3">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
       
        
      </div>
    </div>
  </footer>
</div>

@endsection
