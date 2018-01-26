@extends('layouts.header-and-footer')
@section('content')
<script type="text/javascript">
	$(document).ready(function(){
		$('.dropdown-list').hide();
		$('.order_detail').on('click', function(){
			if($('.dropdown-list').is(':hidden')) {
				$(this).parent().parent().nextUntil('.order').toggle();
			} else {
				$(this).parent().parent().nextUntil('.order').toggle();
			}
		});
	});
</script>
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
					<li style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile') }}">
							<p style="font-size: 20px;">{{ trans('account.profile') }}</p>
						</a>
					</li>
					<li style="background-color: #53EF0E;padding:7px">
						<a class="ico ico-user" href="{{ url('profile/orders/') }}">
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
				<table class="table table-hover table-striped">
					<tr>
						<th>{{ trans('account.no') }}</th>
						<th>{{ trans('account.name') }}</th>
						<th>{{ trans('account.phone') }}</th>
						<th>Email</th>
						<th>{{ trans('account.address') }}</th>
						<th>{{ trans('account.payment') }}</th>
						<th>{{ trans('account.total') }}</th>
						<th>{{ trans('account.status') }}</th>
						<th>{{ trans('account.date') }}</th>
						<th>{{ trans('account.action') }}</th>
					</tr>
					@foreach($order as $key => $item)
						<tr style="background-color: #E4E1E1" class="order">
							<td>{{ $key + 1 }}</td>
							<td>{{ $item->name }}</td>
							<td>{{ $item->phone }}</td>
							<td>{{ $item->email }}</td>
							<td>{{ $item->address }}</td>
							<td>{{ $item->payment }}</td>
							<td>{{ number_format($item->total) }}</td>
							<td>{{ $item->note }}</td>
							<td>{{ $item->created_at }}</td>
							<td colspan="9" style="text-align: center;">
								<button class="fa fa-sort-down order_detail"></button>
							</td>
						</tr>
						<tr class="dropdown-list">
							<th colspan="2"></th>
							<th>No.</th>
							<th>Product ID</th>
							<th>Product Name</th>
							<th>Thumbnail</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Total</th>
							<th></th>
							<th></th>
						</tr>
							@foreach($item->product as $list => $p)
							<tr class="dropdown-list">
								<td colspan="2"></td>
								<td>{{ $list + 1 }}</td>
								<td>{{ $p->id }}</td>
								<td>{{ $p->name }}</td>
								<td>
									<img src="{{ asset('uploads/product/'.$p->thumbnail) }}" />
								</td>
								@foreach($order_detail as $o)
									@if($item->id == $o->product_id)
									<?php $quantity = $o->quantity ?>
										<td>{{ $o->quantity }}</td>
									@endif
								@endforeach
								<td>{{ number_format($p->price,0,',','.') }}</td>
								<td>{{ number_format($p->price * $quantity,0,',','.') }}</td>
							</tr>
						@endforeach
					@endforeach
				</table>
			</div> 
			
	</div>
</div>
@endsection
