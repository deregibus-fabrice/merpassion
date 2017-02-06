<div>
	<div class="logo">
        {{ Html::image('img/logo.jpg', 'Logo Mer Passion') }}		

    @foreach ( config('app.languages') as $user)
	    @if($user !== config('app.locale'))
			<div>
		            <a href="{!! url('language') !!}/{{ $user }}"><img width="32" height="32" alt="{{ $user }}" src="{!! asset('img/' . $user . '-flag.png') !!}"></a>
		    </div>
    	@endif
    @endforeach
	</div>

	<div class="navbar">
		 <div class="navbar-inner">
	        <ul class="nav nav-tabs nav-justified">
	            <li><a href="{{ url('/') }}">{{ trans('site.home') }}</a></li>
	            <li class="dropdown">
	            	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('site.rents') }}<span class="caret"></span></a>
	            	<ul class="dropdown-menu">
	            		<li><a href="{{ url('rents/boats') }}">{{ trans('site.boats') }}</a></li>	
	            		<li><a href="{{ url('rents/jetski') }}">{{ trans('site.jetski') }}</a></li>
	            	</ul>
	            </li>
	            <li><a href="{{ url('contact') }}">{{ trans('site.contact') }}</a></li>
	        </ul>
	    </div>
	</div>
</div>