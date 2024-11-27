<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
    <div class="d-flex align-items-stretch" id="kt_header_nav">
        <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                <div class="menu-item me-lg-1">
                    <a href="{{url('/admin/index')}}">
                        <div class="text-dark fs-1">{{ $title }}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-stretch flex-shrink-0">
        <div class="d-flex align-items-stretch flex-shrink-0">
            <div class="d-flex align-items-center ms-1 ms-lg-3">
                <div class="position-relative me-3" id="kt_drawer_chat_toggle">
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">HI,</small>
                    <small class="fs-6 fw-bold my-1 ms-1">{{ strtoupper(auth()->user()->name ?? 'Guest') }}</small>
                </div>
            </div>
            <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_admin_menu_toggle">
                <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <img src="{{ auth()->check() && auth()->user()->siswa && auth()->user()->siswa->gambar ? asset('storage/' . auth()->user()->siswa->gambar) : asset('assets/media/images/blank-profile-picture.jpg') }}" alt="user" style="border-radius: 50%"/>
                </div>
                @include('temp_source.partials.modal.user')
            </div>
        </div>
    </div>
</div>
