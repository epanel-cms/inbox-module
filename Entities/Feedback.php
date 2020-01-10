<?php

/* Author : Noviyanto Rahmadi 
 * E-mail : novay@btekno.id
 * Copyright 2020 Borneo Teknomedia. */

namespace Modules\Inbox\Entities;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $table = 'feedback';

    protected $fillable = [
		'uuid', 
		'nama', 
		'email', 
		'telepon', 
		'isi', 
		'jawaban', 
		'oleh', 
		'status'
	];

	public function scopeUuid($query, $uuid) {
        return $query->whereUuid($uuid);
    }

	public function operator() {
        return $this->belongsTo('Modules\Operator\Entities\User', 'oleh');
    }
}
