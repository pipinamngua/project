@extends('layouts.header-and-footer')
@section('content')
<div class="main">
	<div class="content">
		<div class="section group">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="background-color: #f1f1f1;text-align: center;">
				<br>
				<h1>{{ trans('account.dashboard') }}</h1>
				<br>
				<h1>
					<img src="{{ asset('uploads/users/'. Auth::user()->avatar) }}" width="50px" height="50px">
					<br>
					{{ Auth::user()->name }}
				</h1>
				<br>
				<ul>
					<li style="background-color: #53EF0E;padding:7px">
						<a class="ico ico-user" href="{{ url('profile') }}">
							<p style="font-size: 20px;">{{ trans('account.profile') }}</p>
						</a>
					</li>
					<li style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile/orders') }}">
							<p style="font-size: 20px">{{ trans('account.order') }}</p>
						</a>
					</li>
					<li style="padding:7px" style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile/reviews') }}">
							<p style="font-size: 20px">{{ trans('account.review') }}</p>
						</a>
					</li>
					<li style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile/contacts') }}">
							<p style="font-size: 20px">{{ trans('account.contact') }}</p>
						</a>
					</li>
				</ul>
				<br>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				@if(Session::has('success_change_profile'))
					<p style="color: #00F0FF">{{ Session::get('success_change_profile') }}</p>
				@endif

				@if(Session::has('success_change_password'))
					<p style="color: #00F0FF">{{ Session::get('success_change_password') }}</p>
				@endif
				

				{!! Form::open(['method' => 'POST', 'url' => 'profile/'.Auth::user()->id, 'files' => true]) !!}

					<label for="username">{{ trans('account.username') }}</label>
					{!! Form::text('username', Auth::user()->name, ['id' => 'username', 
													 				'class' => 'form-control']) !!}
					<br>
					<label for="gender">{{ trans('account.gender') }}</label><br>
					<div style="margin-left: 30px;margin-top: 5px">
						{!! Form::radio('gender', 'male', true) !!}{{ trans('account.male') }}
						{!! Form::radio('gender', 'female') !!}{{ trans('account.female') }}
					</div>
					<br>
					<label for="email">Email</label>
					{!! Form::text('email', Auth::user()->email, ['id' => 'email',
																  'readonly' => true,
																  'class' => 'form-control']) !!}
					<br>
					<label for="dob">{{ trans('account.dob') }}</label>
					{!! Form::date('dob', Auth::user()->dob, ['id' => 'dob',
															   'class' => 'form-control']) !!}
					<br>
					<label for="address">Add{{ trans('account.address') }}ress</label>
					{!! Form::text('address', Auth::user()->address, ['id' => 'address',
															   'class' => 'form-control']) !!}
					<br>
					<label for="phone">{{ trans('account.phone') }}</label>
					{!! Form::text('phone', Auth::user()->phone, ['id' => 'phone',
															   'class' => 'form-control']) !!}
					<br>
					<label for="avatar">Avatar</label>
					{!! Form::file('avatar', ['class' => 'form-control']) !!}
					<br>
					{!! Form::submit('Edit') !!}

				{!! Form::close() !!}
				
					<a class="btn btn-primary" href="{{ url('profile/change-password/') }}" style="color: white;margin-top: 10px">
						{{ trans('account.change-password') }}
					</a>
			</div>
		</div>
	</div>
</div>
@endsection
