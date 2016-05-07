@extends('layouts')
@section('nyojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('nyojcontent')
<div class="pad60 nyojcontent">
	<nav class="center">
	{!! $list->render() !!}
	</nav>
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-condensed">
			<tr>
				<th class="center">
					题号
				</th>
				<th class="center">
					难度
				</th>
				<th class="center">
					题目
				</th>
				<!--<th class="center">
					正确率
				</th>
				<th class="center">
					通过/提交
				</th>-->
			</tr>
			@foreach ($list as $rec)
			<tr>
				<td class="center">
					{{$rec->pid}}
				</td>
				<td class="center">
					{{$rec->difficult}}
				</td>
				<td>
					<a href="/ioj/public/nyoj/pid/{{$rec->pid}}">
						{{$rec->title}}
					</a>
				</td>
				<!--<td class="center">
					{{$rec->ratio}}
				</td>
				<td class="center">
					{{$rec->ac}}/{{$rec->submit}}
				</td>-->
			</tr>
			@endforeach
		</table>
	</div>
	<nav class="center">
	{!! $list->render() !!}
	</nav>
</div>
@endsection