<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TestTable
 *
 * @property int $id
 * @property int|null $test
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TestTable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TestTable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TestTable whereTest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TestTable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TestTable extends Model
{
    //
}
