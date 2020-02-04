<?php
#app/Models/ShopLayoutType.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopLayoutType extends Model
{
    public $timestamps = false;
    public $table = 'shop_layout_type';
    protected $connection = SC_CONNECTION;
    public static function getTypes()
    {
        return self::pluck('name', 'key')->all();
    }
}
