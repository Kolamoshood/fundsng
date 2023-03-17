<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    // To ensure storing my forms into my database does not throw error, I have to do the protected fillable below:

    // protected $fillable = ['title', 'label', 'company', 'email', 'location', 'website', 'description'];

    // OR use unguard in the boot public funtion in Appserviceprovider.php file like this:
    // Model::unguard();

    public function ScopeFilter($query, array $filters){

        // This function helps with searching my database 
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' .request('search') . '%')
                ->orWhere('label', 'like', '%' .request('search') . '%')
                ->orWhere('company', 'like', '%' .request('search') . '%')
                ->orWhere('email', 'like', '%' .request('search') . '%')
                ->orWhere('location', 'like', '%' .request('search') . '%')
                ->orWhere('website', 'like', '%' .request('search') . '%')
                ->orWhere('description', 'like', '%' .request('search') . '%');
        }
    }
}
