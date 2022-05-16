<?php

namespace app\models;

use yii\base\Model;

use Yii;

/**
 * This is the model class for table "berkas_pagawai".
 *
 * @property int $id_berkas_pegawai
 * @property int $id_pegawai
 * @property string $jenis_identitas
 * @property string $no_identitas
 * @property string|null $tanggal_akhir_valid
 */
class BerkasPagawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berkas_pagawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'jenis_identitas', 'no_identitas'], 'required'],
            [['id_pegawai'], 'integer'],
            [['tanggal_akhir_valid'], 'safe'],
            [['jenis_identitas'], 'string', 'max' => 30],
            [['no_identitas'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berkas_pegawai' => 'Id Berkas Pegawai',
            'id_pegawai' => 'Id Pegawai',
            'jenis_identitas' => 'Jenis Identitas',
            'no_identitas' => 'No Identitas',
            'tanggal_akhir_valid' => 'Tanggal Akhir Valid',
        ];
    }
}
