<?= $this->extend('admin/default') ?>
<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <h1>DataTables</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">daftar-data</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>Daftar Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>UNITUPI</th>
                            <th>UNITAP</th>
                            <th>UNITUP</th>
                            <th>TGL_MOHON</th>
                            <th>NO_AGENDA</th>
                            <th>NO_REGISTER</th>
                            <th>IDPEL</th>
                            <th>NAMA</th>
                            <th>NAMA_PEMOHON</th>
                            <th>ALAMAT</th> 
                            <th>ALAMAT_PEMOHON</th>
                            <th>KORDINAT_X</th>
                            <th>KORDINAT_Y</th>
                            <th>NO_TELP</th>
                            <th>NOTELP_HP</th>
                            <th>JENIS_TRANSAKSI</th>
                            <th>TARIF_LAMA</th>
                            <th>DAYA_LAMA</th>
                            <th>TARIF</th>
                            <th>DAYA</th>
                            <th>ASAL_MOHON</th>
                            <th>JENIS_MK</th>
                            <th>RPUJL</th>
                            <th>RPBP</th>
                            <th>RPSTROM_AWAL</th>
                            <th>JENIS_BAYAR</th>
                            <th>TGLBAYAR</th>
                            <th>STATUS_PERMOHONAN</th>
                            <th>STATUSPDL</th>
                            <th>TGL_SIP</th>
                            <th>TGL_PK</th>
                            <th>UNITTP</th>
                            <th>TGL_PEREMAJAAN</th>
                            <th>TGL_RUBAHMK</th>
                            <th>THBLMUT</th>
                            <th>TGL_PDL</th>
                            <th>NOMOR_PDL</th>
                            <th>TGL_PENANGGUHAN</th>
                            <th>TGL_RESTITUSI</th>
                            <th>TGL_BPTITIPAN</th>
                            <th>TGL_PENGESAHAN</th>
                            <th>DURASI_HARI_KERJA</th>
                            <th>DURAS_HARI_KALENDER</th>
                            <th>KRITERIA_TMP</th>
                            <th>ALASAN_KRITERIA_TMP</th>
                            <th>KETERANGAN_ALASAN_KRITERIA_TMP</th>
                            <th>ESTIMASI_HARI_DURASI_LAYANAN</th>
                            <th>STATUS_PENAGGUHAN</th>
                            <th>ALASAN_PENANGGUHAN</th>
                            <th>KETERANGAN_ALASAN_PENANGGUHAN</th>
                            <th>STATUS_RESTITUSI_ATAU_TITIPAN</th>
                            <th>PAKETSLO</th>
                            <th>PLTS_ATAP</th>    
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php for($i=0; $i<count($dataExcel); $i++) { ?>
                          <tr>
                            <td>
                              <?= $no ?>
                            </td>
                            <td>
                                <?= $dataExcel[$i]['UNITUPI'] ?>

                            </td>
                            <td>
                                <?= $dataExcel[$i]['UNITAP'] ?>
                            </td>
                            <td>
                                <?= $dataExcel[$i]['UNITUP']  ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_MOHON'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['NO_AGENDA'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['NO_REGISTER'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['IDPEL'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['NAMA'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['NAMA_PEMOHON'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['ALAMAT'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['ALAMAT_PEMOHON'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['KORDINAT_X'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['KORDINAT_Y'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['NO_TELP'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['NOTELP_HP'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['JENIS_TRANSAKSI'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TARIF_LAMA'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['DAYA_LAMA'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TARIF'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['DAYA'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['ASAL_MOHON'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['JENIS_MK'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['RPUJL'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['RPBP'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['RPSTROM_AWAL'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['JENIS_BAYAR'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGLBAYAR'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['STATUS_PERMOHONAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['STATUSPDL'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_SIP'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_PK'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['UNITTP'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_PEREMAJAAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_RUBAHMK'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['THBLMUT'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_PDL'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['NOMOR_PDL'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_PENANGGUHAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_SIAPSAMBUNG'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_RESTITUSI'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_BPTITIPAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['TGL_PENGESAHAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['DURASI_HARI_KERJA'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['DURAS_HARI_KALENDER'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['KRITERIA_TMP'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['ALASAN_KRITERIA_TMP'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['KETERANGAN_ALASAN_KRITERIA_TMP'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['ESTIMASI_HARI_DURASI_LAYANAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['STATUS_PENAGGUHAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['ALASAN_PENANGGUHAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['KETERANGAN_ALASAN_PENANGGUHAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['STATUS_RESTITUSI_ATAU_TITIPAN'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['PAKETSLO'] ?> 
                            </td>
                            <td>
                                <?= $dataExcel[$i]['PLTS_ATAP'] ?> 
                            </td>
                          </tr>
                          <?php $no++; ?>
                          <?php } ?>
                        </tbody>
                        </form>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>


<?= $this->endsection()?>