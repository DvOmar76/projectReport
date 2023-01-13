<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Group;
use App\Models\Platoon;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::all();
        return view('home',compact('companies'));
    }
//    public function platoon(Platoon $platoon)
//    {
//        dd($platoon);
//        return view('groups',compact('group'));
//    }
    public function company(Company $company)
    {
        $platoons=$company->platoons;
        return view('platoon',compact('platoons'));
    }
    public function platoon(Platoon $platoon)
    {
//        dd($platoon->groups);
        $groups=$platoon->groups;
        return view('groups',compact('groups'));
    }
    public function group(Group $group)
    {

        return view('report',compact('group'));
    }
    public function reports(Company $company)
    {

        {
            $data = [
                'company' =>$company
            ];

            $pdf = PDF::loadView('pdf.report1', $data);

            return $pdf->stream('document.pdf');
        }
    }
}
