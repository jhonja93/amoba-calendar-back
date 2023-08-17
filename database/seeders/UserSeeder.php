<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = json_decode(File::get(database_path('seeders/data/users.json')));

        if (json_last_error() !== JSON_ERROR_NONE) {
            // Manejo de error en la decodificación del JSON
            dd('Error en el JSON:', json_last_error_msg());
        }

        foreach ($users->users as $key => $user) {
            User::create([
                "id" => $user->id,
                "first_name" => $user->first_name,
                "last_name" => $user->last_name,
                "phone_number" => $user->phone_number,
                "picture" => $user->picture,
                "email" => $user->email,
                "password" => $user->password,
                "remember_token" => $user->remember_token,
                "last_online" => $user->last_online,
                "verification_code" => $user->verification_code,
                "new_email" => $user->new_email,
                "status" => $user->status,
                "first" => $user->first,
                "last_accept_date" => $user->last_accept_date,
                "created" => $user->created,
                "modified" => $user->modified,
                "company_contact" => $user->company_contact,
                "credits" => $user->credits,
                "first_trip" => $user->first_trip,
                "incomplete_profile" => $user->incomplete_profile,
                "phone_verify" => $user->phone_verify,
                "token_auto_login" => $user->token_auto_login,
                "user_vertical" => $user->user_vertical,
                "language_id" => $user->language_id,
                "no_registered" => $user->no_registered,
                "created_at" => $user->created,
                "updated_at" => $user->modified
            ]);
        }
    }
}
