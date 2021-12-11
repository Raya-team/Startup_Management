<?php

namespace App\Http\Controllers\user\Share\ParticipationShare;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParticipationShare;
use App\Http\Requests\ParticipationShareRequest;
use App\Models\Building;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\ParticipationNewInvestor;
use App\Models\ParticipationPreInvestor;
use App\Models\PreOperatingCost;
use App\Models\TeamMember;
use App\Models\Transportation;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationOtherAsset;
use App\Models\ValuationTenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipationShareController extends Controller
{
    public function index()
    {
        return view('user.shares.participation-shares.index');
    }

    public function create()
    {
        return view('user.shares.participation-shares.index');
    }

    public function store(ParticipationShareRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $this->participationPreIinvestors($request, $team_id);
        $this->participationNewInvestors($request, $team_id);
        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    protected function participationPreIinvestors(ParticipationShareRequest $request, $team_id)
    {

        $pre_investors = $request->pre_investors;
        for ($i = 0; $i < sizeof($pre_investors); $i++) {
            $pre_investor = new ParticipationPreInvestor();
            $pre_investor->investor = $pre_investors[$i]['investor'];
            $pre_investor->investment = $pre_investors[$i]['investment'];
            $pre_investor->team_id = $team_id;
            $pre_investor->updated_at = null;
            $pre_investor->save();
        }
    }

    protected function participationNewInvestors(ParticipationShareRequest $request, $team_id)
    {
        $new_investors = $request->new_investors;
        for ($i = 0; $i < sizeof($new_investors); $i++) {
            $new_investor = new ParticipationNewInvestor();
            $new_investor->supplier = $new_investors[$i]['supplier'];
            $new_investor->investment = $new_investors[$i]['investment'];
            $new_investor->team_id = $team_id;
            $new_investor->updated_at = null;
            $new_investor->save();
        }
    }
}
