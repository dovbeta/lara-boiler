<?php namespace App\Http\Requests\Frontend;

use App\Http\Requests\Request;

/**
 * Class StoreMeterRequest
 * @package App\Http\Requests\Frontend\User
 */
class StoreMeterRequest extends Request {

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
            'number' => 'required',
            'commodity' => 'required|in:heating,hot_water,cold_water',
		];
	}
}