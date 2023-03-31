<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = Contact::factory(50)->create();

        foreach ($contacts as  $contact) {

            $phone =  ['31240021212', '12346578902', '8232672566523'];

            Phone::create([
                'number' => fake()->randomElement($phone),
                'contact_id' => $contact->id,
            ]);
            
            Phone::create([
                'number' => fake()->randomElement($phone),
                'contact_id' => $contact->id,
            ]);
        }
    }
}
