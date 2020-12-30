@extends('layout.default')
@section('content')
<h1>Update Page</h1>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">
        <br />
        <form action="{{url('edit')}}/<?php echo$student[0]->id; ?>" method="post" id="demo-form2"  class="form-horizontal form-label-left" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Student Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="sname" id="first-name" value='<?php echo$student[0]->sname; ?>' required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Father's Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="fname" id="last-name" name="last-name" value='<?php echo$student[0]->fname; ?>' required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Class: <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="date-picker form-control col-md-7 col-xs-12 class" name="class">
                <option>--select class--</option>
                @foreach($classes as $i)
                  @if($i == $sclass)
                    <option selected>{{$i}}</option>
                  @else
                    <option>{{$i}}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Num <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="phnum" id="birthday" class="date-picker form-control col-md-7 col-xs-12" value='<?php echo$student[0]->phnum; ?>' required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="email" id="birthday" class="date-picker form-control col-md-7 col-xs-12" value='<?php echo$student[0]->email; ?>' required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Course: <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="date-picker form-control col-md-7 col-xs-12 courses" name="course">
                <option>-- Select Course --</option>
                @foreach($courses as $i)
                  @if($i->name == $sc)
                    <option selected value='{{$i->id}}'>{{$i->name}}</option>
                  @else
                    <option value='{{$i->id}}'>{{$i->name}}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a class='btn btn-primary' href="{{url('studentdetails')}}">Cancel</a>
              <button type="submit" name="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@push('footer-scripts')
<script type="text/javascript">
  $(document).on('change','.class',function(){ 
    class_name = $(this).val();
    $.ajax({
        url: "{{ url('student/courses') }}",
        dataType: "json",
        data: {"class":class_name, "_token": "{{ csrf_token() }}"},
        method: "post",
        success: function(data){
            var courses = '<option>-- Select Course --</option>';
            var arr = data.course.length;
            var aa = data.course;
            for(var i=0;i<arr;i++){
               courses += '<option value="'+aa[i].id+'">'+aa[i].name+'</option>';
            }
            $(".courses").html(courses);
        }
    });
});
</script>
@endpush


