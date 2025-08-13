<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Se você tiver outros seeders
        $this->call([
            GeolocationSeeder::class,
        ]);

        // 1️⃣ Criar a permissão usada no canAccessPanel
        $permissionName = 'access_admin'; // mantém igual ao que está no User.php
        Permission::firstOrCreate(
            ['name' => $permissionName, 'guard_name' => 'web']
        );

        // 2️⃣ Criar papel de admin
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );

        // Dar a permissão para o papel
        $adminRole->givePermissionTo($permissionName);

        // 3️⃣ Criar usuário admin
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrador',
                'password' => 'password',
                'is_active' => true
            ]
        );

        // 4️⃣ Atribuir papel ao usuário
        $adminUser->assignRole($adminRole);

        $this->command->info('✅ Usuário admin criado com sucesso!');
    }
}
