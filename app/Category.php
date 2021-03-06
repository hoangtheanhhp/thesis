<?php

namespace App;

use App\Model as AppModel;

class Category extends AppModel
{
    protected $table = 'categories';

    public const COL_NAME = 'name';

    protected $fillable = [
        self::COL_NAME,
        self::COL_CREATED_AT,
        self::COL_UPDATED_AT,
        self::COL_DELETED_AT,
    ];
}
