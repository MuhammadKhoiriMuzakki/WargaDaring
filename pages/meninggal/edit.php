<?php include('../_partials/top.php') ?>

<?php # include('list_keluarga.php') ?>
<?php include('data-edit.php') ?>
<h1 class="page-header">Tambah Data Kematian</h1>
<?php include('_partials/menu.php') ?>
<form action="store.php" method="post">
<label class="col-md-0 control-label" for="="><h4>Data Kematian</h4></label>
  <legend></legend>
  <div class="form-group">
    <label class="col-md-3 control-label" for="nama_warga">Nama Penduduk</label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="nama_warga" id="nama_warga" size="30" placeholder="Nama" value="<?php echo $data_kematian[0]['nama_warga'] ?>" required/> 
      <?php # echo form_error('nama_bayi', '<p class="field_error">','</p>')?>  
    </span>
    </div>
    </div>
    
    <div class="form-group">
    <label class="col-md-3 control-label" for="id_jen_kel">Jenis Kelamin</label>
    <div class="col-md-9">
      <div class="radio">
        <?php # echo form_radio('id_jen_kel', '1', FALSE); ?><label class="radio"><input type="radio" name="jk" value="L"> Laki - laki</label>
      </div>
      <div class="radio">
        <?php # echo form_radio('id_jen_kel', '2', FALSE); ?><label class="radio"><input type="radio" name="jk" value="L"> Perempuan</label>
      </div>
      <?php # echo form_error('id_jen_kel', '<p class="field_error">','</p>')?> 
    </div>
    </div>
    
    <div class="form-group">
    <label class="col-md-3 control-label" for="tgl_meninggal">Tanggal Kematian</label> 
    <div class="col-md-9">  
    <div class="input-group">
      <span class="input-group-addon">
        <span class="fa fa-table"></span>
      </span>  
      <input type="text" class="form-control datepicker input-md" name="tgl_meninggal" size="20" readonly="readonly" value="<?php echo $data_kematian[0]['tgl_meninggal'] ?>" />
    </div>
    <span class="help-block"> 
      <?php # echo form_error('tgl_kelahiran', '<p class="field_error">','</p>')?>    
    </span>
    </div>
    </div>
    
  
    
    <div class="form-group">
     <label class="col-md-3 control-label" for="sebab">Sebab </label>
    <div class="col-md-9">
    <span class="help-block">
       <input type="text" class="form-control input-md" name="sebab" id="sebab" size="20" placeholder="Sebab " value="<?php echo $data_kematian[0]['sebab'] ?>" required/> 
      <?php # echo form_error('panjang_bayi', '<p class="field_error">','</p>')?>
    </span>
    </div>
    </div>
  
    <div class="form-group">
      <label class="col-md-3 control-label" for="tempat_kematian">Tempat Kematian</label>
      <div class="col-md-9">
      <span class="help-block">
        <input type="text" class="form-control input-md" name="tempat_kematian" id="tempat_kematian" size="20" placeholder="Tempat Kematian " value="<?php echo $data_kematian[0]['sebab'] ?>" required/>
        <?php ?>
      </span> 
      </div>
    </div>
  <legend>&nbsp </legend> 
  <!--
  <label class="col-md-0 control-label" for="#"><h4>Data Orang Tua</h4></label>
  <legend></legend>
  
    <div class="form-group">
       <label class="col-md-3 control-label" for="no_nama_kk">Pencarian Kepala Keluarga</label> 
       <div class="col-md-9">
       <span class="help-block">
         <select class="form-control selectlive" name="nama_kepala_keluarga" id="isian" required>
          <option value="" selected disabled>- cari -</option>
          <?php foreach ($data_keluarga as $keluarga) : ?>
          <option value="<?php echo $keluarga['nomor_keluarga'] ?>" no_kk="<?php echo $keluarga['nomor_keluarga'] ?>"
           nm_kk="<?php echo $keluarga['nama_warga'] ?>">
            <?php echo $keluarga['nama_warga']?> (No. KK : <?php echo $keluarga['nomor_keluarga'] ?>)
          </option>
          <?php endforeach ?>
          </select>
       <!--<input type="text" class="form-control" name="no_nama_kk" id="no_nama_kk" size="50" placeholder="No Kepala Keluarga / Nama (min 2 karakter)"  />

      </span>
      <legend><br></legend>
       </div>
    </div>
-->
  
    
   
    
    <div class="form-group">
       <label class="col-md-3 control-label" for="nama_pelapor">Nama Pelapor</label> 
       <div class="col-md-9">
       <span class="help-block">
       <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor" size="50" placeholder="Nama Pelapor" value="<?php echo $data_kematian[0]['nama_pelapor'] ?>"  /> 
       <?php #echo form_error('nama_ayah', '<p class="field_error">','</p>')?>
      </span>
       </div>
    </div>

    <div class="form-group">
       <label class="col-md-3 control-label" for="hubungan_pelapor">Hubungan Pelapor</label> 
       <div class="col-md-9">
       <span class="help-block">
       <input type="text" class="form-control" name="hubungan_pelapor" id="hubungan_pelapor" size="50" placeholder="Hubungan Pelapor" value="<?php echo $data_kematian[0]['nama_ibu'] ?>" /> 
       <?php # echo form_error('nama_ibu', '<p class="field_error">','</p>')?>
      </span>
       </div>
    </div>


  <legend>&nbsp </legend> 
  <label class="col-md-0 control-label" for="="><h4>Data Kematian</h4></label>
  <legend></legend>
  
   
  
    
  <legend>&nbsp </legend> 
  <!--
  <label class="col-md-0 control-label" for="="><h4>Pencetak Surat Kelahiran</h4></label>
  <legend></legend>
  <div class="form-group">
     <label class="col-md-3 control-label" for="penolong">Aparat Desa</label>
    <div class="col-md-9">
      <div class="form-group">
        <select class="form-control" name="aparat_desa">
          <option>--Pilih--</option>
          <option>Kepala Desa</option>
          <option>Sekretaris Desa</option>
          <option>Kaur</option>
        </select>
      </div>

        <?php # $id = 'id="id_perangkat" class="form-control input-md" required'; echo form_dropdown('id_perangkat',$nama_pamong,'',$id)?>
    <span class="help-block"><?php #echo form_error('id_perangkat', '<p class="field_error">','</p>')?> </span> 
    </div>  
  </div>
-->
<legend></legend>
<button type="submit" class="btn btn-success">
  <i class="fa fa-save"></i> Simpan
</button>
<button type="reset" class="btn btn-warning">
  <i class="fa fa-repeat 
 "></i> Reset
</button>
</form>



<?php include('../_partials/bottom.php') ?>
<script type="text/javascript">
    $("#isian").on("change",function(){
        var no_kk =$("#isian option:selected").attr("no_kk");
        var nm_kk =$("#isian option:selected").attr("nm_kk");
//window.alert ("hehe");
        //pindah isi ke tag lain
        $("#no_kk_sementara").val(no_kk);
        $("#no_kk").val(no_kk);
        $("#nama_kk_sementara").val(nm_kk);
        $("#nama_kk").val(nm_kk);
  });

</script>
