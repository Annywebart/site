<?php
/**
 * Contact
 *
 * @property integer $id
 * @property string $ip
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $read_at
 * @method static \Illuminate\Database\Query\Builder|\Contact whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereIp($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereSubject($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Contact whereReadAt($value)
 * @method static \SleepingOwl\Models\SleepingOwlModel defaultSort()
 */
class Contact extends SleepingOwl\Models\SleepingOwlModel
{
    protected $table = 'contacts';
    protected $fillable = [
        'ip',
        'name',
        'email',
        'phone',
        'message',
    ];
}