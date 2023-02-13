<?php

namespace App\Http\Controllers\Api;

use App\Events\LogCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLogRequest;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LogsController extends Controller
{
    public function index(Request $request): array
    {
        return [
            'logs' => Log::orderByDesc('created_at')->get()
        ];
    }
}
