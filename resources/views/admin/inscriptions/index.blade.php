@extends('admin.layouts.main')
@section('title')
التحككم في التسجيلات الأولية
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/buttons.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/jquery.dataTables.min')}}">
@endsection

@section('content')
<section class="content-header">
      <h1>
       التحككم في التسجيلات
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{url('/adminpanel/inscriptions')}}">التحككم في التسجيلات</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تسيير التسجيلات الأولية</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>الاسم</th>
                  <th>اللقب</th>
                  <th>تاريخ الميلاد</th>
                  <th>العنوان</th>
                  <th>التخصص</th>
                  <th>الدورة</th>
                  <th>تأكيد</th>
                  <th>تاريخ الإضافة</th>
                  <th>التحكم</th>
                </tr>
                </thead>

                <tbody>
                
                </tbody>

                <tfoot>
                <tr>
                  <th>#</th>
                  <th>الاسم</th>
                  <th>اللقب</th>
                  <th>تاريخ الميلاد</th>
                  <th>العنوان</th>
                  <th>التخصص</th>
                  <th>الدورة</th>
                  <th>تأكيد</th>
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

<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/buttons.flash.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('admin/plugins/datatables/vfs_fonts.js')}}"></script>
   <script type="text/javascript" src="{{asset('admin/plugins/datatables/jszip.min.js')}}"></script>


 
<script type="text/javascript">
  var table = $('#data').DataTable({
     
      serverSide: true,
      ajax: '{{ url('/adminpanel/inscriptions/data') }}',
      columns: [
          {data: 'numins', name: 'numins'},
          {data: 'nomins', name: 'nomins'},
          {data: 'prenomins', name: 'prenomins'},
           {data: 'dobins', name: 'dobins'},
            {data: 'adrins', name: 'adrins'},
            {data: 'special', name: 'special'},
            {data: 'session', name: 'session'},
            {data: 'confirm', name: 'confirm'},
             
          {data: 'created_at', name: 'created_at'},
        /*  {data:'admin',name:'admin'},*/
         
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
      fixedHeader: true,
      dom: 'Bfrtip',
        buttons: [
            'print','excel','pdf','copy'
        ]
  });

 


</script>
@endsection


