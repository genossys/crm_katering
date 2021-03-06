<?php

use Illuminate\Database\Seeder;
use App\Master\satuanModel;
use App\Master\kategoriModel;
use App\Master\productModel;
use Carbon\Carbon;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        satuanModel::insert([
            [
                'kdSatuan' => 'PCS',
                'namaSatuan' => 'PCS',
            ],
            [
                'kdSatuan' => 'DUS',
                'namaSatuan' => 'DUS',
            ],
            [
                'kdSatuan' => 'PKT',
                'namaSatuan' => 'PAKET',
            ],
            [
                'kdSatuan' => 'BOX',
                'namaSatuan' => 'BOX',
            ]
        ]);

        kategoriModel::insert([
            [
                'kdKategori' => 'PKT',
                'namaKategori' => 'Paket',
            ],
            [
                'kdKategori' => 'SNK',
                'namaKategori' => 'Snack',
            ],

        ]);

        productModel::insert([
            [
                'kdProduct'     => 'KD001',
                'namaProduct'   => 'Nama Product 1',
                'kdKategori'    => 'SNK',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 12500,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 1',
                'promo'         => 'T',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD002',
                'namaProduct'   => 'Nama Product 2',
                'kdKategori'    => 'SNK',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 10000,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 2',
                'promo'         => 'T',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD003',
                'namaProduct'   => 'Nama Product 3',
                'kdKategori'    => 'SNK',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 125000,
                'diskon'        => 10000,
                'deskripsi'     => 'Deskripsi Nama Product 3',
                'promo'         => 'T',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD004',
                'namaProduct'   => 'Nama Product 4',
                'kdKategori'    => 'SNK',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 50000,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 4',
                'promo'         => 'Y',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD005',
                'namaProduct'   => 'Nama Product 5',
                'kdKategori'    => 'PKT',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 50000,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 5',
                'promo'         => 'Y',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD006',
                'namaProduct'   => 'Nama Product 6',
                'kdKategori'    => 'PKT',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 50000,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 6',
                'promo'         => 'Y',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD007',
                'namaProduct'   => 'Nama Product 7',
                'kdKategori'    => 'PKT',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 50000,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 7',
                'promo'         => 'Y',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD009',
                'namaProduct'   => 'Nama Product 9',
                'kdKategori'    => 'PKT',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 50000,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 9',
                'promo'         => 'Y',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD010',
                'namaProduct'   => 'Nama Product 10',
                'kdKategori'    => 'PKT',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 50000,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 8',
                'promo'         => 'Y',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'kdProduct'     => 'KD008',
                'namaProduct'   => 'Nama Product 8',
                'kdKategori'    => 'PKT',
                'kdSatuan'      => 'PCS',
                'hargaJual'     => 50000,
                'diskon'        => 0,
                'deskripsi'     => 'Deskripsi Nama Product 8',
                'promo'         => 'Y',
                'urlFoto'       => '',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ]);

    }
}
