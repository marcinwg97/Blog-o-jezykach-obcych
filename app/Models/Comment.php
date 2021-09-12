<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Comment extends Model
    {

        protected $fillable = ['commentator', 'contents', 'post_id'];

    }
