<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Define permissions
        $permissions = [
            'view dashboard',
            'view profile',
            'view user-management',
            'view new-user',
            'view edit-user',
            'view role-management',
            'view new-role',
            'view edit-role',
            'view category-management',
            'view new-category',
            'view edit-category',
            'view tag-management',
            'view new-tag',
            'view edit-tag',
            'view item-management',
            'view new-item',
            'view edit-item',
            'view transactions',
            'view traffic-sources',
            'view app-analysis',
            'view tasks',
            'view calendar',
            'view datatables',
            'view bootstrap-tables',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Check if roles exist before creating
        if (!Role::where('name', 'Admin')->exists()) {
            $adminRole = Role::create(['name' => 'Admin']);
        } else {
            $adminRole = Role::where('name', 'Admin')->first();
        }

        if (!Role::where('name', 'Creator')->exists()) {
            $creatorRole = Role::create(['name' => 'Creator']);
        } else {
            $creatorRole = Role::where('name', 'Creator')->first();
        }

        if (!Role::where('name', 'Member')->exists()) {
            $memberRole = Role::create(['name' => 'Member']);
        } else {
            $memberRole = Role::where('name', 'Member')->first();
        }

        // Assign permissions to roles
        $adminRole->syncPermissions(Permission::all());

        $creatorRole->syncPermissions([
            'view dashboard',
            'view profile',
            'view transactions',
            'view traffic-sources',
            'view app-analysis',
            'view tasks',
            'view calendar',
            'view datatables',
            'view bootstrap-tables'
        ]);

        $memberRole->syncPermissions([
            'view dashboard',
            'view profile'
        ]);
    }
}
