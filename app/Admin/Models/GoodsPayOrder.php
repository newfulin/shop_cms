<?php
/**
 * Created by PhpStorm.
 * User: wqb
 * Date: 2018/5/25
 * Time: 11:25
 */

namespace App\Admin\Models;


use Illuminate\Database\Eloquent\Model;

class GoodsPayOrder extends Model
{
    protected $table = "goods_pay_order";
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $timestamps = true;
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    public function user()
    {
        return $this->hasOne(CommUserInfo::class,'id','user_id');
    }
}