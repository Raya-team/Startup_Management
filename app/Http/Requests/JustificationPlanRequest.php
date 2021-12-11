<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Phone;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class JustificationPlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $team = Auth::user()->team->status;
        return [
            'registered_team.registration_number' => $team ? ['required','numeric'] : '',
            'registered_team.registration_date' => $team ? ['required','date','date_format:Y-m-d'] : '',
            'business_manager.owner' => ['required', new Security()],
            'business_manager.phone_number' => ['required',new Phone(),'digits:11','numeric'],
            'business_manager.email' => ['required','email','max:255'],
            'business_question.growth_center' => [new Persian()],
            'business_question.start_date' => ['required','date','date_format:Y-m-d'],
            'business_question.location_address' => ['required',new Persian()],
            'business_question.phone_number' =>['required',new Phone(),'digits:11','numeric'],
            'business_question.important_note' => [new Persian()],
            'justification_plan.requirement' => ['required',new Persian()],
            'justification_plan.solution' => ['required',new Persian()],
            'justification_plan.competitors' => ['required',new Persian()],
            'justification_plan.competitive_advantage' => ['required',new Persian()],
            'justification_plan.target_market' => ['required',new Persian()],
            'justification_plan.technology_level' => ['required',new Persian()],
            'justification_plan.required_budget' =>['required',new Persian()],
            'justification_plan.income' => ['required',new Persian()],
            'justification_plan.technology_life' => ['required',new Persian()],
            'justification_plan.plan_development' => ['required',new Persian()],
            'justification_plan.technical_knowledge' => ['required',new Persian()],
        ];
    }
}
