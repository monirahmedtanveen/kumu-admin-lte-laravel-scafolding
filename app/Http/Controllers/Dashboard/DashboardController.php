<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = "Dashboard Graph";
        $dashboardActive = "active";
        $newOrder = 1500;
        $bounceRate = 25;
        $userReg = 150;
        $uniqueVisitors = 1800;

        return view("pages.dashboard.dashboard", compact('title', 'dashboardActive', 'newOrder', 'bounceRate', 'userReg', 'uniqueVisitors'));
    }
}
