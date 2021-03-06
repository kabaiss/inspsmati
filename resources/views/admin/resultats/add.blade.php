
@extends('admin.layouts.main')
@section('title')
إضافة عامل جديد
@endsection
@section('style')
@endsection

@section('content')
<section class="content-header">
      <h1>
       أضافة عامل
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li ><a href="{{url('/adminpanel/entreprise/cadres')}}">التحكم في العمال</a></li>
        <li class="active"><a href="{{url('/adminpanel/entreprise/cadres/create')}}">عضو جديد</a></li>
        
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">أضف عضو جديد</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['url'=>'/adminpanel/resus/saveimport','method'=>'POST','class'=>'form-horizental','enctype'=>'multipart/form-data']) !!}
           
  <div class="form-group{{ $errors->has('res') ? ' has-error' : '' }}">
   

    <div class="col-md-7">
     {!! Form::file('res',['class'=>'form-control']) !!}

        @if ($errors->has('res'))
            <span class="help-block">
                <strong>{{ $errors->first('res') }}</strong>
            </span>
        @endif
       </div>
    <label for="res" class="col-md-3 control-label">رفع المف:</label>
    <div class="clearfix"></div>

</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            حفظ البيانات
        </button>
    </div>
</div>
           {!!  Form::close()!!}
            </div>
          </div>
        </div>
      </div>
</section>

@endsection    





