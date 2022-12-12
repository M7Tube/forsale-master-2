<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Http\Traits\PermissionsTrait;
use App\Models\AppSettings;
use App\Models\Wallet;

class UserAndPermissionSeeder extends Seeder
{
    use PermissionsTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($this->getPermissions() as $data) {
            // create permissions
            Permission::create(['name' => 'edit_' . $data]);
            Permission::create(['name' => 'delete_' . $data]);
            Permission::create(['name' => 'read_' . $data]);
            Permission::create(['name' => 'create_' . $data]);
        }

        $role1 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        $super_admin = User::Create([
            'first_name' => 'Mahmoud',
            'last_name' => 'Habsh',
            'phone_number' => '0936869890',
            'email' => 'clashroyale.mahh@gmail.com',
            'password' => Hash::make('absamer11111'),
            'is_admin' => 1,
            'unlimited' => 1,
        ]);
        $super_admin->assignRole($role1);

        //mobile user
        $user = User::Create([
            'first_name' => 'Mahmoud',
            'last_name' => 'Habsh',
            'phone_number' => '0999999999',
            'email' => 'clashroyale.maa9hh@gmail.com',
            'password' => Hash::make('11111111'),
            'is_personal' => 1,
            'is_admin' => 0,
        ]);
        if ($user) {
            Wallet::Create([
                'balance' => AppSettings::all()->first()['wallet_defualt_balance'] ?? '',
                'user_id' => $user->user_id,
            ]);
        }
    }
}
