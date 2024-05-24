


{{-- @include('layouts.navbaradmin.partials.navbar_vertical_collapse') --}}
@if(auth()->user()->hasRole('Admin'))
@include('layouts.navbaradmin.partials.admin')

@else
@include('layouts.navbaradmin.partials.user')
@endif

@include('layouts.navbaradmin.partials.icons_horizontal')

@include('layouts.navbaradmin.partials.top_nav_slim')

@include('layouts.navbaradmin.partials.top_navbar')
  
@include('layouts.navbaradmin.partials.navbar_top_slim')

@include('layouts.navbaradmin.partials.combo_navbar')

@include('layouts.navbaradmin.partials.combo_slim')

@include('layouts.navbaradmin.partials.dual_nav')

@include('layouts.navbaradmin.partials.search_box_modal')
