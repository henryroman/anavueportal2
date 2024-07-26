<style>
    #dropdown-menu {
        display: none;
        position: absolute;
        z-index: 1000;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        padding: 0.5rem 0;
        margin: 0;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
    }
</style>

<script>
    // Step 2: Function to copy JSON data to clipboard
    function copyToClipboard(jsonData) {
        // Create a temporary textarea element
        var tempTextarea = document.createElement('textarea');
        tempTextarea.value = JSON.stringify(jsonData.data, null, 2); // Pretty print the JSON data

        // Add the textarea to the document
        document.body.appendChild(tempTextarea);

        // Select the text
        tempTextarea.select();

        // Copy the text
        document.execCommand('copy');

        // Remove the textarea from the document
        document.body.removeChild(tempTextarea);
    }
</script>

<div>
    <title>AnaVue Portal - IAM</title>
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="/security">Security</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Identity and access management')}}</li>
                    </ol>
                </nav>
                <h2 class="h4">{{__('Identity and access management')}}</h2>
                <p class="mb-0">{{__('Customise who has access to what.')}}</p>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                {{-- <a href="{{ route('new-role') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"><svg
                        class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg> {{__('New Role')}}</a> --}}
                <div class="btn-group ms-2 ms-lg-3">
                    <button type="button" class="btn btn-sm btn-outline-gray-600" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Copied!" onclick="copyToClipboard({{ json_encode($roles) }})">
                        Copy
                    </button>
                    <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
                </div>
            </div>
        </div>
        <div class="card card-body shadow-sm table-wrapper table-responsive">
            <div class="table-settings mb-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-6 col-lg-4 d-flex">
                        <div class="input-group me-2 me-lg-3">
                            <span class="input-group-text"><svg class="icon icon-xs"
                                    x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg></span></span>
                            <input wire:model="search" type="text" class="form-control" placeholder="Search roles">
                        </div>
                        <div class="col-2 d-flex">
                            <select wire:model="entries" class="form-select mb-0" id="entries"
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
                {{__('Role deleted.')}}
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if($showFailNotification)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="fas fa-bullhorn me-1"></span>
                {{__('You cannot delete this role since it has users asigned to it.')}}
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
                    <x-table.heading sortable wire:click="sortBy('name')"
                        :direction="$sortField === 'name' ? $sortDirection : null">Name</x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('description')"
                        :direction="$sortField === 'description' ? $sortDirection : null">Description</x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('created_at')"
                        :direction="$sortField === 'created_at' ? $sortDirection : null">Date created</x-table.heading>
                    <x-table.heading>Action</x-table.heading>
                </x-slot>
                <x-slot name="body">
                    @foreach ($roles as $role)
                    <x-table.row>
                        <x-table.cell>{{ $role->name }}</x-table.cell>
                        <x-table.cell>{{ $role->description }}</x-table.cell>
                        <x-table.cell>{{ $role->date_for_humans }}</x-table.cell>
                        <x-table.cell>
                            {{-- <div class="dropdown me-1">
                                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                    <span class="fas fa-ellipsis-v"></span>
                                </button> --}}
                                <x-button.link>
                                    <li><a class="dropdown-item rounded-top"
                                        href="{{ route('edit-role', ['id' => $role->id]) }}"><span
                                            class="fas fa-user-shield me-2"></span> Edit role</a></li>
                                    <li><a onclick="confirm('Are you sure you want to remove this role?') || event.stopImmediatePropagation()"
                                        wire:click="delete({{ $role->id }})"
                                        class="dropdown-item text-danger rounded-bottom"><span
                                            class="fas fa-user-times me-2"></span>Delete role</a></li>
                                </x-button.link>
                            </div>
                        </x-table.cell>
                    </x-table.row>
                    @endforeach
                </x-slot>
            </x-table>
            <div class="mt-3">
                {{ $roles->links() }}
            </div>
        </div>
    </div>
    <p>
        <?php
    // $json = "";
    // function copyFunction($roles){
    //     foreach ($roles as $role) {
    //         global $json;
    //         $json = json_encode($role);
    //     }
    //     return $json;
    // }
    // echo copyFunction($roles);
        ?>
        </p>
</div>

