@extends('admin.layouts.main')
@section('title')تعديل الرسالة
@endsection
@section('style')
@endsection

@section('content')
<section class="content-header">
      <h1>
      تعديل رسالة السيد {{ $cont->name }}
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li ><a href="{{url('/adminpanel/contacts')}}">التحكم في الرسائل</a></li>
        <li class="active"><a href="{{url('/adminpanel/contacts/'.$cont->id.'/edit')}}">تعديل الرسالة</a></li>
        
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تعديل بيانات رسالة السيد{{$cont->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             {!! Form::Model($cont,['route'=>['contacts.update',$cont->id],'method'=>'PUT']) !!}
           @include('admin.contact.form')
           {!! Form::close() !!}
           </form>
            </div>
          </div>
        </div>
      </div>
</section>



@endsection    