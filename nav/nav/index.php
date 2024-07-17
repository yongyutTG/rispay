<?php

include('../../h_f/h_f/h.html');

if(empty($_SESSION['aid']))
{
echo "<script>window.location='../../'</script>";
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-primary"><img src="../../images/logo.png" width="60">
<a class="navbar-brand" href="#" style="color: white;font-size: 18px;padding: 0px 6px 0px 12px;"><b>DashBoard Register Payment System<br>Admin : <?php echo $_SESSION['aname'] ?></b></a>
 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto topnav">
<li class="nav-item active">
<a class="nav-link" href="../.main/" style="font-size: 18px;text-align: center;color: white;">หน้าหลัก <span class="sr-only">(current)</span>
</a>
</li>

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="../.member/" style="font-size: 18px;color: white;">สมาชิก </a>
</li>
</ul>

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="../.accept/" style="font-size: 18px;color: white;">ตอบรับชำระเงิน </a>
</li>
</ul>

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="../.cash/" style="font-size: 18px;color: white;">ชำระเงินแล้ว </a>
</li>
</ul>

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="../.nomoney/" style="font-size: 18px;color: white;">รอชำระเงิน </a>
</li>
</ul>

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="../.all/" style="font-size: 18px;color: white;">ทั้งหมด </a>
</li>
</ul>

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="../.slip/" style="font-size: 18px;color: white;">Slip หลักฐาน </a>
</li>
</ul>

<ul class="navbar-nav mr-auto">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;color: white;">ตั้งค่า </a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="../.admin/">กำหนด Admin</a>
<a class="dropdown-item" href="../.close/">กำหนดปิดลงทะเบียน</a>
</div>
</li>
</ul>

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="../../admin/cklogout.php" style="font-size: 18px;color: white;">ออกจากระบบ </a>
</li>
</ul>

</ul>
</div>
<!--</div>-->
</nav>

<style type="text/css">

.topnav a:hover {
border-bottom: 3px solid red;
}

</style>