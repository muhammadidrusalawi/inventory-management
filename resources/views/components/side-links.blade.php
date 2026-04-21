<nav class="flex flex-col gap-1 py-1">
    <a href="/dashboard"
       class="flex items-center gap-4 px-4 py-2 rounded-lg transition
       {{ request()->is('dashboard') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-icon lucide-house w-4 h-4"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
        <span class="text-sm">Dashboard</span>
    </a>

    @can('users.view')
        <a href="{{ route('categories.index') }}"
           class="flex items-center gap-4 px-4 py-2 rounded-lg transition
           {{ request()->is('categories*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid-icon lucide-layout-grid w-4 h-4"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
            <span class="text-sm">Categories</span>
        </a>
    @endcan

    <a href="{{ route('products.index') }}"
       class="flex items-center gap-4 px-4 py-2 rounded-lg transition
       {{ request()->is('products*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-icon lucide-package w-4 h-4"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"/><path d="M12 22V12"/><polyline points="3.29 7 12 12 20.71 7"/><path d="m7.5 4.27 9 5.15"/></svg>
        <span class="text-sm">Products</span>
    </a>

    <a href="#"
       class="flex items-center gap-4 px-4 py-2 rounded-lg transition
       {{ request()->is('stocks*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-checks-icon lucide-list-checks w-4 h-4"><path d="M13 5h8"/><path d="M13 12h8"/><path d="M13 19h8"/><path d="m3 17 2 2 4-4"/><path d="m3 7 2 2 4-4"/></svg>
        <span class="text-sm">Stocks</span>
    </a>

    <a href="#"
       class="flex items-center gap-4 px-4 py-2 rounded-lg transition
       {{ request()->is('suppliers*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck-icon lucide-truck w-4 h-4"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>
        <span class="text-sm">Suppliers</span>
    </a>

    <a href="#"
       class="flex items-center gap-4 px-4 py-2 rounded-lg transition
       {{ request()->is('orders*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text-icon lucide-receipt-text w-4 h-4"><path d="M13 16H8"/><path d="M14 8H8"/><path d="M16 12H8"/><path d="M4 3a1 1 0 0 1 1-1 1.3 1.3 0 0 1 .7.2l.933.6a1.3 1.3 0 0 0 1.4 0l.934-.6a1.3 1.3 0 0 1 1.4 0l.933.6a1.3 1.3 0 0 0 1.4 0l.933-.6a1.3 1.3 0 0 1 1.4 0l.934.6a1.3 1.3 0 0 0 1.4 0l.933-.6A1.3 1.3 0 0 1 19 2a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1 1.3 1.3 0 0 1-.7-.2l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.934.6a1.3 1.3 0 0 1-1.4 0l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-1.4 0l-.934-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-.7.2 1 1 0 0 1-1-1z"/></svg>
        <span class="text-sm">Purchase Orders</span>
    </a>

    <a href="#"
       class="flex items-center gap-4 px-4 py-2 rounded-lg transition
       {{ request()->is('sales*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined-icon lucide-chart-no-axes-combined w-4 h-4"><path d="M12 16v5"/><path d="M16 14v7"/><path d="M20 10v11"/><path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"/><path d="M4 18v3"/><path d="M8 14v7"/></svg>
        <span class="text-sm">Sales Orders</span>
    </a>

    @can('users.view')
        <a href="{{ route('users.index') }}"
           class="flex items-center gap-4 px-4 py-2 rounded-lg transition
           {{ request()->routeIs('users.*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users w-4 h-4"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
            <span class="text-sm">Users</span>
        </a>
    @endcan

    @can('roles.view')
        <a href="{{ route('roles.index') }}"
           class="flex items-center gap-4 px-4 py-2 rounded-lg transition
           {{ request()->routeIs('roles.*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-cog-icon lucide-user-cog w-4 h-4"><path d="M10 15H6a4 4 0 0 0-4 4v2"/><path d="m14.305 16.53.923-.382"/><path d="m15.228 13.852-.923-.383"/><path d="m16.852 12.228-.383-.923"/><path d="m16.852 17.772-.383.924"/><path d="m19.148 12.228.383-.923"/><path d="m19.53 18.696-.382-.924"/><path d="m20.772 13.852.924-.383"/><path d="m20.772 16.148.924.383"/><circle cx="18" cy="15" r="3"/><circle cx="9" cy="7" r="4"/></svg>
            <span class="text-sm">Roles</span>
        </a>
    @endcan

    @can('permissions.view')
        <a href="{{ route('permissions.index') }}"
           class="flex items-center gap-4 px-4 py-2 rounded-lg transition
           {{ request()->is('permissions*') ? 'bg-emerald-600 text-white' : 'text-gray-700 hover:bg-gray-100 hover:text-black' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check-icon lucide-shield-check w-4 h-4"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
            <span class="text-sm">Permissions</span>
        </a>
    @endcan
</nav>
