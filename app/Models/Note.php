<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // protected $table = "Notas";

    // protected $table = 'notes';

    // protected $fillable = [
    //     'title',
    //     'description',
    //     'deadline',
    //     'done'
    // ];

    // protected $guarded = [
    //     'id'
    // ];

    // protected $casts = [
    //     'deadline' => 'date';
    // ];

    // protected $hidden = [
    //     'password'
    // ];
    
}

/*
    $note = new Note();
    $note->title = "Hola mundo";
    $note->description = "Lorem ipsum";
    $note->save();

    Note::get();

*/
