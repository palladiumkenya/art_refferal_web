<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Person;
use App\Models\Provider;
use App\Models\Facility;
use Exception;

class UserController extends Controller
{
    public function adduser(Request $request)
    {
        $facilities = Facility::join('tbl_location', 'tbl_master_facility.code', '=', 'tbl_location.mfl_code')
            ->select('tbl_master_facility.code', 'tbl_master_facility.name')
            ->orderBy('tbl_master_facility.name', 'ASC')
            ->get();

            try {
                $person = new Person;
                $person->firstname = $request->fname;
                $person->lastname = $request->fname;
                $user = new User;
                $user->person_id = 
                $provider = new Provider;

            }catch(Exception $e)
            {

            }

        return view('users.adduser', compact('facilities'));
    }
}
