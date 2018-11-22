@inject('request', 'Illuminate\Http\Request')

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        -->

        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">@lang('admin.management')</li>

            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>

            @can('manage users')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">{{ ucfirst(trans('admin.users')) }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-list"></i>
                            <span class="title">
                                @lang('admin.users.list')
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.create') }}">
                            <i class="fa fa-user-plus"></i>
                            <span class="title">
                                @lang('admin.users.create')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('manage roles')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench"></i>
                    <span class="title">{{ ucfirst(trans('admin.roles')) }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-list"></i>
                            <span class="title">
                                @lang('admin.roles.list')
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.roles.create') }}">
                            <i class="fa fa-plus"></i>
                            <span class="title">
                                @lang('admin.roles.create')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('manage permissions')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">{{ ucfirst(trans('admin.permissions')) }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-list"></i>
                            <span class="title">
                                @lang('admin.permissions.list')
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.permissions.create') }}">
                            <i class="fa fa-plus"></i>
                            <span class="title">
                                @lang('admin.permissions.create')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('manage debugger')
            <li><a href="{{ url('admin/debugger') }}"><i class="fa fa-bug"></i> <span>@lang('admin.debugger')</span></a></li>
            @endcan

        </ul>
    </section>
</aside>

@prepend('js')
<script>
    $(function () {
        var url = window.location;
        // Para o menu da barra lateral inteiramente mas não cobre o treeview
        $('ul.sidebar-menu a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

        // Para treeview
        $('ul.treeview-menu a').filter(function() {
            return this.href == url;
        }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
    });
</script>
@endprepend
