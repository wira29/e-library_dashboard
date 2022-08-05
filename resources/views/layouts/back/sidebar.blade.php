<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li>
                    <a href="index-2.html"
                        ><i data-feather="home"></i> <span>Dashboard</span></a
                    >
                </li>
                <li class="{{ request()->is('admin/loan*') ? 'active' : '' }}">
                    <a href="{{ route('loan.index') }}"
                        ><i data-feather="file-text"></i>
                        <span>Peminjaman</span></a
                    >
                </li>
                <li
                    class="submenu {{ (request()->is('admin/category*') || request()->is('admin/book*')) ? 'active' : '' }}"
                >
                    <a href="#"
                        ><i data-feather="clipboard"></i>
                        <span> Data Buku</span> <span class="menu-arrow"></span
                    ></a>
                    <ul>
                        <li>
                            <a
                                href="{{ route('book.index') }}"
                                class="{{ request()->is('admin/book*') ? 'active' : '' }}"
                                >Buku</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{ route('category.index') }}"
                                class="{{ request()->is('admin/category*') ? 'active' : '' }}"
                                >Kategori</a
                            >
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="payments.html"
                        ><i data-feather="credit-card"></i>
                        <span>Pembayaran</span></a
                    >
                </li>

                <li class="menu-title">
                    <span>Pengaturan</span>
                </li>
                <li class="{{ request()->is('admin/admin*') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}"
                        ><i data-feather="user-plus"></i> <span>Admin</span></a
                    >
                </li>
                <li  class="{{ request()->is('admin/setting*') ? 'active' : '' }}">
                    <a href="{{ route('setting.index') }}"
                        ><i data-feather="user"></i> <span>Profile</span></a
                    >
                </li>
            </ul>
        </div>
    </div>
</div>
