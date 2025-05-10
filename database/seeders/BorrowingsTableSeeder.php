<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB facade
use Carbon\Carbon; // Import Carbon for date handling

class BorrowingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('borrowings')->insert([
            [
                'user_id' => 4,
                'book_id' => 1,
                'borrowed_at' => Carbon::now()->subDays(10),
                'due_date' => Carbon::now()->addDays(5),
                'returned_at' => null,
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,
                'book_id' => 2,
                'borrowed_at' => Carbon::now()->subDays(20),
                'due_date' => Carbon::now()->subDays(5),
                'returned_at' => Carbon::now()->subDays(3),
                'status' => 'returned',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 6,
                'book_id' => 3,
                'borrowed_at' => Carbon::now()->subDays(15),
                'due_date' => Carbon::now()->subDays(1),
                'returned_at' => null,
                'status' => 'overdue',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}