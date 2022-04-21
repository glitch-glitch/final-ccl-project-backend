<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\User;
class UsersRollNumberImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $user = User::where('email',$row[0])->first();
            $user->roll_number = $row[1];
            $user->save();
        }
    }
}
