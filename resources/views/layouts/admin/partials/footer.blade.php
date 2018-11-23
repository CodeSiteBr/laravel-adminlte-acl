<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>@lang('admin.version')</b> {{ config('adminlte.version') }}
    </div>
    <div class="text-center">
        • @lang('admin.all_rights_reserved') {{ config('adminlte.since_year') }}-{{ Carbon\carbon::now()->year }} &copy; <a href="{{ route('home') }}">{{ config('adminlte.footer_name') }}</a> •
        @lang('admin.produced_by') <a href="{{ config('adminlte.produced_url') }}">{{ config('adminlte.produced_by') }}</a> •
    </div>
</footer>
