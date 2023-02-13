<?php

namespace App\Http\Controllers;

use App\Events\LogCreated;
use App\Http\Requests\StoreLogRequest;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LogsController extends Controller
{
    public function home(Request $request): View
    {
        return view('logs.home');
    }

    public function index(Request $request): View
    {
        return view('logs.index');
    }

    public function create(): View
    {
        return view('logs.create');
    }

    public function store(StoreLogRequest $request): View
    {
        $log = new Log();
        $log->name = $request->name;
        $log->document = $request->document;
        $log->answer = $request->answer;
        $log->commentaries = $request->commentaries;
        $log->save();
        LogCreated::dispatch($log);

        return view('logs.index');
    }
}
