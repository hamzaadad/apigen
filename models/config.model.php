<?php 

class config extends \Illuminate\Database\Eloquent\Model
{
    //
    protected $table = 'config';
    protected $guarded = array();
    // The table rows that we want to allow mass assignment on
    // (For testing purposes, migrations, etc.)
    protected $fillable = ['Raison_Social','Adresse_Conf','Logo_Src','Tel','Email_Conf','Fax','website','patente','RC','IFiscal','Autre_Infos'];

}
