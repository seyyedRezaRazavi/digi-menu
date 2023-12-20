<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Menu extends Model
{
    use HasFactory;
    protected $fillable=['name','user_id'];

    public function titles(): HasMany
    {
        return $this->hasMany(Title::class);
    }

    

    static function getAllMenus(){
        $user_id = Auth::id();
        return self::where('user_id',$user_id)->get();
        
    }

    public function getLinkAttribute($key)
    {
        return  route('menu.show.user',base64_encode($this->id));
    }
    
}

 
