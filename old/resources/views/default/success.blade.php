@extends('app')


@section('css')
<style>
/**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;
  height: 40px;
  padding: 11px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: white;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
  margin-bottom: 10px
}

.StripeElement--focus {
	border-color: #f45302;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
</style>

@endsection

@section('content')

<div class="jumbotron text-center">
      <div class="container wrap-jumbotron position-relative">
      	<h1 class="text-break">{{ trans('misc.pay_success') }}</h1>
		<a href="/index.php">{{ trans('misc.back_to_front') }}</a>
      </div>
    </div>

<!-- Container
============================= -->
<div class="container py-5">

  <div class="row">

</div><!-- Row -->

 </div><!-- container wrap-ui -->

@endsection
