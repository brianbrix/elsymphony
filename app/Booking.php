<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 *
 * @package App
 * @property string $email
 * @property string $merchant
 * @property double $amount
*/
class Booking extends Model
{
    protected $table = "bookings";
    protected $fillable = ['user_id', 'ticket_type', 'ticket_quantity', 'amount', 'phone_number', 'mpesa_code', 'event_id', 'first_name', 'last_name', 'physical_address',
    'ticket_number', 'additional_info', 'confirmed'];


    /**
     * Set attribute to date format
     * @param $input
     */
     public function event()
     {
     return $this->belongsTo('App\Event','event_id');
     }
     public function user()
          {
          return $this->belongsTo('App\User','user_id');
          }
      public function type()
        {
        return $this->belongsTo('App\Ticket','ticket_type');
        }



}
