<?php 
include 'header.php';


 $hakkimizdasor=$db->prepare("Select * FROM hakkimizda where hakkimizda_id=:id");
 $hakkimizdasor->execute(array(
'id'=> 0
 ));
 $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


 ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hakkımızda Ayar<small>
                      <?php 

                      if(@$_GET['durum']=="ok"){?>

                            <b style="color:green;">İşlem Başarılı</b>
                      <?php }
                      elseif(@$_GET['durum']=="no"){?>
                        <b style="color:red;">İşlem Başarısız</b>

                 <?php     }



                       
                       ?>



                    </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!-- / => En Kök Dizine Çıkar ../ => bir üst dizine çık -->
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda Başlık <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_baslik" required="required" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda İçerik<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_icerik" value="<?php echo $hakkimizdacek['hakkimizda_icerik'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda Video<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_video" value="<?php echo $hakkimizdacek['hakkimizda_video'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyon<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_vizyon" required="required" value="<?php echo $hakkimizdacek['hakkimizda_vizyon'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Misyon<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_misyon" required="required" value="<?php echo $hakkimizdacek['hakkimizda_misyon'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="hakkimizdakaydet" class="btn btn-primary">Güncelle</button>
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
      <?php include 'footer.php' ?>