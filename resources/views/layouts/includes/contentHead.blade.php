<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">{{ (!empty($current_menu) && isset($current_menu[0])) ? $current_menu[0] : 'Beranda' }}</h3>
        <div class="kt-subheader__breadcrumbs">
            <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
            @if(!empty($current_menu) && isset($current_menu[1]))
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">{{ $current_menu[1] }}</a>
            @endif
            @if(!empty($current_menu) && isset($current_menu[2]))
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">{{ $current_menu[2] }}</a>
            @endif
            @yield('additionalAction')
        </div>
    </div>
    <div class="kt-subheader__toolbar">
        <div class="kt-subheader__wrapper">
            <a class="btn kt-subheader__btn-secondary">{{ date('D') }}, {{ date('d') }} - {{ date('M') }} - {{ date('Y') }}</a>
            <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn kt-subheader__btn-primary" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    Pintasan &nbsp;
                    <!--<i class="flaticon2-calendar-1"></i>-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                         class="kt-svg-icon kt-svg-icon--sm">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                            <rect id="Rectangle-8" fill="#000000" x="4" y="5" width="16" height="3"
                                  rx="1.5"/>
                            <path d="M7.5,11 L16.5,11 C17.3284271,11 18,11.6715729 18,12.5 C18,13.3284271 17.3284271,14 16.5,14 L7.5,14 C6.67157288,14 6,13.3284271 6,12.5 C6,11.6715729 6.67157288,11 7.5,11 Z M10.5,17 L13.5,17 C14.3284271,17 15,17.6715729 15,18.5 C15,19.3284271 14.3284271,20 13.5,20 L10.5,20 C9.67157288,20 9,19.3284271 9,18.5 C9,17.6715729 9.67157288,17 10.5,17 Z"
                                  id="Combined-Shape" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__head">
                            Add anything or jump to:
                            <i class="flaticon2-information" data-toggle="kt-tooltip"
                               data-placement="right" title="Click to learn more..."></i>
                        </li>
                        <li class="kt-nav__separator"></li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-drop"></i>
                                <span class="kt-nav__link-text">Order</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                <span class="kt-nav__link-text">Ticket</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-link"></i>
                                <span class="kt-nav__link-text">Goal</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                <span class="kt-nav__link-text">Support Case</span>
                                <span class="kt-nav__link-badge">
															<span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
														</span>
                            </a>
                        </li>
                        <li class="kt-nav__separator"></li>
                        <li class="kt-nav__foot">
                            <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                            <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#"
                               data-toggle="kt-tooltip" data-placement="right"
                               title="Click to learn more...">Learn more</a>
                        </li>
                    </ul>

                    <!--end::Nav-->
                </div>
            </div>
        </div>
    </div>
</div>