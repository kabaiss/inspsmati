@extends('layouts.main')
@section('title')
قائمة عمال المعهد
@endsection
@section('style')
<style type="text/css">
	

	.histo{
font-weight: 700;

}
.histo h2{
	text-transform: uppercase;
	padding-top:40px;
	padding-bottom: 50px;
	color:#333;
	font-weight: bolder;
}
	.titre{
		color:green;
		font-size: 16px;
		font-weight: bold;
	}
	.titre1{
		color:red;
		font-size: 16px;
		font-weight: bold;
	}
	.entrep{
  margin-top:120px;
  font-family: 'Changa', sans-serif;
 
  
}
aside{
	margin-top:50px;
	background-color: #fff;
	padding-bottom: 40px;
	padding-top: 40px;

	
}
aside ul{
list-style: none;


}
aside ul li{
	list-style-type: none;
	display: block;
	width:85%;
	margin-right: -7%;
	height: 50px;
	background-color: #11b7e6;
	color: #fff;
	font-size: 15px;
	font-weight: bold;
	margin-bottom: 15px


}
aside ul li a{
	text-decoration: none;
	color: #fff;
}
aside ul li:hover a{
	background-color: #ccc
	color: #fff;
}

</style>
@endsection


@section('content')
<div class="mot">
<div class="row">
<div class="col-sm-3">
<aside>
<ul>
<li class="wow rotateInDownRight" data-wow-delay="1s"><a href="{{url('entreprises/motdirect')}}">كلمة السيد المدير </a></li>
<li class="wow rotateInDownRight" data-wow-delay="1.2s"><a href="{{url('cadres')}}">إطارات المؤسسة </a></li>
<li class="wow rotateInDownRight" data-wow-delay="1.4s"><a href="{{url('entreprises/histo')}}"> نبذة عن المؤسسة</a></li>
<li class="wow rotateInDownRight" data-wow-delay="1.6s"><a href="{{url('entreprises/comites')}}"> لجانالمؤسسة</a></li>
<li class="wow rotateInDownRight" data-wow-delay="1.8s"><a href="{{url('entreprises/reception')}}">الاستقبال والتوجيه </a></li>
<li class="wow rotateInDownRight" data-wow-delay="2s"><a href="{{url('news')}}"> أخبار امؤسسة</li>

</ul>
</aside>
</div>

<div class="col-sm-9">
<div class="histo">

<div class="wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s" style="float: right" > 
<img src="{{asset('images/cent1.jpg')}}" alt="directeur" style="width:150px;height: 150px;border-radius: 50%;display: block;margin-top: 20px;">
</div>
<div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s"  style="margin-top: 50px;margin-right:25px;font-size: 16px;" > <h2 class="text-center">كلمة السيد المدير</h2></div>

<div class="clearfix"></div>
<p style="margin-top: 50px;font-size:16px;font-weight: bold;background-color: #fff;padding: 12px">
	
	{{getsetting('motdirect')}}
</p>




</div>
</div>
</div>

</div>

@endsection


