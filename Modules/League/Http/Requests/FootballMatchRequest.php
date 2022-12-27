<?php

namespace Modules\League\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FootballMatchRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        
        
        return [
            'f_team_id'    =>'required|exists:teams,id',
            's_team_id'    =>'required|exists:teams,id|different:f_team_id',
            'f_team_score' =>'required|Integer',
            's_team_score' =>'required|Integer'
         ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
