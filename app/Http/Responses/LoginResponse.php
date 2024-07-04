<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $dashboard = "/"; // Default value

        if (auth()->user()->role == 'admin'){
            $dashboard = "/admin/dashboard";
        }
        else if(auth()->user()->role == 'tutor'){
            $dashboard = "/tutor/dashboard";
        }

        else if(auth()->user()->role == 'student'){
            $dashboard = "/student/dashboard";
        }

        else if(auth()->user()->role == 'employer'){
            $dashboard = "/employer/dashboard";
        }

        return redirect()->intended($dashboard);
    }
}
