<?php

namespace App;

use App\Model as AppModel;

class Course extends AppModel
{
    protected $table = 'courses';

    // Column name
    public const COL_NAME = 'name';
    public const COL_CATEGORY_ID = 'category_id';
    public const COL_USER_ID = 'user_id';
    public const COL_DESCRIPTION = 'description';
    public const COL_THUMBNAIL = 'thumbnail';
    public const COL_PFR = 'pfr';
    public const COL_LINK = 'link';
    public const COL_STATUS = 'status';

    // Constant
    public const PER_PAGE = 6;

    protected $fillable = [
        self::COL_NAME,
        self::COL_CATEGORY_ID,
        self::COL_USER_ID,
        self::COL_DESCRIPTION,
        self::COL_THUMBNAIL,
        self::COL_PFR,
        self::COL_LINK,
        self::COL_STATUS,
    ];

    protected $attributes = [
        self::COL_THUMBNAIL => '/images/course_2.jpg',
    ];

//    protected $hidden = [
//        self::COL_PFR,
//    ];

    protected $casts = [
        self::COL_PFR => 'array',
        self::COL_STATUS => 'boolean',
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function lesson() {
        return $this->hasMany('App\Lesson');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
