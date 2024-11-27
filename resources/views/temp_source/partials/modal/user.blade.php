<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
    data-kt-menu="true">
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <div class="symbol symbol-50px me-5">
                <img class="rounded-md menu-icon" style="width:75px; height:75px; border-radius: 50%;"
                src="{{ auth()->check() && auth()->user()->siswa && auth()->user()->siswa->gambar ? asset('storage/' . auth()->user()->siswa->gambar) : asset('assets/media/images/blank-profile-picture.jpg') }}" />
            </div>
            <div class="d-flex flex-column">
                <div class="fw-bolder d-flex align-items-center fs-5">
                    {{ strtoupper(auth()->user()->name ?? 'Guest') }}
                    <span
                        class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{ auth()->user()->role->role_name ?? 'Guest' }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="separator my-2"></div>
    <div class="menu-item px-5">
        <a class="menu-link btn" href="{{ url('/profil') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                            fill="currentColor" />
                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                            fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">My Profile</span>
        </a>
    </div>
    <div class="menu-item px-5">
        <form action="{{ url('/sign-out') }}" method="POST">
            @csrf
            <button type="submit" class="menu-link btn" style="width: 100%">
                <span class="menu-icon">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" width="12" height="2" rx="1"
                                transform="matrix(-1 0 0 1 20 11)" fill="currentColor" />
                            <path
                                d="M18.1313 11.6927L16.3756 10.2297C15.9054 9.83785 15.8732 9.12683 16.306 8.69401C16.6957 8.3043 17.3216 8.28591 17.7336 8.65206L20.6592 11.2526C21.1067 11.6504 21.1067 12.3496 20.6592 12.7474L17.7336 15.3479C17.3216 15.7141 16.6957 15.6957 16.306 15.306C15.8732 14.8732 15.9054 14.1621 16.3756 13.7703L18.1313 12.3073C18.3232 12.1474 18.3232 11.8526 18.1313 11.6927Z"
                                fill="currentColor" />
                            <path opacity="0.5"
                                d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                </span>
                <span class="menu-title">Sign Out</span>
            </button>
        </form>
    </div>
</div>
