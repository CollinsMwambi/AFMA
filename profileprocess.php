<? php
if(isset($_POST['psubmit'])){

echo"<pre>",print_r($_POST),"</pre>";
echo"<pre>",print_r($_FILES),"</pre>";
echo"<pre>",print_r($_FILES['profileImage']),"</pre>";


die();

}




?>
