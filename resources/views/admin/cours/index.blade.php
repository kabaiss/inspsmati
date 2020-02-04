@extends('admin.layouts.main')
@section('title')
التحككم في الدروس
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('content')
<section class="content-header">
      <h1>
       التحككم في الدروس
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{url('/adminpanel/'.auth::user()->id.'cours/')}}">التحككم في الدروس</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تسيير الرسائل</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>#</th>
                 <th>التخصص</th>
                  <th>المقياس</th>
                  <th>العنوان</th>
                  <th>الوصف</th>
                  <th>رابط الملف</th>
                <th>تاريخ الإضافة</th>
                  <th>التحكم</th>
                  
                </tr>
                </thead>

                <tbody>
                
                </tbody>

                <tfoot>
                <tr>
                   <th>#</th>
                    <th>التخصص</th>
                  <th>المقياس</th>
                  <th>العنوان</th>
                  <th>الوصف</th>
                  <th>رابط الملف</th>
                <th>تاريخ الإضافة</th>
                  <th>التحكم</th>
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection



@section('script')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">

  var table = $('#data').DataTable({
     
      serverSide: true,
      ajax: '{{ url('/adminpanel/'.auth::user()->id.'/cours/data') }}',
      columns: [
          {data: 'id', name: 'id'},
          {data: 'special', name: 'special'},
          {data: 'module', name: 'module'},
          {data: 'titre', name: 'titre'},
           {data: 'descrip', name: 'descrip'},
            {data: 'fichier', name: 'fichier'},
             
          {data: 'created_at', name: 'created_at'},
       
         
          {data: 'control', name:'control',serachable:false,orderable:false}
      ],
      "language": {
          "url": "{{ Request::root()  }}/admin/custom/Arabic.json"
      },
      "stateSave": false,
      "responsive": true,
      "order": [[0, 'desc']],
      "pagingType": "full_numbers",
      aLengthMenu: [
          [25, 50, 100, 200, -1],
          [25, 50, 100, 200, "All"]
      ],
      iDisplayLength: 25,
      fixedHeader: true
  });

 

  

</script>
@endsection


