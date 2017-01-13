<?php 

class client extends \Illuminate\Database\Eloquent\Model
{
    //
    protected $table = 'client';
    protected $guarded = array();
    // The table rows that we want to allow mass assignment on
    // (For testing purposes, migrations, etc.)
    protected $fillable = ['ID','RaisonSocial','Adresse','Email','TEL'];

}
