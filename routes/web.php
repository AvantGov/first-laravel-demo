<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

//*top level page navigation */
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/contact', function () {
        return view('contact');
    });
//*end main page navigation*/


//* start job navigation

    // * index
    Route::get('/jobs', function () {
        return view('jobListing.index', [
            'jobs' => JobListing::with('employer')->latest()->simplePaginate(10)
        ]);
    });

    // * create  (1/2)
    Route::get('/jobs/create', function () {
        return view('jobListing.create', []);

    });

    // * create (2/2)
    Route::post('/jobs', function () {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        JobListing::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    });


    // * edit (1/2)
    Route::get('/jobs/{id}/edit', function($id){
        return view('jobListing.edit', [
            'job' => JobListing::findorFail($id)
        ]);
    });

    // * edit (2/2)
    Route::patch('/jobs/{id}', function ($id) {
        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // update the note
        $job = JobListing::findOrFail($id);
        $job->title = request('title');
        $job->salary = request('salary');
        $job->save();

        // redirect
        return redirect("/jobs/$job->id");
    });

    // * show
    Route::get('/jobs/{id}', function ($id) {
        return view('jobListing.show', [
            'job' => JobListing::findOrFail($id)
        ]);
    });

    // * destroy
    Route::delete('/jobs/{id}', function ($id) {
        // auth ...
        // find the job + delete
        JobListing::findOrFail($id)->delete();
        return redirect('/jobs');
    });

// * end job navigation */
