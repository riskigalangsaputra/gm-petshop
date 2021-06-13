<h3 class="mt-4">Layanan</h3>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Form</li>
</ol>
<div class="card mb-4">
  <div class="card-body">
    <form action="<?php echo site_url('backend/layanan/update') ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $datas->id_layanan?>" />
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Layanan</label>
        <div class="col-sm-10">
          <input type="text" name="nama_layanan" class="form-control" value="<?php echo $datas->nama_layanan?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="3" name="keterangan" ><?php echo $datas->keterangan?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
          <input type="hidden" name="old_image" value="<?php echo $datas->gambar ?>">
          <input type="file" class="form-control-file" name="gambar" id="imgInp">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <img id="blah" alt="300x280" src="<?=base_url('assets/backend/upload/'.$datas->gambar) ?>" width="300px;" />
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?=site_url('backend/layanan')?>" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>