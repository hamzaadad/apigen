

class {model} extends \Illuminate\Database\Eloquent\Model
{
    //
    protected $table = '{model}';
    protected $guarded = array();
    // The table rows that we want to allow mass assignment on
    // (For testing purposes, migrations, etc.)
    protected $fillable = [{fields}];

}
