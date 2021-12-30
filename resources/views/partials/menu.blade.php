<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
	<div class="sidebar-brand d-none d-md-flex">
		<svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
			<use xlink:href="assets/brand/coreui.svg#full"></use>
		</svg>
		<svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
			<use xlink:href="assets/brand/coreui.svg#signet"></use>
		</svg>
	</div>
	<ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
		<div class="simplebar-wrapper" style="margin: 0px;">
			
			<div class="simplebar-mask">
				<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
					<div class="simplebar-content-wrapper" style="height: 100%; ;">
						<div class="simplebar-content" style="padding: 0px;">
							<li class="nav-item">
								<a class="nav-link" href="index.html">
									<svg class="nav-icon">
										<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
									</svg> 
									Dashboard
									<span class="badge badge-sm bg-info ms-auto">NEW</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									<svg class="nav-icon">
										<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
									</svg> 
									{{ __('Logout') }}
									<span class="badge badge-sm bg-info ms-auto">NEW</span>
								</a>
							</li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
		                        @csrf
		                    </form>
						</div>
					</div>
				</div>
			</div>
			<div class="simplebar-placeholder" style="width: 256px; height: 841px;"></div>
		</div>
		
		
	</ul>
	<button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>