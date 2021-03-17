<HTML>
<HEAD>
<TITLE> Penggunaan Join </TITLE>
</HEAD>
<BODY>
<?php
$var = array('18', '11', '2010');
$tanggal = join("/", $var);
echo "$tanggal";
?>
</BODY>
</HTML><HTML>
<HEAD>
<TITLE> Penggunaan In Array </TITLE>
</HEAD>
<BODY> 
<?php
$program = array("HTML", "PHP", "CSS", "JavaScript");
print_r($program);
$cari = "HTML";
if (in_array($cari, $program)) {
 echo "Program Basis Web $cari ada di dalam array";
} else {
 echo "Program Basis Web $cari tidak ada di dalam array";
}
?>
</BODY>
</HTML> 