<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
	<div class="main-sidebar-header active">
		<a class="desktop-logo logo-light active" href="{{ url('/' . $page='home') }}"><img
					src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
		<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='home') }}"><img
					src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
		<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='home') }}"><img
					src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
		<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='home') }}"><img
					src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
	</div>
	<div class="main-sidemenu">
		<div class="app-sidebar__user clearfix">
			<div class="dropdown user-pro-body">
				<div class="">
					<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/faces/6.jpg')}}"><span
							class="avatar-status profile-status bg-green"></span>
				</div>
				<div class="user-info">
					<h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
					<span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
				</div>
			</div>
		</div>
		<ul class="side-menu">
			<li class="slide">
				<a class="side-menu__item" href="{{ url('/' . $page='admin') }}">
					<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
						<path d="M0 0h24v24H0V0z" fill="none"/>
						<path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
						<path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
					</svg>
					<span class="side-menu__label">{{trans('main_header_trans.Home')}}</span></a>
			</li>
			@can('الاقسام')
				<li class="slide">
					<a class="side-menu__item" href="{{ url('/' . $page='sections') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
							<path d="M0 0h24v24H0V0z" fill="none"/>
							<path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z"
								  opacity=".3"/>
							<path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/>
						</svg>
						<span class="side-menu__label">{{trans('main_header_trans.Department')}}</span></a>
				</li>
			@endcan
			@can('المستخدمين')
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
							<path d="M0 0h24v24H0V0z" fill="none"/>
							<path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z"
								  opacity=".3"/>
							<circle cx="15.5" cy="9.5" r="1.5"/>
							<circle cx="8.5" cy="9.5" r="1.5"/>
							<path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
						</svg>
						<span class="side-menu__label">{{trans('main_header_trans.Users')}}</span><i class="angle fe fe-chevron-down"></i></a>
					<ul class="slide-menu">
						@can('قائمة العملاء')
							<li><a class="slide-item" href="{{ url('/' . $page='clients') }}">{{trans('main_header_trans.Users')}}</a></li>
						@endcan
						@can('قائمة المندوبين')
							<li><a class="slide-item" href="{{ url('/' . $page='delegates') }}">{{trans('main_header_trans.Department')}}</a></li>
						@endcan
					</ul>
				</li>
			@endcan
			@can('المشرفين')
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
							<path d="M0 0h24v24H0V0z" fill="none"/>
							<path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/>
							<path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/>
						</svg>
						<span class="side-menu__label">{{trans('main_header_trans.Moderators')}}</span><i class="angle fe fe-chevron-down"></i></a>
					<ul class="slide-menu">
						@can('قائمة المشرفين')
							<li><a class="slide-item" href="{{ url('/' . ($page = 'roles')) }}">{{trans('main_header_trans.Moderators_powers')}}</a>
							</li>
						@endcan

						@can('صلاحيات المشرفين')
							<li><a class="slide-item" href="{{ url('/' . ($page = 'users')) }}">{{trans('main_header_trans.List_moderators')}}</a>
							</li>
						@endcan
					</ul>
				</li>
			@endcan
			@can('تواصل معنا')
				<li class="slide">
					<a class="side-menu__item" href="{{ url('/' . $page='connect-us') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
							<path d="M0 0h24v24H0V0z" fill="none"/>
							<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/>
							<path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/>
						</svg>
						<span class="side-menu__label">{{trans('main_header_trans.Connect_us')}}</span></a>
				</li>
			@endcan
		</ul>
	</div>
</aside>
<!-- main-sidebar -->
