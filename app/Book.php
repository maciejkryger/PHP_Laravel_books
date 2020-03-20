<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //można sterować nazwami tabel w bazie
    protected $table = 'books';
    //można sterować nazwami klucza w bazie, gdy nazwa inna niż id
    protected $primaryKey = 'id';

    //jeżeli klucz nie ma być cyfrą i nie ma rosnąć automatycznie musi być false
    public $incrementing = true;

    //gdy klucz ma być tekstowy
    // protected $keyType = 'string';

    //jeżeli nie chcesz mieć kolumn utworzenia i ostatniej aktualizacji false
    public $timestamps = true;

	//If you need to customize the names of the columns used to store the timestamps, you may set the CREATED_AT and UPDATED_AT constants in your model:
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    //gdy nazwa połączenia ma być inna niż standardowa
    // protected $connection = 'books_connection';

    // The model's default values for attributes.
    //  protected $attributes = [
    //     'delayed' => false,
    // ];

    // protected $fillable = [
    //     'title', 'author', 'publishing_house','category'
    // ];


    


}
