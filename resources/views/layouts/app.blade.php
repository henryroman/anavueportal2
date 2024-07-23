<x-layouts.base>
    @php
        $routeName = request()->route()->getName();
    @endphp

    @if(in_array($routeName, ['dashboard', 'profile', 'profile-example', 'single-message', 'user-management', 'new-user', 'edit-user', 'new-role', 'edit-role', 'category-management', 'new-category', 'edit-category', 'tag-management', 'new-tag', 'edit-tag', 'item-management', 'new-item', 'edit-item', 'bootstrap-tables', 'transactions', 'buttons', 'forms', 'modals', 'notifications', 'typography', 'traffic-sources', 'app-analysis', 'tasks', 'calendar', 'map', 'datatables', 'bootstrap-tables', 'pricing', 'billing', 'invoice', 'widgets']))
        @can('view ' . $routeName)
            {{-- Nav --}}
            @include('layouts.nav')
            {{-- SideNav --}}
            @include('layouts.sidenav')
            <main class="content">
                {{-- TopBar --}}
                @include('layouts.topbar')
                {{ $slot }}
                {{-- Footer --}}
                @include('layouts.footer')
            </main>
        @endcan
    @elseif(in_array($routeName, ['role-management']))
        @can('view ' . $routeName)
            @include('layouts.nav')
            @include('layouts.sidenav')
            <main class="content">
                @include('layouts.topbar')
                {{ $slot }}
            </main>
        @endcan
    @elseif(in_array($routeName, ['404', '500', 'lock']))
        {{ $slot }}
    @elseif(in_array($routeName, ['sign-up', 'sign-in', 'forgot-password', 'reset-password', 'reset-password-example', 'sign-in-example', 'sign-up-example', 'forgot-password-example', 'reset-password-example']))
        {{ $slot }}
        {{-- Footer --}}
        @include('layouts.footer2')
    @endif
</x-layouts.base>
