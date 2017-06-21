<!doctype html>
<html>
	<head>
		<title></title>
	</head>

	<body>
	<?php

$region = $country = $state = $city = null; //declare vars

$conn = mysql_connect('localhost', 'username', 'password');
$db = mysql_select_db('selects',$conn);

if(isset($_GET["region"]) && is_numeric($_GET["region"]))
{
    $region = $_GET["region"];
}

if(isset($_GET["country"]) && is_numeric($_GET["country"]))
{
    $country = $_GET["country"];
}

if(isset($_GET["state"]) && is_numeric($_GET["state"]))
{
    $state = $_GET["state"];
}

if(isset($_GET["city"]) && is_numeric($_GET["city"]))
{
    $city = $_GET["city"];
}

?>

<script language="JavaScript">

function autoSubmit()
{
    var formObject = document.forms['theForm'];
    formObject.submit();
}

</script>

<form name="theForm" method="get">

    <!-- REGION SELECTION -->

    <select name="region" onChange="autoSubmit();">
        <option value="null"></option>
        <option VALUE="1" <?php if($region == 1) echo " selected"; ?>>East</option>
        <option VALUE="2" <?php if($region == 2) echo " selected"; ?>>West</option>
    </select>

    <br><br>

    <!-- COUNTRY SELECTION BASED ON REGION VALUE -->

    <?php

    if($region != null && is_numeric($region))
    {

    ?>

    <select name="country" onChange="autoSubmit();">
        <option VALUE="null"></option>

        <?php

        //POPULATE DROP DOWN MENU WITH COUNTRIES FROM A GIVEN REGION

        $sql = "SELECT COUN_ID, COUN_NAME FROM COUNTRY WHERE RE_ID = $region";
        $countries = mysql_query($sql,$conn);

        while($row = mysql_fetch_array($countries))
        {
            echo ("<option VALUE=\"$row[COUN_ID]\" " . ($country == $row["COUN_ID"] ? " selected" : "") . ">$row[COUN_NAME]</option>");
        }

        ?>

    </select>

    <?php

    }

    ?>

    <br><br>

    <?php

    if($country != null && is_numeric($country) && $region != null)
    {

    ?>

    <select name="state" onChange="autoSubmit();">
        <option VALUE="null"></option>

        <?php

        //POPULATE DROP DOWN MENU WITH STATES FROM A GIVEN REGION, COUNTRY

        $sql = "SELECT STAT_ID, STAT_NAME FROM states WHERE COUN_ID = $country ";
        $states = mysql_query($sql,$conn);

        while($row = mysql_fetch_array($states))
        {
            echo ("<option VALUE=\"$row[STAT_ID]\" " . ($state == $row["STAT_ID"] ? " selected" : "") . ">$row[STAT_NAME]</option>");
        }

        ?>    

    </select>

    <?php

    }

    ?>

    <br><br>

    <?php

    if($state != null && is_numeric($state) && $region != null && $country != null)
    {

    ?>

    <select name="city" onChange="autoSubmit();">
        <option VALUE="null"></option>

        <?php

        //POPULATE DROP DOWN MENU WITH CITIES FROM A GIVEN REGION, COUNTRY, STATE

        $sql = "SELECT CIT_ID, CITY_NAME FROM CITY WHERE STAT_ID = $state ";
        $cities = mysql_query($sql,$conn);

        while($row = mysql_fetch_array($cities))
        {
            echo ("<option VALUE=\"$row[CIT_ID]\" " . ($city == $row["CIT_ID"] ? " selected" : "") . ">$row[CITY_NAME]</option>");
        }

        ?>    

    </select>

    <?php

    }

    ?>

</form>



	</body>
</html>