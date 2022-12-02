@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@php($dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home'))

@if (config('adminlte.use_route_url', false))
    @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
@else
    @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
@endif

<a href="{{ $dashboard_url }}"
    @if ($layoutHelper->isLayoutTopnavEnabled()) class="navbar-brand {{ config('adminlte.classes_brand') }}"
    @else
        class="brand-link {{ config('adminlte.classes_brand') }}" @endif>

    {{-- Small brand logo --}}

    @if (auth()->user()->company)
        <img src="{{ auth()->user()->company->logo_path ? Storage::url(auth()->user()->company->logo_path) : secure_assetconfig('adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}"
            alt="{{ config('adminlte.logo_img_alt', 'AdminLTE') }}"
            class="{{ config('adminlte.logo_img_class', 'brand-image img-circle elevation-3') }}">
    @else
        <img src="{{ secure_assetconfig('adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}"
            alt="{{ config('adminlte.logo_img_alt', 'AdminLTE') }}"
            class="{{ config('adminlte.logo_img_class', 'brand-image img-circle elevation-3') }}">
    @endif



    {{-- Brand text --}}
    <span class="brand-text font-weight-bold {{ config('adminlte.classes_brand_text') }}">
        {!! auth()->user()->company ? auth()->user()->company->name : config('adminlte.logo', '<b>Admin</b>LTE') !!}
    </span>

</a>
