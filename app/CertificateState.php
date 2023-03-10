<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Certificate_State\CertificateStatePresenter;

class CertificateState extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the concept that owns the DiplomaState
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function concept()
    {
        return $this->belongsTo(Concept::class);
    }

    public function present()
    {
        return new CertificateStatePresenter($this);
    }

    function getRandomString()
    {
        $characters     = '0123456789';
        $randomString     = "";

        for ($i = 0; $i < 6; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    public function generateUrl($value)
    {
        return Str::slug($value);
    }
}
