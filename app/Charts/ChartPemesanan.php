<?php

namespace App\Charts;

use App\Models\Pesanan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ChartPemesanan
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
{
    $jumlahPesanan = Pesanan::count();
    $jumlahDikirim = Pesanan::where('status', 'Sudah Dikirim')->count();
    $jumlahBelumDikirim = Pesanan::where('status', 'Belum Dikirim')->count(); 

    return $this->chart->barChart()
        ->setTitle('Statistik Data Pemesanan')
        ->setWidth(1000)
        ->setHeight(500)
        ->addData('jumlah Pemesanan', [$jumlahPesanan, 0])
        ->addData('jumlah Sudah Dikirim', [$jumlahDikirim, 0])
        ->addData('jumlah Belum Dikirim', [$jumlahBelumDikirim, 0]);
}

}
