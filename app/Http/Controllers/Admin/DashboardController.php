<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Recherche;
use App\Models\Documentation;
use App\Models\Formation;
use App\Models\Resource;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get counts for dashboard cards
        $statistics = [
            'applicants' => [
                'total' => Applicant::count(),
                'pending' => Applicant::where('status', 'pending')->count(),
            ],
            'formations' => [
                'total' => Formation::count(),
                'published' => Formation::where('is_published', true)->count(),
            ],
            'recherches' => [
                'total' => Recherche::count(),
                'published' => Recherche::where('is_published', true)->count(),
            ],
            'resources' => [
                'total' => Resource::count(),
                'published' => Resource::where('is_published', true)->count(),
            ],
        ];
         // Add monthly data for the area chart
        // This example gets data for the last 12 months
        $monthlyData = []; // Format: [['Month', count], ['Month', count]]
        $recentApplicants = Applicant::latest()->take(10)->get();
       
        
        return view('pages.admin.dashboard', compact('statistics', 'recentApplicants' , 'monthlyData'));
    }
    
}