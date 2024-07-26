<?php

// app/Http/Livewire/Security.php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Role;

class Security extends Component
{
    public $userCount;
    public $historicUserCounts = [];
    public $percentageChange;
    public $dateRange;

    public $roleCount;
    public $lastRoleCreatedAt;

    public function mount()
    {
        $this->fetchUserData();
        $this->fetchRoleData();
    }

    public function fetchUserData()
    {
        // Get current user count
        $this->userCount = User::count();

        // Get date range (last month)
        $end = Carbon::now();
        $start = Carbon::now()->subMonth();
        $this->dateRange = $start->format('M j') . ' - ' . $end->format('M j');

        // Get historic user counts for chart (last 12 months)
        $historicData = User::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')
            ->whereBetween('created_at', [$start->subYear(), $end])
            ->groupBy('month')
            ->orderBy('month', 'desc')
            ->get();

        foreach ($historicData as $data) {
            $this->historicUserCounts[] = [
                'month' => $data->month,
                'count' => $data->count
            ];
        }

        // Calculate percentage change
        $previousPeriodCount = User::whereBetween('created_at', [$start->subYear(), $end->subYear()])->count();
        if ($previousPeriodCount > 0) {
            $this->percentageChange = (($this->userCount - $previousPeriodCount) / $previousPeriodCount) * 100;
        } else {
            $this->percentageChange = 100; // Assuming 100% increase if there were no users in the previous period
        }
    }

    public function fetchRoleData() 
    {
        // Get current role count
        $this->roleCount = Role::count();
        $lastRole = Role::latest()->first();
        $this->lastRoleCreatedAt = $lastRole ? $lastRole->created_at->format('M j, Y') : 'N/A';
    }

    public function render()
    {
        return view('livewire.security');
    }
}
