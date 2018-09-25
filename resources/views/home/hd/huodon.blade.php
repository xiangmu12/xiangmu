 @include('layouts.qt._header') @include('layouts.qt._top')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/ueditor/liandong/js/jquery.cxselect.js"></script>
<style>

	/*.container-fluid{
		background-color: white;

	}
	.span12 img{
		padding: 20px;
		margin: 10px;
	}*/

	.row-fluid{
		background-color: #ddd;
		padding: 70px;
		margin: 70px;
	}

</style>
<!-- Main Content -->
<main class="main-content">
    <div class="breadcrumb-wrapper" style="background-image:url(/ueditor/images/3.jpg);>
				<nav class=" breadcrumb " role="navigation " aria-label="breadcrumbs ">
					<a href="/ " title="Back to the frontpage ">首页</a>
					<span aria-hidden="true ">&rsaquo;</span>
					<span>最新活动</span>
				</nav>
				<h1 class="section-header__title ">最新活动</h1>
			</div>
			<div class="container-fluid">
	<div class="container-fluid">
		@foreach($huo as $v)
	<div class="row-fluid">
		
		<div class="span12">
			<a href="/huoh/{{$v['id']}}"><h3 class="text-center">
				{{$v['title']}}
			</h3>
			</a>
			<center><img alt="140x140" src="{{$v['image']}}" class="img-rounded" style="width: 800px;height: 350px;" /></center>
			<p class="text-center">
				{{$v['content']}}
			</p>
			<h5 class="text-right">{{$v['opentime']}}~~~{{$v['overtime']}}</h5>
			
		</div>
		
		
	</div><hr>
	@endforeach
</div>
</div>
		</main>
	@include('layouts.qt._floor')