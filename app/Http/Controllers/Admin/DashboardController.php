<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function getDashboard()
    {
        $dashboardData = [
            'totalCallRequest' => 269,
            'totalChatRequest' => 548,
            'totalReportRequest' => 53,
            'topAstrologer' => collect(), // Assuming this is an empty collection for now
            'totalEarning' => 28003.5,
            'totalCustomer' => 1,
            'totalAstrologer' => 0,
            'monthlyCommission' => [
                ['month' => 'Dec', 'commissionYear' => 2023, 'totalEarning' => 0],
                // Add other months here...
            ],
            'monthlyCallRequest' => [
                ['callMonth' => 'Dec', 'callYear' => 2023, 'totalCall' => 0],
                // Add other months here...
            ],
            'monthlyChatRequest' => [
                ['chatMonth' => 'Dec', 'chatYear' => 2023, 'totalChat' => 0],
                // Add other months here...
            ],
            'monthlyReportRequest' => [
                ['month' => 'Dec', 'reportYear' => 2023, 'totalReport' => 0],
                // Add other months here...
            ],
            'unverifiedAstrologer' => collect(), // Assuming empty collection
        ];

        // Storing the data in a simple variable
        $result[0] = $dashboardData;
        $labels = [
            "Dec 2023",
            "Jan 2024",
            "Feb 2024",
            "Mar 2024",
            "Apr 2024",
            "May 2024",
            "Jun 2024",
            "Jul 2024",
            "Aug 2024",
            "Sep 2024",
            "Oct 2024",
            "Nov 2024"
        ];
        $data = [
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
        ];
        $callData = [
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
        ];

        $chatData = [
            0, 0, 0, 1, 5, 4, 0,2, 0, 10, 0, 0
        ];
        $reportData = [
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
        ];

        // dd($label);
        // Now $result contains the same data as $dashboardData
        return view('pages.dashboard', compact('result','labels','data','callData','chatData','reportData'));


    }
}
