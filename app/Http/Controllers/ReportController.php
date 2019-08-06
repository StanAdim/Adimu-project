<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use Illuminate\Http\Request;
use function Sodium\compare;

class ReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Report $report)
    {
        $userReports = Report::all();


        return view('reports.index',compact('userReports','report'));
    }


    public function create()
    {
        $users = User::all();
        $report = new Report();

        return view('reports.create',compact('users','report'));
    }


    public function store()

    {


      Report::create($this->validateData());


        return redirect('/reports')->with('NewReport','Your Report has been submitted successful');

    }


    public function show(Report $report)
    {

       return view('reports.show',compact('report'));
    }


    public function edit(Report $report)
    {
        $users = User::all();
       return view('reports.edit',compact('report','users'));
    }


    public function update(Report $report)
    {



     $report->update($this->validateData());
   return redirect('/reports/'.$report->id);
    }


    public function destroy(Report $report)
    {
       $report->delete();
       return redirect('reports')->with('deleted','A report is Deleted');

    }
    private function validateData()
    {
        return request()-> validate([

            'user_id'=> '',
            'subject'=> 'required|min:3|max:50',
            'report'=> 'required|min:23'

        ]);
    }
}
