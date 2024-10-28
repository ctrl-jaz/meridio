<?php

        namespace Database\Seeders;
        
        use App\Models\User;
        // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
        use Illuminate\support\facades\DB;
        use Illuminate\support\facades\HASH;
        use Illuminate\Database\Seeder;
        
        class DatabaseSeeder extends Seeder
        {
            /**
             * Seed the application's database.
             */
            public function run(): void
            {
            //inserting multiple users
            //Step 1: create the array of users
            $users = [
                [
                'name' => 'Jane Doe',
                'email' =>'Doe@Meridio.com',
                'password' => Hash::make('1234567'),
                'user_type' => 'Donor',
                'phone_number' => '0720333111',
                'Country' => 'Sweden'
                ],
                [
                'name' => 'Red Riding Hood',
                'email' =>'LittleRed@Meridio.com',
                'password' => Hash::make('1234567'),
                'user_type' => 'Recipient',
                'phone_number' => '072985611',
                'Country' => 'Sweden'
                ],
                [
                'name' => 'Jack Jackson',
                'email' =>'JacJac@Meridio.com',
                'password' => Hash::make('1234567'),
                'user_type' => 'Donor',
                'phone_no' => '072038974',
                'location' => 'South Africa'
                ]
                ];
                //Step 2: insert the array using Query Builder
                DB::table('users')->insert($users);
                
                //call other seeders to insert records into the DB
                $this->call([
                CategoriesSeeder::class
                ]);
        
            }
        }
        