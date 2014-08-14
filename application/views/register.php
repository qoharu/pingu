<form action="#" method="POST" class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 form-login center-modul signup-modul">
    <div class=alert><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <h4 class="alert-notif">Ups, ada yang eror!</h4>
    <p class=suggest>Cobalah mengecek kembali username yang anda masukkan.</p></div>
    <input type="text" name="real-name" placeholder="Nama asli" data-toggle="tooltip" data-original-title="Nama asli" data-placement="right">
    <div class="input-append date" id="dp3" data-date="01-01-2014" data-date-format="dd-mm-yyyy">
  <input id="tanggal" size="16" type="text" placeholder="Tanggal lahir">
</div>
    <input type="text" name="username" placeholder="Username" data-toggle="tooltip" data-original-title="Username" data-placement="right">
    <input type="password" name="password" placeholder="Password" data-toggle="tooltip" data-original-title="Password" data-placement="right">
    <input type="password" name="confirm-password" placeholder="Konfirmasi Password" data-toggle="tooltip" data-original-title="Konfirmasi" data-placement="right">
        <input type="submit" class="login" name="submit" value="Register">
    <a href="<?php echo site_url('account/login') ?>" class="pull-left forget">Mau login?</a>
    <input type="reset" class="pull-right">
</form>

<script src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tanggal').datepicker({
            format: "dd/mm/yyyy"
        });
    });
</script>