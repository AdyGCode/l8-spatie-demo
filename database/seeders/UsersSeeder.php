<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedAdminUser =
            [
                'id' => 1,
                'name' => 'Ad Ministrator',
                'email' => 'ad.ministrator@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Australia/Perth',
            ];
        $user = User::create($seedAdminUser);
        // $role = Role::create('Admin'); already added by RolesSeeder
        $role = Role::findByName('admin');
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole($role);

        $seedManagerUsers = [
            [
                'id' => 5,
                'name' => 'YOUR NAME',
                'email' => 'GIVEN@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Australia/Perth',
            ],
            [
                'id' => 6,
                'name' => 'Andy Manager',
                'email' => 'andy.manager@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Australia/Perth',
            ],
        ];
        $role = Role::findByName('manager');
        $managerPermissionList = [
            'user-list', 'user-create',
            'role-list',
            'permission-list',
            'post-list', 'post-create', 'post-edit', 'post-delete',
        ];
        $permissions = Permission::all()
            ->whereIn('name',$managerPermissionList)
            ->pluck('id','id');
        $role->syncPermissions($permissions);

        foreach ($seedManagerUsers as $managerUser) {
            $user = User::create($managerUser);

        }

        $seedUsers = [
            [
                'id' => 10,
                'name' => 'Eileen Dover',
                'email' => 'eileen@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Australia/Perth',
            ],
            [
                'id' => null,
                'name' => 'Jacques d\'Carre',
                'email' => 'jacques@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Europe/Paris',
            ],
            [
                'id' => null,
                'name' => 'Russell Leaves',
                'email' => 'russell@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Pacific/Pitcairn',
            ],
            [
                'id' => null,
                'name' => 'Ivana Vinn',
                'email' => 'ivanna@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Europe/Moscow',
            ],
            [
                'id' => null,
                'name' => 'Win Doh',
                'email' => 'win@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Europe/Sofia',
            ],
            [
                'id' => null,
                'name' => 'Sally Mander',
                'email' => 'Sally.Mander@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Reba Dirtchee',
                'email' => 'Reba.Dirtchee@example
                .com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Carl Breakdown',
                'email' => 'Carl.Breakdown@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Al Luminum',
                'email' => 'Al.Luminum@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Phil Graves',
                'email' => 'Phil.Graves@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Cy Yonarra',
                'email' => 'Cy.Yonarra@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Buddy System',
                'email' => 'Buddy.System@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Owen Moore',
                'email' => 'Owen.Moore@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Dwayne Pipe',
                'email' => 'Dwayne.Pipe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Summer Dey',
                'email' => 'Summer.Dey@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Stan Dup',
                'email' => 'Stan.Dup@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Miles Tugo',
                'email' => 'Miles.Tugo@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Rusty Pipes',
                'email' => 'Rusty.Pipes@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Rusty Nails',
                'email' => 'Rusty.Nails@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Preston Cleaned',
                'email' => 'Preston.Cleaned@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Norma Lee',
                'email' => 'Norma.Lee@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Crystal Stemwear',
                'email' => 'Crystal.Stemwear@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Alf A. Romeo',
                'email' => 'Alf.A.Romeo@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Myles Long',
                'email' => 'Myles.Long@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Faye Kinnitt',
                'email' => 'Faye.Kinnitt@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Dee Zaster',
                'email' => 'Dee.Zaster@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Doug Graves',
                'email' => 'Doug.Graves@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Ada Lott',
                'email' => 'Ada.Lott@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Ginger Rayl',
                'email' => 'Ginger.Rayl@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Jim Shorts',
                'email' => 'Jim.Shorts@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Pacific/Port_Moresby',
            ],
            [
                'id' => null,
                'name' => 'Terry Achey',
                'email' => 'Terry.Achey@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Ed Abul',
                'email' => 'Ed.Abul@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Terry Kloth',
                'email' => 'Terry.Kloth@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Jasmine Rice',
                'email' => 'Jasmine.Rice@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Asia/Tokyo',
            ],
            [
                'id' => null,
                'name' => 'Ruda Wakening',
                'email' => 'Ruda.Wakening@example
                .com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Ann Chovie',
                'email' => 'Ann.Chovie@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Telly Vision',
                'email' => 'Telly.Vision@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'Europe/Dublin',
            ],
            [
                'id' => null,
                'name' => 'Al Gore-Rythim',
                'email' => 'Al.Gore-Rythim@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'America/Boise',
            ],
            [
                'id' => null,
                'name' => 'Steve Adore',
                'email' => 'Steve.Adore@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => '',
            ],
            [
                'id' => null,
                'name' => 'Lois Point',
                'email' => 'Lois.Point@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'created_at' => now(),
                'timezone' => 'America/Boise',
            ],
        ];
        $role = Role::findByName('user');
        $userPermissionList = [
            'user-list',
            'role-list',
            'post-list',
        ];
        $permissions = Permission::all()
            ->whereIn('name',$userPermissionList)
            ->pluck('id','id');
        $role->syncPermissions($permissions);

        foreach ($seedUsers as $seed) {
            User::create($seed);
            $user->assignRole($role);
        }



    }
}
