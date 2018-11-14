@if ($errors->any())
    <div class="alert alert-danger alert-dismissible" style="margin-bottom: 0px; margin-left: 15px; margin-right: 15px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4><i class="icon fa fa-ban"></i> @lang('admin.alert.error')</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible" style="margin-bottom: 0px; margin-left: 15px; margin-right: 15px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4><i class="icon fa fa-check"></i> @lang('admin.alert.success')</h4>
        {{ session('success') }}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning alert-dismissible" style="margin-bottom: 0px; margin-left: 15px; margin-right: 15px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4><i class="icon fa fa-warning"></i> @lang('admin.alert.warning')</h4>
        {{ session('warning') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible" style="margin-bottom: 0px; margin-left: 15px; margin-right: 15px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4><i class="icon fa fa-ban"></i> @lang('admin.alert.error')</h4>
        {{ session('error') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info alert-dismissible" style="margin-bottom: 0px; margin-left: 15px; margin-right: 15px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4><i class="icon fa fa-info"></i> @lang('admin.alert.info')</h4>
        {{ session('info') }}
    </div>
@endif

@push('js')
<script>
    $(".alert").click(function() {
        $(this).slideUp();
    });

    $('.alert-success').delay(5000).slideUp();
</script>
@endpush
