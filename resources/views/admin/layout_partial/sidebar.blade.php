
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{url('admin/index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                        Admins
                    </a>
                    <a class="nav-link" href="{{url('admin/site_nav_one_form')}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                        Site Nav One
                    </a>
                    <a class="nav-link" href="{{url('admin/site_nav_two_form')}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-list" aria-hidden="true"></i></div>
                        Site Nav Two
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fa fa-archive" aria-hidden="true"></i></div>
                        Queries
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        Orders
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fa fa-tag" aria-hidden="true"></i></div>
                        Discounts
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                        Transactions
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                        Visit Site
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
{{--                 @if(\Illuminate\Support\Facades\Auth::user()->role_id=1)--}}
{{--                    Admin--}}
{{--                @else--}}
{{--                User--}}
{{--                @endif--}}
            </div>
        </nav>
