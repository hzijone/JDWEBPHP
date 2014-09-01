<?php 

    $dbh = new PDO("sqlite:upsdata.dat", null, null);  
	
    $sth = $dbh->query('SELECT * FROM t_ups_rundata');
	
	 $result = $sth->fetchAll();
	 $i=0;
	 $CountArray=0;
	 foreach($result[0] as $x=>$x_value)
	 		{
				
			   if($i%2==0)
			    {									
					$UPSData[$CountArray++]=$x_value;
				}
					$i++;
			}
			//print_r ($UPSData);
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='utf-8'?>";
echo "<upsdataxml>";    
echo	"<protocol_id>$UPSData[0]</protocol_id>";
echo    "<curr_time>$UPSData[1]</curr_time>";
echo 	"<input_phase>$UPSData[2]</input_phase>";
echo    "<inputvol_a>$UPSData[3]</inputvol_a>";	 
echo    "<inputvol_b>$UPSData[4]</inputvol_b>";	 
echo    "<inputvol_c>$UPSData[5]</inputvol_c>";	 
echo 	"<output_phase>$UPSData[6]</output_phase>";
echo    "<outputvol_a>$UPSData[7]</outputvol_a>";  
echo    "<outputvol_b>$UPSData[8]</outputvol_b>";  
echo    "<outputvol_c>$UPSData[9]</outputvol_c>";  
echo 	"<output_load>$UPSData[10]</output_load>";
echo 	"<batt_total_vol>$UPSData[11]</batt_total_vol>";
echo	"<batt_cap>$UPSData[12]</batt_cap>";
echo	"<input_fre>$UPSData[13]</input_fre>";
echo	"<ups_model>$UPSData[14]</ups_model>";
echo	"<ups_manufactory>$UPSData[15]</ups_manufactory>";
echo	"<ups_ver>$UPSData[16]</ups_ver>";
echo	"<rate_vol>$UPSData[17]</rate_vol>";
echo	"<rate_power>$UPSData[18]</rate_power>";
echo	"<rate_fre>$UPSData[19]</rate_fre>";
echo	"<rate_battvol>$UPSData[20]</rate_battvol>";
echo	"<is_acfail>$UPSData[21]</is_acfail>";
echo	"<is_bypass>$UPSData[22]</is_bypass>";
echo	"<is_battlow>$UPSData[23]</is_battlow>";
echo	"<is_upsfail>$UPSData[24]</is_upsfail>";
echo	"<is_shutdown>$UPSData[25]</is_shutdown>";
echo	"<is_testting>$UPSData[26]</is_testting>";
echo	"<is_ups_offline>$UPSData[27]</is_ups_offline>";
echo	"<e_temperature>$UPSData[28]</e_temperature>";
echo 	"<e_humidity>$UPSData[29]</e_humidity>";
echo	"<input_default_vol>$UPSData[30]</input_default_vol>";
echo	"<batt_mon_vol>$UPSData[31]</batt_mon_vol>";
echo	"<ups_temp>$UPSData[32]</ups_temp>";
echo	"<output_max_vol>$UPSData[33]</output_max_vol>";
echo	"<output_min_vol>$UPSData[34]</output_min_vol>";
echo	"<batt_temp>$UPSData[35]</batt_temp>";
echo	"<is_horn>$UPSData[36]</is_horn>";
echo	"<is_ups_type>$UPSData[37]</is_ups_type>";
echo	"<is_guard>$UPSData[38]</is_guard>";
echo "</upsdataxml>";

 

$dbh = null;
?>