<?php

namespace App\Http\Controllers\Student;

use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PDF;

class CertificateController extends Controller
{
    public function download(Course $course)
    {
        $user = Auth::user();
        $data = [
            'course' => $course,
            'user' => $user
        ];

        $pdf = PDF::loadView('student.certificate.template', $data);
        return $pdf->download('certificate.pdf');
    }
}
