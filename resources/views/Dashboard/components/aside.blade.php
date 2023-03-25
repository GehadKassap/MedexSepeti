<nav id="sidebar">
    <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);">
        </a>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    Products
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{ route("products.index") }}">All Prdocuts</a>
                    </li>
                    <li>
                        <a href="{{ route("products.create") }}">Create New Product</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    Categories
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{ route("categories.index") }}">All Categories</a>
                    </li>
                    <li>
                        <a href="{{ route("categories.create") }}">Create Category</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    Settings
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu1">
                    <li>
                        <a href="{{ route("settings.index") }}">All Settings</a>
                    </li>
                    <li>
                        <a href="{{ route("settings.create") }}">Create Setting</a>
                    </li>

                </ul>
            </li>
        </ul>

        <div class="footer">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.medexsepeti.com/en" target="_blank">MedexSepeti</a>
            </p>
        </div>

    </div>
</nav>
