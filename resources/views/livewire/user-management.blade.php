<div>
    <title>Volt Laravel Dashboard - User Management</title>
    <div class="py-4">
        <div class="dropdown">
            <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>New Task
            </button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                <a class="dropdown-item d-flex align-items-center" href="/new-user">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                    Add User
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>                            
                    Edit Users
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path><path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path></svg>                            
                    Upload Files
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Preview Security
                </a>
                <div role="separator" class="dropdown-divider my-1"></div>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                    Upgrade to Pro
                </a>
            </div>
        </div>
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="/">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="/security">Security</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Users List')}}</li>
                    </ol>
                </nav>
                <h2 class="h4">{{__('User Management')}}</h2>
                <p class="mb-0">{{__('Your user management dashboard template.')}}</p>
            </div>
            @can('create', auth()->user())
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('new-user') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"><svg
                        class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg> {{__('New User')}}</a>
                <div class="btn-group ms-2 ms-lg-3">
                    <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
                </div>
            </div>
            @endcan
        </div>
        <div class="card card-body shadow-sm table-wrapper table-responsive">
            <div class="table-settings mb-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-9 col-lg-8 d-md-flex">
                        <div class="input-group me-2 me-lg-3 fmxw-300">
                            <span class="input-group-text"><svg class="icon icon-xs"
                                    x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg></span></span>
                            <input wire:model="search" type="text" class="form-control" placeholder="Search users">
                        </div>
                        <div class="col-3 d-flex">
                            <select wire:model="entries" class="form-select fmxw-100 d-none d-md-inline" id="entries"
                                aria-label="Entries per page">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            @if($showSuccessNotification)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="fas fa-bullhorn me-1"></span>
                {{__('User deleted.')}}
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="fas fa-bullhorn me-1"></span>
                        {{ session('success') }}
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <x-table>
                <x-slot name="head">
                    <x-table.heading sortable wire:click="sortBy('first_name')"
                        :direction="$sortField === 'first_name' ? $sortDirection : null">{{__('Name')}}
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('role_id')"
                        :direction="$sortField === 'role_id' ? $sortDirection : null">{{__('Role')}}
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('created_at')"
                        :direction="$sortField === 'created_at' ? $sortDirection : null">{{__('Date created')}}
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('status')"
                        :direction="$sortField === 'status' ? $sortDirection : null">{{__('Status')}}
                    </x-table.heading>
                    @can('manage-users', auth()->user())
                    <x-table.heading>{{__('Action')}}</x-table.heading>
                    @endcan
                </x-slot>

                <x-slot name="body">
                    @foreach ($users as $user)
                    <x-table.row>
                        <x-table.cell>
                            <a href="#" class="d-flex align-items-center">
                                <img src="{{$user->avatarUrl()}}" class="avatar rounded-circle me-3" alt="Avatar">
                                <div class="d-block">
                                    <span class="fw-bold">{{ $user->first_name . ' ' . $user->last_name }}</span>
                                    <div class="small text-gray">{{ $user->email }}</div>
                                </div>
                            </a>
                        </x-table.cell>
                        <x-table.cell>{{ $user->role->name }}</x-table.cell>
                        <x-table.cell>{{ $user->date_for_humans }}</x-table.cell>
                        <x-table.cell><span class="fw-normal text-{{ $user->status_color }}"> {{ $user->status }} </span>
                        </x-table.cell>
                        <x-table.cell>
                            @if($user->id !=1 && auth()->user()->can('update', $user) || auth()->user()->can('delete',
                            $user))
                            @if($user->id != auth()->user()->id)
                            <x-button.link>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('edit-user', ['id' => $user->id]) }}"><span
                                        class="fas fa-user-shield me-2"></span> {{__('Edit user')}}</a>
                                <a onclick="confirm('Are you sure you want to remove the user from this group?') || event.stopImmediatePropagation()"
                                    wire:click="delete({{ $user->id }})"
                                    class="dropdown-item text-danger rounded-bottom"><span
                                        class="fas fa-user-times me-2"></span>{{__('Delete user')}}</a>
                                
                            </x-button.link>
                            @endif
                            @endif
                        </x-table.cell>
                    </x-table.row>
                    @endforeach
                </x-slot>
            </x-table>
            <div class="mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
