<?php 

class produits extends \Illuminate\Database\Eloquent\Model
{
    //
    protected $table = 'produits';
    protected $guarded = array();
    // The table rows that we want to allow mass assignment on
    // (For testing purposes, migrations, etc.)
    protected $fillable = ['id_P','NumDevis','Designation','Prix','Quantite'];

}
