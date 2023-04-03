<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DateTime;

class pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'NORM';
    const CREATED_AT = 'TANGGAL';
    protected $dates = ['TANGGAL_LAHIR'];
    public function scopeFilter($query)
    {
        if (request('search')){
            $query->where('NORM','like',''.request('search').'')
                    ->orWhere('NAMA','like','%'.request('search').'%');
        }
    }
    public function GetTahun()
    {   
        $today = Carbon::today();
        $TANGGAL_LAHIR = Carbon::parse($this->TANGGAL_LAHIR);
        $diffYears = $TANGGAL_LAHIR->diffInYears($today);
        $diffMonths = $TANGGAL_LAHIR->diffInMonths($today) % 12;
        $diffDays = $TANGGAL_LAHIR->diffInDays($today) % 30;
        return "$diffYears $diffMonths $diffDays";
    }
    public function GetBulan()
    {   
        $today = Carbon::today();
        $TANGGAL_LAHIR = Carbon::parse($this->TANGGAL_LAHIR);
        $diffMonths = $TANGGAL_LAHIR->diffInMonths($today) % 12;
        return "$diffMonths";
    }
    public function GetHari()
    {   
        $today = Carbon::today();
        $TANGGAL_LAHIR = Carbon::parse($this->TANGGAL_LAHIR);
        $diffDays = $TANGGAL_LAHIR->diffInDays($today) % 30;
        return "$diffDays";
    }
    
}
