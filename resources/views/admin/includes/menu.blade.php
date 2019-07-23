<div class="app-sidebar__user">
    <a href="{{ route('home') }}">
        {{--        @dd($company);--}}
        {{--        <img class="app-sidebar__user-avatar" src="{{ asset($company_common->logo) }}" alt="User Image" height="50" width="50">--}}
        <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    </a>

    <div>
        <a href="{{ route('home') }}"><p class="app-sidebar__user-name">Vali Admin</p></a>
        <p class="app-sidebar__user-designation">Admin</p>
    </div>
</div>

<ul class="app-menu">
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Company Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('view-company') }}"><i class="icon fa fa-circle-o"></i>Add Company Info</a></li>
        </ul>
    </li>


    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Page</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('new-page') }}"><i class="icon fa fa-circle-o"></i>Add Page</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Article Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('article-category') }}"><i class="icon fa fa-circle-o"></i>Category</a></li>
            <li><a class="treeview-item" href="{{ route('article-sub-category') }}"><i class="icon fa fa-circle-o"></i>Sub Category</a></li>
            <li><a class="treeview-item" href="{{ route('article-category-news') }}"><i class="icon fa fa-circle-o"></i>News</a></li>
        </ul>
    </li>

{{--    <li class="treeview">--}}
{{--        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">News Body</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
{{--        <ul class="treeview-menu">--}}
{{--            <li><a class="treeview-item" href="{{ route('news-body') }}"><i class="icon fa fa-circle-o"></i>Add Body</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">User</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('new-user') }}"><i class="icon fa fa-circle-o"></i>Add user</a></li>
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Change Password</a></li>
        </ul>
    </li>


</ul>



