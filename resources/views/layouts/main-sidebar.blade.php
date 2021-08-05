<div class="user-info">
    <div class="image">
        <img src="{{ url ('assets/images/user.png') }}" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
        <div class="email">admin@example.com</div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="javascript:void(0);"><i class="material-icons">group</i>Ubah Password</a></li>
                <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Favorite</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="/">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">map</i>
                <span>Data Master</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/maps/google.html">Area Parkir</a>
                </li>
                <li>
                    <a href="pages/maps/yandex.html">Biaya Parkir</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">view_list</i>
                <span>Data Operasional</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="pages/tables/normal-tables.html">Data Area</a>
                </li>
                <li>
                    <a href="pages/tables/jquery-datatable.html">Data Role</a>
                </li>
                <li>
                    <a href="pages/tables/editable-table.html">Data Admin</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="/monitoring">
                <i class="material-icons">computer</i>
                <span>Monitoring</span>
            </a>
        </li>

    </ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
        &copy; 2021 - 2022 <a href="javascript:void(0);">STTI</a>.
    </div>
    <div class="version">
        <b>Version: </b> 1.0
    </div>
</div>
<!-- #Footer -->