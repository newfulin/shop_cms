<?php
namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class PospChannelInfo extends Model
{
    public $timestamps = true;
    protected $table = 'posp_channel_info';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

}