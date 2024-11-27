		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				{{-- @include('temp_source.partials.sidebar') --}}
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<div id="kt_header" style="" class="header align-items-stretch">
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							@include('temp_source.partials.mobile')
							@include('temp_source.partials.navbar')
						</div>
					</div>
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-xxl">

                                @yield('content')

							</div>
						</div>
					</div>
                    @include('temp_source.partials.footer')
				</div>
			</div>
		</div>
        @include('temp_source.partials.script.js')
