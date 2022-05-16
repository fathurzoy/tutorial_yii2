<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%berkas_pagawai}}`.
 */
class m220516_053200_create_berkas_pagawai_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%berkas_pagawai}}', [
            'id_berkas_pegawai' => $this->primaryKey(),
            'id_pegawai' => $this->integer()->notNull(),
            'jenis_identitas' => $this->string(30)->notNull(),
            'no_identitas' => $this->string(50)->notNull(),
            'tanggal_akhir_valid' => $this->date(),
        ]);

        $this->addForeignKey(
            'fk-berkas_pegawai_id_pegawai',
            'berkas_pegawai',
            'id_pegawai',
            'user',
            'id_pegawai',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%berkas_pagawai}}');
    }
}
