<?php

/**
 * Order
 *
 * @property integer $id
 * @property string $ip
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property integer $site_type
 * @property string $message
 * @property integer $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $read_at
 * @method static \Illuminate\Database\Query\Builder|\Order whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereIp($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereName($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereEmail($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order wherePhone($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereSiteType($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereMessage($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereStatus($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereUpdatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Order whereReadAt($value) 
 * @method static \SleepingOwl\Models\SleepingOwlModel defaultSort() 
 */

class Order extends SleepingOwl\Models\SleepingOwlModel
{
    const SITE_TYPE_CART = 1;
    const SITE_TYPE_PORTFOLIO = 2;
    const SITE_TYPE_CORPORATE = 3;
    const SITE_TYPE_CATALOG = 4;

    public static $siteTypeList = [
        self::SITE_TYPE_CART => 'Сайт-визитка',
        self::SITE_TYPE_PORTFOLIO => 'Портфолио',
        self::SITE_TYPE_CORPORATE => 'Корпоративный сайт',
        self::SITE_TYPE_CATALOG => 'Каталог',
    ];

    protected $table = 'orders';

    protected $fillable = [
        'ip',
        'name',
        'email',
        'phone',
        'site_type',
        'message',
        'status',
    ];

//    public static


}