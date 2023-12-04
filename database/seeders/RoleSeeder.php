<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the role exists before creating it

        $role1 = Role::create(['name' => 'Admin']);

        // Check if the role exists before creating it

        $role2 = Role::create(['name' => 'Blogger']);

        //
        /*     $role1 = Role::create(['name' => 'Admin']);
            $role2 = Role::create(['name' => 'Blogger']);

            Permission::create(['name' => 'admin.home']);

            Permission::create(['name' => 'admin.categories.index']);
            Permission::create(['name' => 'admin.categories.create']);
            Permission::create(['name' => 'admin.categories.edit']);
            Permission::create(['name' => 'admin.categories.destroy']);

            Permission::create(['name' => 'admin.tags.index']);
            Permission::create(['name' => 'admin.tags.create']);
            Permission::create(['name' => 'admin.tags.edit']);
            Permission::create(['name' => 'admin.tags.destroy']);

            Permission::create(['name' => 'admin.posts.index']);
            Permission::create(['name' => 'admin.posts.create']);
            Permission::create(['name' => 'admin.posts.edit']);
            Permission::create(['name' => 'admin.posts.destroy']); */

        Permission::create(['name' => 'admin.home', 'description' => 'ver el dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'ver listdo de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update', 'description' => 'Asignar un rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'editarl  un rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index', 'description' => 'ver listdado de categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'crear categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'editar categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'eliminar c argoirasd'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'listar etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'crear etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'editar etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'eliminar etiquetas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'ver listado de post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'crear post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'editar post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'eliminar post'])->syncRoles([$role1, $role2]);

        // Assign permissions to roles if needed
        /*   $role1->givePermissionTo('admin.home', 'admin.categories.index');
          $role2->givePermissionTo('admin.categories.create', 'admin.categories.edit'); */

    }
}
