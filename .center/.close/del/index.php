<?php

include('../../../h_f/h_f/h.html');

if(isset($_POST['submit'])){

require("../../../db/admin.php");

$object=new CRUD();

$aid=$_POST['aid'];
	
$object->Deladmin(
$aid
)
;
echo"<script>
swal({
title: 'ลบข้อมูลเรียบร้อยแล้ว',
text: '',
icon: 'success'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";

}

include('../../../h_f/h_f/f.html');

?>