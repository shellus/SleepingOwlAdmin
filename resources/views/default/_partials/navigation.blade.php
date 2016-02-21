<div class="navbar-default sidebar" role="navigation">

	@yield('sidebar.top')

	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">

			@yield('sidebar.ul.top')

			@foreach(AdminNavigation::getRootSection()->getPages() as $item)
			<li @if($item->isActive())class="active"@endif>
				<a href="{{ $item->getUrl() }}">
					{!! $item->getIcon() !!}
					<span class="mm-text">{!! $item->getName() !!}</span>
				</a>
			</li>
			@endforeach

			@foreach(AdminNavigation::getRootSection()->getSections() as $section)
				@include(AdminTemplate::getTemplateViewPath('_partials.navigation.sections'), ['section' => $section])
			@endforeach

			@yield('sidebar.ul.bottom')

		</ul>

		@yield('sidebar.bottom')

	</div>
</div>