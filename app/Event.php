<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table = 'assignments';
  public $timestamps = 'false';
    protected $fillable = ['title','start_date','end_date'];
}
