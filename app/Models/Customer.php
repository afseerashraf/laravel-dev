<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Branch;
class Customer  extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function customerBranch(){
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
}
