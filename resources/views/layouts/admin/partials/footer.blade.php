<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>@lang('admin.version')</b> {{ config('adminlte.version') }}
    </div>
    <strong>Copyright &copy; 2016-{{ Carbon\carbon::now()->year }} <a href="{{ route('home') }}">{{ env('APP_NAME') }}</a>.</strong> @lang('admin.all_rights_reserved')
</footer>
