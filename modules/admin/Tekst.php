<?php
require "C://wamp64/www/zavrsni_rad/config.php";
if(!Session::get('status')||Session::get('status')!=3) {
	header("Location: index.php");
}
Db::getConn();
?>

<html>
<head>
<script src="//cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>
</head>
<body>

<?php
	if (isset($_POST['btn_insert'])){
		$selectedText = new Text;
		$selectedText->naslov=$_POST['naslov'];
		$selectedText->opis=$_POST['opis'];
		$selectedText->insert(); 
	}

	if (isset($_POST['btn_update'])){
		
		$selectedText = new Text;
		$selectedText->naslov=$_POST['naslov'];
		$selectedText->opis=$_POST['opis'];
		$selectedText->id=$_POST['id'];
		$selectedText->update(); 
	}

	if (isset($_POST['btn_delete'])){
		$selectedText = new Text;
		$id= $_POST['id'];	
		$selectedText->del($id);
	}

	if (isset($_POST['home_page'])){
		$odabranaSlika = new Homepage;
		$odabranaSlika->slika=$_POST['slika'];
		$odabranaSlika->update(); 
	}
	
	if (isset($_POST['contact_add'])){
		$contact = new Contact;
		$contact->naslov=$_POST['naslov'];
		$contact->tekst=$_POST['tekst'];
		$contact->insert(); 
	}

	if (isset($_POST['contact_upp'])){
		
		$contact = new Contact;
		$contact->naslov=$_POST['naslov'];
		$contact->tekst=$_POST['tekst'];
		$contact->id=$_POST['id'];
		$contact->update(); 
	}

?>


<form method="post" action="Tekst.php">
<p>Id</p>
<input type="number" name="id"></input><br>
<p>Naslov</p>
<input type="text" name="naslov"></input><br><br>
<p>Opis</p>
 <textarea rows="4" cols="50" name="opis">
      
</textarea> 
  <script>
            CKEDITOR.replace( 'opis' );
  </script>
<br><br>
<input type="submit" name="btn_insert" value="Dodaj">
<input type="submit" name="btn_update" value="Izmeni">
<input type="submit" name="btn_delete" value="Obriši">
</form>

<br><br>
<form  method="post">


<p>Popust</p>
<input type="text" name="slika"></input><br><br>
<input type="submit" name="home_page" value="Promeni sliku">

</form>
<form method="post">
<p>Kontakt Id</p>
<input type="number" name="id"></input><br>
<p>Kontakt naslov</p>
<input type="text" name="naslov"></input><br><br>
<p>Kontakt tekst</p>
 <textarea rows="4" cols="50" name="tekst">
      
</textarea> 
  <script>
            CKEDITOR.replace( 'opis' );
  </script>
<br><br>

<input type="submit" name="contact_add" value="Dodaj">
<input type="submit" name="contact_upp" value="Promeni">
</form>

</body>


</html>