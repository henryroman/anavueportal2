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

        // Create permissions with the guard name 'web'
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // Check if roles exist before creating, specifying the guard name 'web'
        if (!Role::where('name', 'Admin')->where('guard_name', 'web')->exists()) {
            $adminRole = Role::create(['name' => 'Admin', 'guard_name' => 'web']);
        } else {
            $adminRole = Role::where('name', 'Admin')->where('guard_name', 'web')->first();
        }

        if (!Role::where('name', 'Creator')->where('guard_name', 'web')->exists()) {
            $creatorRole = Role::create(['name' => 'Creator', 'guard_name' => 'web']);
        } else {
            $creatorRole = Role::where('name', 'Creator')->where('guard_name', 'web')->first();
        }

        if (!Role::where('name', 'Member')->where('guard_name', 'web')->exists()) {
            $memberRole = Role::create(['name' => 'Member', 'guard_name' => 'web']);
        } else {
            $memberRole = Role::where('name', 'Member')->where('guard_name', 'web')->first();
        }

        // Assign permissions to roles
        $adminRole->syncPermissions(Permission::where('guard_name', 'web')->get());

        $creatorRole->syncPermissions(Permission::where('guard_name', 'web')->whereIn('name', [
            'view dashboard',
            'view profile',
            'view transactions',
            'view traffic-sources',
            'view app-analysis',
            'view tasks',
            'view calendar',
            'view datatables',
            'view bootstrap-tables'
        ])->get());

        $memberRole->syncPermissions(Permission::where('guard_name', 'web')->whereIn('name', [
            'view dashboard',
            'view profile'
        ])->get());
    }
}
