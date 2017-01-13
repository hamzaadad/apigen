<?php 

class devis extends \Illuminate\Database\Eloquent\Model
{
    //
    protected $table = 'devis';
    protected $guarded = array();
    // The table rows that we want to allow mass assignment on
    // (For testing purposes, migrations, etc.)
    protected $fillable = ['NumDevis','ID','DateDevis'];

}
