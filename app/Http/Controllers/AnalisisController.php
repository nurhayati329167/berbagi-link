<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Spatie\Analytics\Period;
use Spatie\Analytics\Analytics;

class AnalisisController extends Controller
{
    public function chart(){
        $date_start = carbon::now()->subYear();
        $date_end = carbon::now();
        // $startDate = date_create('2021-06-01');
        // $endDate = date_create();
        
        $diff = date_diff($date_start, $date_end);
        // $da = Period::create($startDate, $endDate);
        $coba = Analytics::fetchTotalVisitorsAndPageViews(Period::days(1));
        // dd($coba);
        
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days($diff->days));
        $data['semua'] = Analytics::fetchMostVisitedPages(Period::days($diff->days));;
        // dd($analyticsData[0]['date']->isoFormat('Y-MM-D'));
        $totvis_jan =0;
        $totvis_feb =0;
        $totvis_mar =0;
        $totvis_apr =0;
        $totvis_mei =0;
        $totvis_jun =0;
        $totvis_jul =0;
        $totvis_agu =0;
        $totvis_sep =0;
        $totvis_okt =0;
        $totvis_nov =0;
        $totvis_des =0;

        $januari = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '01';
        });
        foreach($januari as $v){
            $totvis_jan += $v['visitors'];
        }

        $febuari = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '02';
        });
        foreach($febuari as $v){
            $totvis_feb += $v['visitors'];
        }

        $maret = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '03';
        });
        foreach($maret as $v){
            $totvis_mar += $v['visitors'];
        }

        $april = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '04';
        });
        foreach($april as $v){
            $totvis_apr += $v['visitors'];
        }

        $mei = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '05';
        });
        foreach($mei as $v){
            $totvis_mei += $v['visitors'];
        }

        $juni = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '06';
        });
        foreach($juni as $v){
            $totvis_jun += $v['visitors'];
        }

        $juli = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '07';
        });
        foreach($juli as $v){
            $totvis_jul += $v['visitors'];
        }
        
        $agustus = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '08';
        });
        foreach($agustus as $v){
            $totvis_agu += $v['visitors'];
        }
        
        $september = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '09';
        });
        foreach($september as $v){
            $totvis_sep += $v['visitors'];
        }
        
        $oktober = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '10';
        });
        foreach($oktober as $v){
            $totvis_okt += $v['visitors'];
        }
        
        $november = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '11';
        });
        foreach($november as $v){
            $totvis_nov += $v['visitors'];
        }
        
        $desember = $analyticsData->filter(function($value, $key) {
            return $value['date']->isoFormat('MM') == '12';
        });
        foreach($desember as $v){
            $totvis_des += $v['visitors'];
        }
        
        $data['label'] = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        $data['chart'] = [$totvis_jan, $totvis_feb, $totvis_mar, $totvis_apr, $totvis_mei, $totvis_jun, $totvis_jul, $totvis_agu, $totvis_sep,$totvis_okt,$totvis_nov,$totvis_des];
        return $data;
    }
}
