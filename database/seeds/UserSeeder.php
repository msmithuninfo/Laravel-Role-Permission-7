<?php
// 104
use App\User;
use Illuminate\Database\Seeder;
// 106
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 107 ai email ar user ace kina dekhbe
        $user = User::where('email', 'manirujjamanakash@gmail.com')->first();
        // 108 jodi oi namer user na thake tahle new user create hobe
        if (is_null($user)) {
            // 105 new user create korar jonno
            $user = new User();
            $user->name = "Mou Sarker";
            $user->email = "mou@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}
