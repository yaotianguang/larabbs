<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //  数据库表结构里未生成时间戳,Laravel 此模型在创建和更新时不需维护 created_at 和 updated_at 这两个字段
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
    ];

}
