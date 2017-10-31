@extends('master')

@section('content')
	<div class="container">
		<div id="header"> <!-- start of header -->
			<span class="signboard"></span>
			<ul id="infos">
				<li class="home">
					<a href="#">HOME</a>
				</li>
				<li class="phone">
					<a href="http://localhost:8000/contact">04 000 111 999</a>
				</li>
				<li class="address">
					<a href="http://localhost:8000/contact">nguyenvantrung2015@gmail.com</a>
				</li>
			</ul>
			@if(Auth::check())
				@if(Auth::user()->role)
					<ul id="infos1">
						<li><a href="{{route('logout')}}">Log out </a></li>
						<li>
							{{--<a href="http://localhost:8000/profile">--}}
							{{--Chào Admin {{Auth::user()->name}}--}}
							{{--</a>--}}
							<div class="dropdown">
								<div style="margin-top: 5px" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									Chào Admin {!! Auth::user()->name !!}
									<span class="caret"></span>
								</div>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="background: blue">
									<li><a href="http://localhost:8000/profile/{!! Auth::user()->id !!}" >Thông tin admin</a></li>
									<li><a href="http://localhost:8000/admin/user/danhsach">Quản lý</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<a href="#" id="logo"></a>
					<ul id="navigation">
						<li ><a href="http://localhost:8000/trangchu"><span>Home</span></a></li>
						<li class="main current"><a href="http://localhost:8000/menu"><span>Menu</span></a></li>
						<li ><a href="http://localhost:8000/food"><span>Food</span></a></li>
						<li><a href="http://localhost:8000/drinks"><span>Drinks</span></a></li>
					</ul>
				@else
					<ul id="infos1">
						<li><a href="{{route('logout')}}">Log out </a></li>
						<li><a href="http://localhost:8000/profile/{!! Auth::user()->id !!}">
								Chào Bạn {!! Auth::user()->name !!}
							</a>
						</li>
						<li><a href="http://localhost:8000/history">
								History
							</a>
						</li>
					</ul>
					<a href="#" id="logo"></a>
					<ul id="navigation">
						<li ><a href="http://localhost:8000/trangchu"><span>Home</span></a></li>
						<li class="main current"><a href="http://localhost:8000/menu"><span>Menu</span></a></li>
						<li ><a href="http://localhost:8000/food"><span>Food</span></a></li>
						<li><a href="http://localhost:8000/drinks"><span>Drinks</span></a></li>
						<li><a href="http://localhost:8000/suggest"><span>Suggest</span></a></li>
					</ul>
					<div class="text-right" >
						<a href="http://localhost:8000/giohang" style="font-size: 18px;text-decoration: none;font-family: fantasy">Giỏ Hàng</a>
					</div>
				@endif
			@else
				<ul id="infos1">
					<li><a href="http://localhost:8000/signup">Sign up</a></li>
					<li><a href="http://localhost:8000/signin">Sign in</a></li>
				</ul>
				<a href="#" id="logo"></a>
				<ul id="navigation">
					<li ><a href="http://localhost:8000/trangchu"><span>Home</span></a></li>
					<li class="main current "><a href="http://localhost:8000/menu"><span>Menu</span></a></li>
					<li><a href="http://localhost:8000/food"><span>Food</span></a></li>
					<li><a href="http://localhost:8000/drinks"><span>Drinks</span></a></li>
				</ul>
		@endif<!-- /#navigation -->
		</div>
		<div id="contents"> <!-- start of contents -->
			<h2 style="background-color: white"><span>Menu</span></h2>
			<div class="row" style="padding-bottom: 20px">
				<div class="col-lg-6">
					<div class="input-group">
						<form action="{{route('search')}}" method="get">
							<input type="text" style="width: 300px;border-radius: 0" class="form-control" name = "ten_sp" placeholder="Search for...">
							<span style="float: left;padding-left: 10px">
								<button class="btn btn-success" type="submit" >Tìm Kiếm</button>
							</span>
						</form>
					</div><!-- /input-g＞roup -->
				</div>
			</div>

			<style>
				#menus table {
					width: 420px;
				}
				#menus table tr td a {
					text-decoration: none;font-family: 'Fira Code';font-size: 20px;
				}
				#menus table tr td
				{
					text-align: left;
					padding: 20px;
				}
				#menus table tr
				{
					border-bottom: 1px solid black;
				}
			</style>
			<div id="menus"><!-- /.col-lg-6 -->
				<ul>
					<li>
						<h3>Food</h3>
						<table>
							@foreach($do_an as $da)
								<tr>
									<td width="80%"><a href="http://localhost:8000/product/{!! $da->id !!}">{!! $da->name !!}</a></td>
									<td width="20%"><span class="price">${!! $da->price !!}</span></td>
								</tr>
							@endforeach
						</table>
					</li>
					<li>
						<h3>Drinks</h3>
						<table>
							@foreach($do_uong as $du)
								<tr>
									<td width="80%"><a href="http://localhost:8000/product/{!! $du->id !!}">{!! $du->name !!}</a></td>
									<td width="20%"><span class="price">${!! $du->price !!}</span></td>
								</tr>
							@endforeach
						</table>
					</li>
				</ul>
			</div>
			@if(count($do_an)>=count($do_uong))
				<div class="row">{!! $do_an->links() !!}</div>
			@else
				<div class="row">{!! $do_uong->links() !!}</div>
			@endif
		</div>  <!-- end of contents -->
		<div class="clear" style="clear: both"></div>
	</div>
@endsection