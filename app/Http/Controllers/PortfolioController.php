<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Stat;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        $stats = Stat::all();
        $skills = Skill::all();
        $projects = Project::all();

        return view('welcome', compact('settings', 'stats', 'skills', 'projects'));
    }
}
