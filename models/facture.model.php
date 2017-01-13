<?php 

class facture extends \Illuminate\Database\Eloquent\Model
{
    //
    protected $table = 'facture';
    protected $guarded = array();
    // The table rows that we want to allow mass assignment on
    // (For testing purposes, migrations, etc.)
    protected $fillable = ['NumFacture','DateFacture','IDBL'];

}
