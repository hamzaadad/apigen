<?php 

class users extends \Illuminate\Database\Eloquent\Model
{
    //
    protected $table = 'users';
    protected $guarded = array();
    // The table rows that we want to allow mass assignment on
    // (For testing purposes, migrations, etc.)
    protected $fillable = ['Id_User','NomUtilisateur','Email_User','PassWord','USER','CURRENT_CONNECTIONS','TOTAL_CONNECTIONS'];

}
