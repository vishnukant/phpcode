<?php

#-------Very Normal Inseration of record in data base by uisng class-------
if(isset($_POST['submit'])){
	require_once('test2.php');
	$val  = new test2();	
    $data =  array(
		'name' => $_POST['text1'],
		'sex'  => $_POST['radio1'],
		//'chk'  => $_POST['chk1'],
		'file' => $_FILES['file']['name']
	);
	$val->insert_data($data);
}

?>

<form name="testform" id="testform" method="post" action="test1.php" enctype="multipart/form-data"  >
    <input type="text" name="text1" />
    <input type="radio" name="radio1" value="male" />
    <input type="radio" name="radio1" value="female" />
    <input type="checkbox" name="chk1" value="chk1"  />
    <input type="checkbox" name="chk2" value="chk2"  />
    <input type="checkbox" name="chk3" value="chk3"  />
    <input type="checkbox" name="chk4" value="chk14"  />
    <input type="file" name="file"  />
    
    <input type="submit" name="submit" value="Submit" />
</form>