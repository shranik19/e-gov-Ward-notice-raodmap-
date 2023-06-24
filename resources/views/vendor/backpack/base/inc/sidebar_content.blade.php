{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('notice') }}"><i class="nav-icon la la-question"></i>
        Notices</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('event') }}"><i class="nav-icon la la-question"></i>
        Events</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('citizenship') }}"><i
            class="nav-icon la la-question"></i> Citizenships</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('birth') }}"><i class="nav-icon la la-question"></i>
        Births</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('death') }}"><i class="nav-icon la la-question"></i>
        Deaths</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('marriage') }}"><i class="nav-icon la la-question"></i> Marriages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('national') }}"><i class="nav-icon la la-question"></i> Nationals</a></li>