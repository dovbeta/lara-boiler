<?php namespace App\Http\Requests\Frontend\Flat;

use App\Http\Requests\Request;

/**
 * Class StoreFlatRequest
 * @package App\Http\Requests\Frontend\User
 */
class StoreFlatRequest extends Request {

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
			'number'	=> 'required|alpha_num|max:4',
			'rooms_number'	=> 'required|integer|min:1',
			'entrance'	=> 'required|integer|min:1|max:13',
			'floor'	=> 'required|integer|min:1|max:10',
			'area'	=> 'required|numeric|min:0',
		];
	}
}