<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Branch;
class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customerBranch(){
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
}
