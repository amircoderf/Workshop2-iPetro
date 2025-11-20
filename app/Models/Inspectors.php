<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspectors extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * Migration created table name `inspector` (singular).
     *
     * @var string
     */
    protected $table = 'inspector';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'inspector_id';

    /**
     * The "type" of the primary key ID.
     * Migration used big increments; keep default integer type.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'qualification',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
