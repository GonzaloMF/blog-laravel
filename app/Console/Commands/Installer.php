<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Installer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cs348blog:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //return Command::SUCCESS;
        if(!$this->verify()){
            $role = $this->createRolSuperAdmin();
            $user = $this->createUserSuperAdmin();
            //Relation between them (Many to Many)
            $user->roles()->attach($user);
            $this->line('Role and User have been installed correctly');

        } else {
            $this->error('Is NOT possible to execute the Installer command because there is a role created');
        }
    }

    // We should be aware for duplicate instances, so we should ask first, thats why we create verify() and is used in handle() with a condition
    private function verify(){
        $role = Role::find(1);
        //return $role->isEmpty();
    }
    private function createRolSuperAdmin(){
        $role = "Super Admin";
        Role::create([
            'name' => $role,
            'slug' => Str::slug($role, '_')
        ]);
    }

    private function createUserSuperAdmin(){
        return User::create([
            'name' => '2026765_Admin',
            'email' => '2026765@swansea.ac.uk',
            'password' => Hash::make('12345aA'),
            'status' => 1
        ]);

    }
}
