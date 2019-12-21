<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>


      <div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{Request::is('dashboard') ? 'active' : ''}}">
                <a class="menu-item" href="{{url('dashboard')}}" data-i18n="nav.templates.vert.main"><i class="icon-home"></i>Dashboard</a>
            </li>

            {{-- Category Management --}}
            <li class="nav-item {{Request::is('categories') ? 'active' : ''}}"><a href="#"><i class="fa fa-book"></i><span class="menu-title" data-i18n="nav.dash.main">Manage Category</a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{url('categories')}}" data-i18n="nav.templates.vert.main">Product Category</a>
                    </li>
                
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">Sub Category</a>
                    </li>
                </ul>
            </li>

            
            {{-- End Of Category Management --}}

            {{-- Inventory Product --}}

            <li class="nav-item {{Request::is('produk') ? 'active' : ''}}"><a href="#"><i class="fa fa-folder-open"></i><span class="menu-title" data-i18n="nav.dash.main">Inventory Product</a>
                <ul class="menu-content">
                        <li>
                            <a class="menu-item" href="{{url('produk/manual_input')}}" data-i18n="nav.templates.vert.main">Add Product</a>
                        </li>
                
                        <li>
                            <a class="menu-item" href="{{url('produk/')}}" data-i18n="nav.templates.vert.main">Product masuk</a>
                        </li>
                        <li>
                            <a class="menu-item" href="{{url('produk/goods_stock')}}" data-i18n="nav.templates.vert.main">Product Stock</a>
                        </li>

                        <li>
                            <a class="menu-item" href="{{url('produk/flow_barang?from=2019-11-20&to=2020-12-20')}}" data-i18n="nav.templates.vert.main">Product Flow</a>
                        </li>
                </ul>
            </li>

            {{-- End Of Inventory Product --}}

            {{-- Point Of Sales --}}
            <li>
                <a class="menu-item" href="/kigspos" data-i18n="nav.templates.vert.main"><i class="fa fa-money"></i>Point Of Sales</a>
            </li>

            {{-- Report Dashboard --}}
            <li class="nav-item nav-item {{Request::is('transaksi') ? 'active' : ''}}"><a href="#"><i class="fa fa-bar-chart"></i><span class="menu-title" data-i18n="nav.dash.main">Report Dashboard</a>
                <ul class="menu-content">
                        
                
                        <li>
                            <a class="menu-item" href="{{url('transaksi')}}" data-i18n="nav.templates.vert.main">Transaction</a>
                        </li>
                        <li>
                            <a class="menu-item" href="{{url('sales')}}" data-i18n="nav.templates.vert.main">Sales</a>
                        </li>
                </ul>
            </li>

            {{-- User Management --}}

            <li class="nav-item nav-item {{Request::is('user') ? 'active' : ''}}"><a href="#"><i class="fa fa-user"></i><span class="menu-title" data-i18n="nav.dash.main">User Management</a>
                <ul class="menu-content">
                        <li>
                            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">Add User</a>
                        </li>
                
                        <li>
                            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">User List</a>
                        </li>
                </ul>
            </li>


          </div>
      </div>