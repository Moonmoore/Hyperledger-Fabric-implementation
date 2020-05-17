<?PHP

header( 'Location: request_sent.html' ) ;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, email FROM accounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - username: " . $row["username"]. " - email: " . $row["email"];
		$id = $row["id"];
		$name = $row["username"];
		$email = $row["email"];
    }
} else {
    echo "0 results";
}
$conn->close();

$message = $_POST['reason'];
$comments = $_POST['comments'];
if(!empty($_POST['data'])){
	$check = $_POST['data'];
	$var1 = $check[0];
	$var2 = $check[1];
	$var3 = $check[2];
	$var4 = $check[3];
	$var5 = $check[4];
	$var6 = $check[5];
	$var7 = $check[6];
	$var8 = $check[7];
	$var9 = $check[8];
	$var10 = $check[9];
	$var11 = $check[10];
	$var12 = $check[11];
	$var13 = $check[12];
	$var14 = $check[13];
	$var15 = $check[14];
	$var16 = $check[15];
	$var17 = $check[16];
	$var18 = $check[17];
	$var19 = $check[18];
	$var20 = $check[19];
	$var21 = $check[20];
	$var22 = $check[21];
	$var23 = $check[22];
	$var24 = $check[23];
	$var25 = $check[24];
	$var26 = $check[25];
	$var27 = $check[26];
	$var28 = $check[27];
	$var29 = $check[28];
	$var30 = $check[29];
	$var31 = $check[30];
	$var32 = $check[31];
	$var33 = $check[32];
	$var34 = $check[33];
	$var35 = $check[34];
	$var36 = $check[35];
	$var37 = $check[36];
	$var38 = $check[37];
	$var39 = $check[38];
	$var40 = $check[39];
	$var41 = $check[40];
	$var42 = $check[41];
	$var43 = $check[42];
	$var44 = $check[43];
	$var45 = $check[44];
	$var46 = $check[45];
	$var47 = $check[46];
	$var48 = $check[47];
	$var49 = $check[48];
	$var50 = $check[49];
	$var51 = $check[50];
	$var52 = $check[51];
	$var53 = $check[52];
	$var54 = $check[53];
	$var55 = $check[54];
	$var56 = $check[55];
	$var57 = $check[56];
	$var58 = $check[57];
	$var59 = $check[58];
}
else{
	$var1 = 'no data requested';
}

$dateRange = $_POST['dateRange'];

//possibly change email admin@nersc.gov
$to = "buckshot552@gmail.com";
$subject = "Data request";
$headers = "From: $email\n";
$message = "Name: $name
User ID: $id
Reason: $message
Comments / special requests: $comments
Date range: $dateRange
Data requested: $var1
$var2
$var3
$var4
$var5
$var6
$var7
$var8
$var9
$var10
$var11
$var12
$var13
$var14
$var15
$var16
$var17
$var18
$var19
$var20
$var21
$var22
$var23
$var24
$var25
$var26
$var27
$var28
$var29
$var30
$var31
$var32
$var33
$var34
$var35
$var36
$var37
$var38
$var39
$var40
$var41
$var42
$var43
$var44
$var45
$var46
$var47
$var48
$var49
$var50
$var51
$var52
$var53
$var54
$var55
$var56
$var57
$var58
$var59";

mail($to,$subject,$message,$headers);
?>