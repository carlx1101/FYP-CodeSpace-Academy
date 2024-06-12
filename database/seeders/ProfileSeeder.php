<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve all users
        $users = User::all();

        // Iterate over each user and create a profile with additional fields
        foreach ($users as $user) {
            Profile::create([
                'user_id' => $user->id,
                'first_name' => 'FirstName', // Placeholder value for first name
                'last_name' => 'LastName', // Placeholder value for last name
                'headline' => 'This is the headline for ' . $user->name,
                'biography' => 'This is the biography for ' . $user->name,
                'phone' => '123-456-7890', // Example phone number
                'cover_banner' => 'default_banner.jpg', // Example cover banner
                'country' => 'Country Name', // Example country
                'address_line_one' => '123 Main St', // Example address line one
                'address_line_two' => 'Suite 456', // Example address line two
                'state' => 'State Name', // Example state
                'zipcode' => '12345', // Example zipcode
                'fb_link' => 'https://facebook.com/' . $user->name, // Assuming User model has name
                'twitter_link' => 'https://twitter.com/' . $user->name, // Assuming User model has name
                'linkedin_link' => 'https://linkedin.com/in/' . $user->name, // Assuming User model has name
                'youtube_link' => 'https://youtube.com/user/' . $user->name, // Assuming User model has name
                'instagram_link' => 'https://instagram.com/' . $user->name, // Assuming User model has name
                'website_link' => 'https://example.com/' . $user->name, // Example website link
            ]);
        }
    }
}
