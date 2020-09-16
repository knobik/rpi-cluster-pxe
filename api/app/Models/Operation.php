<?php

namespace App\Models;

/**
 * App\Models\Operation
 *
 * @property int $id
 * @property int $node_id
 * @property bool $failed
 * @property string $name
 * @property string|null $description
 * @property string|null $log
 * @property \Illuminate\Support\Carbon|null $started_at
 * @property \Illuminate\Support\Carbon|null $finished_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereFailed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereFinishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereLog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereNodeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Operation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Operation extends BaseModel
{
    protected $table = 'operations';

    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'log' => 'string',
        'failed' => 'boolean',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'started_at',
        'finished_at',
    ];
}
