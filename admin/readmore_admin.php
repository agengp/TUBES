<div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

            <?php foreach ($pengaduan as $key) {?>

                <div class="post-preview">
                <!-- untuk menampilkan isi laporan secara lengkap-->
                    <a href="post.html">
                        <h2 class="post-title">
                            <?php echo $key->judul_laporan;?>
                        </h2>
                        <h3 class="post-subtitle">
                            <!-- Untuk memotong jumlah huruf pada tampilan home -->
                            <?php 

                            echo $key->laporan;
                            ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <?php echo $key->username;?> <?php echo $key->tgl_melapor;?> for <?php echo $key->divisi;?> </p>
                
                <h4> JAWAB </h4>

                
         
              <table width="621" height="55" border="0">
                  
                    <form id="form1" method="post" action="<?php echo site_url('divisi_jawaban/insert')?>">
                    <tr>
                    <td><textarea type="text" name="jawaban" class="form-control"/></textarea></td>
                    </tr> 
                    <tr>
                    <tr>
                    <td>kode laporan </td>
                    <td>:</td>
                    <td><input name="kode_laporan" type="text"  size="15" class="form-control"/></td>
                    </tr>
                    <td colspan="3"><div align="center">
                        <input name="submit" type="submit" value="Submit" class="btn btn-success btn-small" />
                        <input type="reset" name="reset" value="Reset" class="btn btn-warning btn-small"/>
                        
                        </div></td>
                    </tr>
                    </table>
                    </form>
            

                </div>
               <hr>

            <?php }?>

                <!-- Pager -->
            </div>
        </div>
    </div>