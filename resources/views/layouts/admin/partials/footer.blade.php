<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>@lang('admin.version')</b> {{ config('adminlte.version') }}
    </div>

    <strong>Copyright &copy; {{ config('adminlte.since_year') }}-{{ Carbon\carbon::now()->year }}
    <a href="{{ route('home') }}">{{ config('adminlte.footer_name') }}</a>.</strong>
    @lang('admin.all_rights_reserved')
</footer>
