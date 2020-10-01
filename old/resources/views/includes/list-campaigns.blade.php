

 <?php
	if (str_slug( $key->title ) == '' ) {
		$slugUrl  = '';
	} else {
		$slugUrl  = '/'.str_slug( $key->title );
	}

	$url = url('campaign',$key->id).$slugUrl;
	$percentage = number_format($key->funds / $key->goal * 100, 2, '.', '');

  // Deadline
	$timeNow = strtotime(Carbon\Carbon::now());

	if ($key->deadline != '') {
	    $deadline = strtotime($key->deadline);

		$date = strtotime($key->deadline);
	    $remaining = $date - $timeNow;

		$days_remaining = floor($remaining / 86400);
	}
?>

<div class="siderproject__item" onclick="window.location.href = '/campaign/{{ $key->id }}/{{ $key->title }}'">
	<div class="border__slide">
		<div class="item__column">
			<div class="slide__ico">
				<img src="{{ asset('public/campaigns/small').'/'.$key->small_image }}" alt="">
			</div>
			<div class="item__like">
				<div class="like__text">funding</div>
				<div class="like__ico">
					<a href="">
						<img src="public/img/heart.png" alt="">
					</a>
				</div>
			</div>
			<div class="item__info">
				<div class="info__title">{{ $key->title }}</div>
				<div class="info__subtitle">{{ str_limit(strip_tags($key->description), 120, '...') }}</div>
			</div>
		</div>
		
		<div class="item__progress">
			<div class="progress__title">
			@if (isset($key->category->id ) && $key->category->mode == 'on')
				<a href="{{ url('category', $key->category->slug) }}" class="text-muted"><i class="far fa-folder-open"></i> {{ $key->category->name }}</a>
			@endif
			</div>
				<div class="progress__subtitle">
				<div class="sub__money">{{ App\Helper::amountFormat($key->funds) }} <span>usd raised</span></div>
				<div class="sub__procent">{{ $percentage }}%</div>
			</div> 
			<div class="progress__bar"></div>
			<div class="progress__time">
				<!--<div class=""><img src="public/img/time.png" alt=""></div> -->
				<div class="time__info">
					@if (isset( $deadline ) && $key->finalized == 0)

					  @if ($days_remaining > 0 )
						<i class="far fa-clock text-success"></i> {{ $days_remaining }} {{ trans('misc.days_left') }}
					  @elseif ($days_remaining == 0 )
						<i class="far fa-clock text-warning"></i> {{trans('misc.last_day')}}
					  @else
						<i class="far fa-clock text-danger"></i> {{ trans('misc.no_time_anymore').$days_remaining }}
					  @endif
					@endif
					@if ($key->finalized == 1)
					  <i class="far fa-clock text-danger"></i> {{ trans('misc.campaign_ended') }}
					  @endif

					  @if (!isset( $deadline) && $key->finalized == 0)
						<i class="fa fa-infinity text-success"></i> {{ trans('misc.no_deadline') }}
						@endif
				</div>
			</div>
		</div>
		</a>
	</div>
</div>
