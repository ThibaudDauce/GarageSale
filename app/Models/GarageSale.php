<?php namespace GarageSale\Models;

use Illuminate\Database\Eloquent\Model;

class GarageSale extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'garage-sales';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description', 'registrations_begin', 'registrations_end', 'event_begin', 'event_end', 'zones'];

	/**
	 * The date attributes.
	 *
	 * @var array
	 */
	protected $dates = ['registrations_begin', 'registrations_end', 'event_begin', 'event_end'];

	/**
	 * @param string $name
     */
	public static function initialize($name)
	{
		return new static([
			'name' => $name
		]);
	}
}
