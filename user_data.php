
<?php

   $biodata=array( 'firstname'=>$_POST['firstname'],
    'lastname'=>$_POST['lastname'],
    'dob'=>$_POST['dob'],
'email'=>$_POST['email'],
    'gender'=>$_POST['gender'],
    'country'=>$_POST['country'],
);

$file='userdata.csv';

// it opens a new csv file and add data(both header and the data values) to it, if the csv file has not existed before
if(!(file_exists($file))){
 // the b flag in 'ab' prevents data duplication
$fp = fopen('userdata.csv', 'ab');
 fputcsv($fp, array_keys($biodata));
fputcsv($fp, array_values($biodata));
}
//it only adds new data(no header) to the csv file that already exist
  else{
    $fp = fopen('userdata.csv', 'ab');
fputcsv($fp, array_values($biodata));
  }

fclose($fp);

echo('Below are the data you just submitted:');
echo "</br>";
print_r($biodata);

?>