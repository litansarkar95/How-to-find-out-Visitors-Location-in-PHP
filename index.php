<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Location</title>
</head>
<style>
.content{
width:700px;
margin:30px auto;
}
</style>
<body>
    <div class="content">
    <h2>User Location Information</h2>
    <?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

if($result->status=='success'){
    echo "Country : ".$result->country."<br>";
    echo "Region : ".$result->regionName."<br>";
    echo "City : ".$result->city."<br>";
    if(isset($result->lat) && isset($result->lon)){
        echo "Lat: ".$result->lat.'<br>';
        echo "Lon: ".$result->lon.'<br>';

    }
    echo "IP :".$result->query.'<br>';
}


?>
    </div>
</body>
</html>