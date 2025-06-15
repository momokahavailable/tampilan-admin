{{-- resources/views/admin/layouts/sidebar.blade.php --}}
<div class="sidebar bg-dark text-white" id="sidebar">
    <div class="sidebar-header text-center py-4 border-bottom">
        <h4 class="mb-0">Tampilan Admin</h4>
    </div>

    <ul class="nav flex-column mt-3">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white px-4 py-2 {{ request()->routeIs('admin.dashboard') ? 'bg-secondary' : '' }}">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mt-auto">
            <form action="{{ route('admin.logout') }}" method="POST" class="px-4">
                @csrf
                <button type="submit" class="btn btn-danger w-100 mt-4">
                    <i class="fas fa-sign-out-alt me-2"></i> Keluar
                </button>
            </form>
        </li>
    </ul>
</div>
