
                <div class="siderproject__item">
					<div class="border__slide">
						<div class="item__column">
							<div class="slide__ico"><a href=""><img src="public/img/slider0.png" alt=""></a></div>
							<div class="item__like">
								<div class="like__text">funding</div>
								<div class="like__ico"><a href=""><img src="public/img/heart.png" alt=""></a></div>
							</div>
							<div class="item__info">
								<div class="info__title">Revolutionary Sketchbooks for Inktober2020</div>
								<div class="info__subtitle">Viviva and Inktober have created revolutionary new Art supplies to make this an Inktober to rememberViviva and Inktober have created revolutionary new Art supplies to make this an Inktober to remember</div>
							</div>
						</div>
		
						<div class="item__progress">
							<div class="progress__title">Tech &amp; Innovation</div>
							<div class="progress__subtitle">
								<div class="sub__money">$49 839 <span>usd raised</span></div>
								<div class="sub__procent">498%</div>
							</div>
							<div class="progress__bar"></div>
							<div class="progress__time">
								<div class=""><img src="public/img/time.png" alt=""></div>
								<div class="time__info">13 days left</div>
							</div>
						</div>
					</div>
                </div>
 <?php
	if (str_slug( $key->title ) == '' ) {
		$slugUrl  = '';
	} else {
		$slugUrl  = '/'.str_slug( $key->title );
	}

	$url = url('campaign',$key->id).$slugUrl;
	$percentage = number_format($key->donations()->sum('donation') / $key->goal * 100, 2, '.', '');

  // Deadline
	$timeNow = strtotime(Carbon\Carbon::now());

	if ($key->deadline != '') {
	    $deadline = strtotime($key->deadline);

		$date = strtotime($key->deadline);
	    $remaining = $date - $timeNow;

		$days_remaining = floor($remaining / 86400);
	}
?>
<div class="col-md-4">
  <div class="card campaigns mb-4 shadow-sm">
    <a href="{{ $url }}" class="p-relative">
      @if ($key->featured == 1)
      <div class="ribbon-1" title="{{ trans('misc.featured_campaign') }}"><i class="fa fa-award"></i></div>
    @endif
      <img class="card-img-top" src="{{ asset('public/campaigns/small').'/'.$key->small_image }}" alt="{{ $key->title }}">
    </a>
    <div class="card-body">
      @if (isset($key->category->id ) && $key->category->mode == 'on')
      <small class="btn-block mb-1"><a href="{{ url('category', $key->category->slug) }}" class="text-muted"><i class="far fa-folder-open"></i> {{ $key->category->name }}</a></small>
    @endif
      <h5 class="card-title text-truncate">
        <a href="{{ $url }}" class="text-dark">
          {{ $key->title }}
        </a>
      </h5>
      <div class="progress progress-xs mb-4">
        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $percentage }}%">
        </div>
      </div>
      <p class="card-text text-truncate">{{ str_limit(strip_tags($key->description), 80, '...') }}</p>
      <div class="d-flex justify-content-between align-items-center">
        <strong>{{ App\Helper::amountFormat($key->donations()->sum('donation')) }}</strong>
        <small class="font-weight-bold">{{ $percentage }}%</small>
      </div>
      <small class="text-muted">{{ trans('misc.raised_of') }} {{App\Helper::amountFormat($key->goal)}}</small>
      <hr>
      <div class="d-flex justify-content-between align-items-center">
        <span class="text-truncate">
          <img src="{{ asset('public/avatar').'/'.$key->user()->avatar }}" width="25" height="25" class="rounded-circle avatar-campaign">
            <small>{{ trans('misc.by') }} <strong>{{ $key->user()->name }}</strong></small>
          </span>
        </span>

        @if (isset( $deadline ) && $key->finalized == 0)

          @if ($days_remaining > 0 )
            <small class="text-truncate"><i class="far fa-clock text-success"></i> {{ $days_remaining }} {{ trans('misc.days_left') }}</small>
          @elseif ($days_remaining == 0 )
            <small class="text-truncate"><i class="far fa-clock text-warning"></i> {{trans('misc.last_day')}}</small>
          @else
            <small class="text-truncate"><i class="far fa-clock text-danger"></i> {{ trans('misc.no_time_anymore').$days_remaining }}</small>
          @endif

        @endif

        @if ($key->finalized == 1)
          <small class="text-truncate"><i class="far fa-clock text-danger"></i> {{ trans('misc.campaign_ended') }}</small>
          @endif

          @if (!isset( $deadline) && $key->finalized == 0)
            <small class="text-truncate"><i class="fa fa-infinity text-success"></i> {{ trans('misc.no_deadline') }}</small>
            @endif
      </div>
    </div>
  </div>
</div><!-- /col -->
