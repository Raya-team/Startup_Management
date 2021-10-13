<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'team_name' => ['required'],
            'registration_number' => ['required'],
            'registration_date' => ['required'],
            'name' => ['required'],
            'manager_phone_number' => ['required'],
            'email' => ['required'],
            'growth_center' => ['required'],
            'start_date' => ['required'],
            'location_address' => ['required'],
            'phone_number' =>['required'],
            'site_address' =>['required'],
            'important_note' => ['required'],
            'requirement' => ['required'],
            'solution' => ['required'],
            'competitors' => ['required'],
            'competitive_advantage' => ['required'],
            'target_market' => ['required'],
            'Technology_level' => ['required'],
            'required_budget' =>['required'],
            'Income' => ['required'],
            'technology_life' => ['required'],
            'plan_development' => ['required'],
            'technical_knowledge' => ['required'],
        ];
    }
}
