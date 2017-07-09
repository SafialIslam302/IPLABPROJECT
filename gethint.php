<?php
  session_start();
    if(empty($_SESSION['curname']) ){
      header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Diseases</title>
  <link href="css/style.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/arogya.png" />
  <link href="css/bootstrap.min1.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.png">
  <link href="css/now.css" rel="stylesheet" />
  <style> 
  .abc{
      width: 560px;
      height: 30px;
      background-color: yellow;
      border-radius: 20px;
      box-shadow: 10px 10px 5px #888888;
  }
  .abc1{
      width: 560px;
      height: 30px;
      background-color:red;
      border-radius: 20px;
      box-shadow: 10px 10px 5px #888888;
  }
  .abc2{
      width: 560px;
      height: 30px;
      background-color: orange;
      border-radius: 20px;
      margin-left: 380px;
      box-shadow: 10px 10px 5px #888888;
  }
  .list{
  	text-align: left;
  	padding-left:180px;
  }
</style>
</head>


<body>

<?php
// Fill up array with names
$a[]="anna";
$a[]="ANEMIA";
$a[]="Chicken pox";
$a[]="Cholera";
$a[]="DENGUE FEVER";
$a[]="Influenza";
$a[]="Malaria";
$a[]="HEPATITIS A";
$a[]="HEPATITIS B";
$a[]="Typhoid fever";
$a[]="DIARRHOEA";
$a[]="CONSTIPATION";
$a[]="PEPTIC ULCER DISEASE";
$a[]="HAEMORRHOIDS";
$a[]="AMOEBIC LIVER ABSCESS";
$a[]="JAUNDICE";
$a[]="ASCITES";
$a[]="SICKLE CELL DISEASE";
$a[]="BLEEDING DISORDERS";
$a[]="GASTROESOPHAGEAL REFLUX DISEASE";
$a[]="PAIN ORIGINATING FROM THE OESOPHAGUS";
$a[]="MALNUTRITION";
$a[]="MULTIPLE MYELOMA";
$a[]="LEUKAEMIA";
$a[]="LYMPHOMA";
$a[]="MEASLES";
$a[]="PERTUSSIS";
$a[]="POLIOMYELITIS";
$a[]="YELLOW FEVER";
$a[]="NEONATAL HYPOGLYCAEMIA";
$a[]="DEEP VEIN THROMBOSIS";
$a[]="PULMONARY EMBOLISM";
$a[]="STROKE";
$a[]="CARDIAC ARRHYTHMIA";
$a[]="RHEUMATIC FEVER";
$a[]="PNEUMONIA";
$a[]="ASTHMA";
$a[]="BREAST CANCER";
$a[]="DYSMENORRHOEA";
$a[]="GENERALISED ANXIETY DISORDERS";
$a[]="PANIC DISORDERS";
$a[]="PRURITUS";
$a[]="ACNE VULGARIS";
$a[]="HEPATOCELLULAR CARCINOMA(LIVER CANCER)";
$a[]="BLADDER CANCER";
$a[]="CARCINOMA OF THE CERVIX";
$a[]="ACUTE SEPTIC ARTHRITIS";
$a[]="MENINGITIS";
$a[]="HIV";
$a[]="TESTICULAR TORSION";
$a[]="URETHRAL STRICTURE";
$a[]="HAEMATURIA";
$a[]="CHRONIC KIDNEY DISEASE";
$a[]="HYPERTENSION";





$q=$_GET["q"];
  $test = true;
  if (strlen($q) > 0)
  {
    $hint="";
    for($i=0; $i<count($a); $i++)
      {
          if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
          {
            if ($hint=="")
            {
              echo "<br>";
                $hint=$a[$i];
                if($a[$i] == 'ANEMIA')
                {
                  $setvalue = 10;
                  echo "<div class='abc2'><a href='#ANEMIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'Cholera'){
                  $setvalue = 11;
                  echo "<div class='abc2'><a href='#Cholera'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'Chicken pox'){
                  $setvalue = 12;
                  echo "<div class='abc2'><a href='#Chicken pox'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'DENGUE FEVER'){
                  $setvalue = 13;
                  echo "<div class='abc2'><a href='#DENGUE FEVER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'Influenza'){
                  $setvalue = 14;
                  echo "<div class='abc2'><a href='#Influenza'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'Malaria'){
                  $setvalue = 15;
                  echo "<div class='abc2'><a href='#Malaria'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HEPATITIS A'){
                  $setvalue = 17;
                  echo "<div class='abc2'><a href='#HEPATITIS A'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HEPATITIS B'){
                  $setvalue = 18;
                  echo "<div class='abc2'><a href='#HEPATITIS B'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'Typhoid fever'){
                  $setvalue = 19;
                  echo "<div class='abc2'><a href='#Typhoid feve'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'DIARRHOEA'){
                  $setvalue = 20;
                  echo "<div class='abc2'><a href='#DIARRHOEA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'CONSTIPATION'){
                  $setvalue = 21;
                  echo "<div class='abc2'><a href='#CONSTIPATION'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PEPTIC ULCER DISEASE'){
                  $setvalue = 22;
                  echo "<div class='abc2'><a href='#PEPTIC ULCER DISEASE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HAEMORRHOIDS'){
                  $setvalue = 23;
                  echo "<div class='abc2'><a href='#HAEMORRHOIDS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'AMOEBIC LIVER ABSCESS'){
                  $setvalue = 24;
                  echo "<div class='abc2'><a href='#AMOEBIC LIVER ABSCESS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'JAUNDICE'){
                  $setvalue = 25;
                  echo "<div class='abc2'><a href='#JAUNDICE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'ASCITES'){
                  $setvalue = 26;
                  echo "<div class='abc2'><a href='#ASCITES'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'SICKLE CELL DISEASE'){
                  $setvalue = 27;
                  echo "<div class='abc2'><a href='#SICKLE CELL DISEASE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'BLEEDING DISORDERS'){
                  $setvalue = 28;
                  echo "<div class='abc2'><a href='#BLEEDING DISORDERS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'GASTROESOPHAGEAL REFLUX DISEASE'){
                  $setvalue = 29;
                  echo "<div class='abc2'><a href='#GASTROESOPHAGEAL REFLUX DISEASE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PAIN ORIGINATING FROM THE OESOPHAGUS'){
                  $setvalue = 30;
                  echo "<div class='abc2'><a href='#PAIN ORIGINATING FROM THE OESOPHAGU'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'MALNUTRITION'){
                  $setvalue = 31;
                  echo "<div class='abc2'><a href='#MALNUTRITION'> $a[$i] </a><br></div>";
                }
                 if($a[$i] == 'MULTIPLE MYELOMA'){
                  $setvalue = 32;
                  echo "<div class='abc2'><a href='#MULTIPLE MYELOMA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'LEUKAEMIA'){
                  $setvalue = 33;
                  echo "<div class='abc2'><a href='#LEUKAEMIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'LYMPHOMA'){
                  $setvalue = 34;
                  echo "<div class='abc2'><a href='#LYMPHOMA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'MEASLES'){
                  $setvalue = 35;
                  echo "<div class='abc2'><a href='#MEASLES'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PERTUSSIS'){
                  $setvalue = 36;
                  echo "<div class='abc2'><a href='#PERTUSSIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'POLIOMYELITIS'){
                  $setvalue = 37;
                  echo "<div class='abc2'><a href='#POLIOMYELITIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'YELLOW FEVER'){
                  $setvalue = 38;
                  echo "<div class='abc2'><a href='#YELLOW FEVER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'NEONATAL HYPOGLYCAEMIA'){
                  $setvalue = 39;
                  echo "<div class='abc2'><a href='#NEONATAL HYPOGLYCAEMI'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'DEEP VEIN THROMBOSIS'){
                  $setvalue = 40;
                  echo "<div class='abc2'><a href='#DEEP VEIN THROMBOSIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PULMONARY EMBOLISM'){
                  $setvalue = 41;
                  echo "<div class='abc2'><a href='#PULMONARY EMBOLISM'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'STROKE'){
                  $setvalue = 42;
                  echo "<div class='abc2'><a href='#STROKE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'CARDIAC ARRHYTHMIA'){
                  $setvalue = 43;
                  echo "<div class='abc2'><a href='#CARDIAC ARRHYTHMIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'RHEUMATIC FEVER'){
                  $setvalue = 44;
                  echo "<div class='abc2'><a href='#RHEUMATIC FEVER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PNEUMONIA'){
                  $setvalue = 45;
                  echo "<div class='abc2'><a href='#PNEUMONIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'ASTHMA'){
                  $setvalue = 46;
                  echo "<div class='abc2'><a href='#ASTHMA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'BREAST CANCER'){
                  $setvalue = 47;
                  echo "<div class='abc2'><a href='#BREAST CANCER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'DYSMENORRHOEA'){
                  $setvalue = 48;
                  echo "<div class='abc2'><a href='#DYSMENORRHOEA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'GENERALISED ANXIETY DISORDERS'){
                  $setvalue = 49;
                  echo "<div class='abc2'><a href='#GENERALISED ANXIETY DISORDERS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PANIC DISORDERS'){
                  $setvalue = 50;
                  echo "<div class='abc2'><a href='#PANIC DISORDERS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PRURITUS'){
                  $setvalue = 51;
                  echo "<div class='abc2'><a href='#PRURITUS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'ACNE VULGARIS'){
                  $setvalue = 52;
                  echo "<div class='abc2'><a href='#ACNE VULGARIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HEPATOCELLULAR CARCINOMA(LIVER CANCER)'){
                  $setvalue = 53;
                  echo "<div class='abc2'><a href='#HEPATOCELLULAR CARCINOMA(LIVER CANCER)'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'BLADDER CANCER'){
                  $setvalue = 54;
                  echo "<div class='abc2'><a href='#BLADDER CANCER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'CARCINOMA OF THE CERVIX'){
                  $setvalue = 55;
                  echo "<div class='abc2'><a href='#CARCINOMA OF THE CERVIX'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'ACUTE SEPTIC ARTHRITIS'){
                  $setvalue = 56;
                  echo "<div class='abc2'><a href='#ACUTE SEPTIC ARTHRITIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'MENINGITIS'){
                  $setvalue = 57;
                  echo "<div class='abc2'><a href='#MENINGITIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HIV'){
                  $setvalue = 58;
                  echo "<div class='abc2'><a href='#HIV'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'TESTICULAR TORSION'){
                  $setvalue = 59;
                  echo "<div class='abc2'><a href='#TESTICULAR TORSION'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'URETHRAL STRICTURE'){
                  $setvalue = 60;
                  echo "<div class='abc2'><a href='#URETHRAL STRICTURE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HAEMATURIA'){
                  $setvalue = 61;
                  echo "<div class='abc2'><a href='#HAEMATURIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'CHRONIC KIDNEY DISEASE'){
                  $setvalue = 62;
                  echo "<div class='abc2'><a href='#CHRONIC KIDNEY DISEASE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HYPERTENSION'){
                  $setvalue = 63;
                  echo "<div class='abc2'><a href='#HYPERTENSION'> $a[$i] </a><br></div>";
                }
            }
            else
            {
                if($a[$i] == 'ANEMIA')
                {
                  $setvalue = 10;
                  echo "<center><div class='abc2'><a href='#ANEMIA'> $a[$i] </a><br></div></center>";
                }
                if($a[$i] == 'Cholera'){
                  $setvalue = 11;
                  echo "<center><div class='abc2'><a href='#Cholera'> $a[$i] </a><br></div></center>";
                }
                if($a[$i] == 'Chicken pox'){
                  $setvalue = 12;
                  echo "<center><div class='abc2'><a href='#Chicken pox'> $a[$i] </a><br></div></center>";
                }
                if($a[$i] == 'DENGUE FEVER'){
                  $setvalue = 13;
                  echo "<center><div class='abc2'><a href='#DENGUE FEVER'> $a[$i] </a><br></div></center>";
                }
                if($a[$i] == 'Influenza'){
                  $setvalue = 14;
                  echo "<center><div class='abc2'><a href='#Influenza'> $a[$i] </a><br></div></center>";
                }
                 if($a[$i] == 'Malaria'){
                  $setvalue = 15;
                  echo "<center><div class='abc2'><a href='#Malaria'> $a[$i] </a><br></div></center>";
                }
                 if($a[$i] == 'HEPATITIS A'){
                  $setvalue = 17;
                  echo "<center><div class='abc2'><a href='#HEPATITIS A'> $a[$i] </a><br></div></center>";
                }
                 if($a[$i] == 'HEPATITIS B'){
                  $setvalue = 18;
                  echo "<center><div class='abc2'><a href='#HEPATITIS B'> $a[$i] </a><br></div></center>";
                } 
                 if($a[$i] == 'Typhoid fever'){
                  $setvalue = 19;
                  echo "<center><div class='abc2'><a href='#Typhoid feve'> $a[$i] </a><br></div></center>";
                }
                if($a[$i] == 'DIARRHOEA'){
                  $setvalue = 20;
                  echo "<div class='abc2'><a href='#DIARRHOEA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'CONSTIPATION'){
                  $setvalue = 21;
                  echo "<div class='abc2'><a href='#CONSTIPATION'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PEPTIC ULCER DISEASE'){
                  $setvalue = 22;
                  echo "<div class='abc2'><a href='#PEPTIC ULCER DISEASE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HAEMORRHOIDS'){
                  $setvalue = 23;
                  echo "<div class='abc2'><a href='#HAEMORRHOIDS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'AMOEBIC LIVER ABSCESS'){
                  $setvalue = 24;
                  echo "<div class='abc2'><a href='#AMOEBIC LIVER ABSCESS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'JAUNDICE'){
                  $setvalue = 24;
                  echo "<div class='abc2'><a href='#JAUNDICE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'ASCITES'){
                  $setvalue = 26;
                  echo "<div class='abc2'><a href='#ASCITES'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'SICKLE CELL DISEASE'){
                  $setvalue = 27;
                  echo "<div class='abc2'><a href='#SICKLE CELL DISEASE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'BLEEDING DISORDERS'){
                  $setvalue = 28;
                  echo "<div class='abc2'><a href='#BLEEDING DISORDERS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'GASTROESOPHAGEAL REFLUX DISEASE'){
                  $setvalue = 29;
                  echo "<div class='abc2'><a href='#GASTROESOPHAGEAL REFLUX DISEASE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PAIN ORIGINATING FROM THE OESOPHAGUS'){
                  $setvalue = 30;
                  echo "<div class='abc2'><a href='#PAIN ORIGINATING FROM THE OESOPHAGU'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'MALNUTRITION'){
                  $setvalue = 31;
                  echo "<div class='abc2'><a href='#MALNUTRITION'> $a[$i] </a><br></div>";
                }
                 if($a[$i] == 'MULTIPLE MYELOMA'){
                  $setvalue = 32;
                  echo "<div class='abc2'><a href='#MULTIPLE MYELOMA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'LEUKAEMIA'){
                  $setvalue = 33;
                  echo "<div class='abc2'><a href='#LEUKAEMIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'LYMPHOMA'){
                  $setvalue = 34;
                  echo "<div class='abc2'><a href='#LYMPHOMA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'MEASLES'){
                  $setvalue = 35;
                  echo "<div class='abc2'><a href='#MEASLES'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PERTUSSIS'){
                  $setvalue = 36;
                  echo "<div class='abc2'><a href='#PERTUSSIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'POLIOMYELITIS'){
                  $setvalue = 37;
                  echo "<div class='abc2'><a href='#POLIOMYELITIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'YELLOW FEVER'){
                  $setvalue = 38;
                  echo "<div class='abc2'><a href='#YELLOW FEVER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'NEONATAL HYPOGLYCAEMIA'){
                  $setvalue = 39;
                  echo "<div class='abc2'><a href='#NEONATAL HYPOGLYCAEMI'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'DEEP VEIN THROMBOSIS'){
                  $setvalue = 40;
                  echo "<div class='abc2'><a href='#DEEP VEIN THROMBOSIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PULMONARY EMBOLISM'){
                  $setvalue = 41;
                  echo "<div class='abc2'><a href='#PULMONARY EMBOLISM'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'STROKE'){
                  $setvalue = 42;
                  echo "<div class='abc2'><a href='#STROKE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'CARDIAC ARRHYTHMIA'){
                  $setvalue = 43;
                  echo "<div class='abc2'><a href='#CARDIAC ARRHYTHMIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'RHEUMATIC FEVER'){
                  $setvalue = 44;
                  echo "<div class='abc2'><a href='#RHEUMATIC FEVER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PNEUMONIA'){
                  $setvalue = 45;
                  echo "<div class='abc2'><a href='#PNEUMONIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'ASTHMA'){
                  $setvalue = 46;
                  echo "<div class='abc2'><a href='#ASTHMA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'BREAST CANCER'){
                  $setvalue = 47;
                  echo "<div class='abc2'><a href='#BREAST CANCER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'DYSMENORRHOEA'){
                  $setvalue = 48;
                  echo "<div class='abc2'><a href='#DYSMENORRHOEA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'GENERALISED ANXIETY DISORDERS'){
                  $setvalue = 49;
                  echo "<div class='abc2'><a href='#GENERALISED ANXIETY DISORDERS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PANIC DISORDERS'){
                  $setvalue = 50;
                  echo "<div class='abc2'><a href='#PANIC DISORDERS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'PRURITUS'){
                  $setvalue = 51;
                  echo "<div class='abc2'><a href='#PRURITUS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'ACNE VULGARIS'){
                  $setvalue = 52;
                  echo "<div class='abc2'><a href='#ACNE VULGARIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HEPATOCELLULAR CARCINOMA(LIVER CANCER)'){
                  $setvalue = 53;
                  echo "<div class='abc2'><a href='#HEPATOCELLULAR CARCINOMA(LIVER CANCER)'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'BLADDER CANCER'){
                  $setvalue = 54;
                  echo "<div class='abc2'><a href='#BLADDER CANCER'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'CARCINOMA OF THE CERVIX'){
                  $setvalue = 55;
                  echo "<div class='abc2'><a href='#CARCINOMA OF THE CERVIX'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'ACUTE SEPTIC ARTHRITIS'){
                  $setvalue = 56;
                  echo "<div class='abc2'><a href='#ACUTE SEPTIC ARTHRITIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'MENINGITIS'){
                  $setvalue = 57;
                  echo "<div class='abc2'><a href='#MENINGITIS'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HIV'){
                  $setvalue = 58;
                  echo "<div class='abc2'><a href='#HIV'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'TESTICULAR TORSION'){
                  $setvalue = 59;
                  echo "<div class='abc2'><a href='#TESTICULAR TORSION'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'URETHRAL STRICTURE'){
                  $setvalue = 60;
                  echo "<div class='abc2'><a href='#URETHRAL STRICTURE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HAEMATURIA'){
                  $setvalue = 61;
                  echo "<div class='abc2'><a href='#HAEMATURIA'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'CHRONIC KIDNEY DISEASE'){
                  $setvalue = 62;
                  echo "<div class='abc2'><a href='#CHRONIC KIDNEY DISEASE'> $a[$i] </a><br></div>";
                }
                if($a[$i] == 'HYPERTENSION'){
                  $setvalue = 63;
                  echo "<div class='abc2'><a href='#HYPERTENSION'> $a[$i] </a><br></div>";
                }
            }
          }
      }
  }
  if ($hint == "")
  {
      $response="no suggestion";
  }
?>

<?php 
if($setvalue == 9){
  echo "<section id='anna'>
      </section>";
}
if($setvalue == 10){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                        	
                        	<div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Anaemia is defined as decreased concentration of haemoglobin for the age and sex of the individual (i.e. below 13 g/dL in adult males, 12 g/dL in adult females, 11 g/dL in children, and below 13.5 g/dL in the 1st week of life). Anaemia always has a cause which must be identified and properly managed.  The condition giving rise to the anaemia may be acute or chronic.  Investigate the cause before initiating treatment. In an emergency, take blood samples before treatment.</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                    	<b>Micronutrient and vitamin deficiency</b>
                                    	<ol class='list'> 
                  											<li>Iron,Folic acid</li>
                  											<li>Heavy menstrual periods</li>
                  											<li>Haemorrhoids (piles)</li>
                  											<li>Peptic ulcers</li>
                  										</ol>
                  										<b>Haemolysis</b>
                  										<ol class='list'> 
                  											<li>Malaria</li>
                  											<li>Drugs</li>
                  										</ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>pale conjunctiva (inner eyelid), nail beds, gums, tongue, lips, skin</li>
                                        <li>fatigue</li>
                                        <li>HA</li>
                                        <li>breathlessness</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>Adult: 150-200mg/day of elemental iron for 3 months</li>
                                        <li>Pregnant women: 1 tablet of iron & folic acid every day for 6 months</li>
                                        <li>Children under 6 y/o at risk of iron poisoning.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 11){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                    <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Cholera is an acute diarrheal disease caused by an infection in the intestines. People infected with cholera
                    										bacterium have mild diarrhea or no symptoms at all. Symptoms can occur in 2 hours or up to 5 days
                    										after infection, and in severe cases cause extreme dehydration and kidney failure.
                    										It often breaks out among crowded and areas with poor sanitary conditions.
                    										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p><b>Pathogen:</b> Comma shaped bacterium (Vibrio cholerae)
                  									<b>Mode of transmission:</b> Contaminated food and water. House - fly is the carrier.
                  									<b>Incubation period:</b> 6 hours to 2-3 days.
                  									</p>
                                </div>  
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>sudden onset of large volume painless watery diarrhea (“rice water” appearance and fishy odor)</li>
                                        <li>usually no fever (children can have fever)</li>
                                        <li>After few days these vesicles start drying up and scabs (crusts) are formed.</li>
                                        <li>coma and seizures from dehydration</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>Rehydration (for 2-4 h) Lactated Ringer solution is preferred over isotonic sodium chloride
                    										solution because saline does not correct metabolic acidosis
                    										</li>
                                        <li>Maintenance (until diarrhea abates). The objective of the maintenance phase is to maintain
                    										normal hydration status by replacing ongoing losses. Oral route is preferred; use oral rehydration
                    										solution (ORS) at a rate of 500-1000 mL/h recommended.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 12){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Chicken pox is a highly contagious viral illness that usually occurs in epidemics. Humans are the only source of infection. Person-to-person transmission occurs by direct contact with vesicular fluid from patients with the disease or by airborne spread from respiratory tract secretions. There is a risk of infection up to 21 days after contact with a person with chicken pox. </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Fever, headache and loss of appetite</li>
                                        <li>Dark red-colored rash on the back and chest which spreads on the whole body. Later, rashes change into vesicles.</li>
                                        <li>After few days these vesicles start drying up and scabs (crusts) are formed.</li>
                                        <li>These scabs start falling (infective stage)</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>1.	The patient should be kept in isolation.</li>
                                        <li>Clothing’s, utensils, etc. used by the patient should be sterilized.</li>
                                        <li>Fallen scabs should be collected and burnt.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 13){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Dengue Fever is spread by the bite of infected mosquitoes, which are common in Haiti. People will usually
                    										develop symptoms in 4-7 days after exposure, but it can take up to 2 weeks for symptoms to appear.
                    										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p> Dengue spreads through the bite of an infected Aedes aegypti mosquito. The transmission of the disease occurs when a mosquito bites an infected person and subsequently bites a healthy person. In doing so, it transmits blood containing the virus to the healthy person and the person becomes infected with dengue. The first symptoms of the disease occur about 5 to 7 days after the infected bite.
                  										Aedes mosquito rests indoors, in closets and other dark places, and is active during day time. Outside, it rests where it is cool and shaded.The female mosquito lays her eggs in stagnant water containers such as coolers, tyres, empty buckets etc., in and around homes, and other areas in towns or villages. These eggs become adults in about 10 days.
                  										</p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Abrupt onset of high fever, chills</li>
                                        <li>Muscle aches</li>
                                        <li>Frontal headache (often accompanied by retro-orbital pain)</li>
                                        <li>Restlessness/lethargy</li>
                                        <li>Faint macular rash on the torso and arms that becomes evident on the 2nd to4th day of illness</li>
                                        <li>A petechial rash may be found in classical dengue, as well as dengue hemorrhagic fever</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>Avoid water stagnation for more than 72 hours so that the mosquitoes do not breed there.</li>
                                        <li>Prevent mosquito breeding in stored water bodies, like ponds, wells etc.</li>
                                        <li>Destroy discarded objects like old tyres, bottles, etc. as they collect and store rain water.</li>
                                        <li>Use mosquito repellents and wear long sleeved clothes to curtail exposure.</li>
                                        <li>Use mosquito nets, also during daytime.</li>
                                        <li>Avoid outdoor activities during dawn or dusk when these mosquitoes are most active.</li>
                                        <li>Patients suffering from dengue fever must be isolated for at least 5 days.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 14){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Influenza, commonly known as ‘flu’ is an illness caused by viruses that infect the respiratory tract. Compared to common cold, influenza is a more severe illness.</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>Influenza is caused by a virus which attacks our body’s cells, resulting in various effects depending on the strain of the virus. There are many strains of influenza virus. The virus mutates all the time and new variations (strains) arise. This constant changing enables the virus to evade the immune system of its host. </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>fever (Usually 100° F to 103° F in adults and often even higher in children).</li>
                                        <li>respiratory tract infection symptoms such as, cough, sore throat, running nose, headache, pain in the muscles, and extreme fatigue.</li>
                                        <li>Most people who get flu, recover completely in 1 to 2 weeks, but some people develop serious and potentially life-threatening complications, such as pneumonia.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>Much of the illness and death caused by influenza can be prevented by annual influenza vaccination. Influenza vaccine is specifically recommended for those who are at high risk for complications with chronic diseases of the heart, lungs or kidneys, diabetes, or severe forms of anemia.</li>
                                        <li>The persons suffering from influenza should drink plenty of fluids take symptom relief with paracetamol, aspirin (not in children under the age of 16) or ibuprofen etc. as recommended by the doctor. Consult doctor immediately for treatment.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 15){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Malaria is spread by the bite of infected mosquitoes. Clinical diagnosis of uncomplicated malaria is based on
                    										exposure to malaria and a history of fever in the previous 3 days with no features of other severe diseases. In
                    										settings where the risk of malaria is high, diagnosis is based on a history of fever in the previous 24 hours
                    										and/or the presence of anemia, pallor of the palms appears to be the most reliable sign in young children.
                    										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>Plasmodium falciparum UNCOMPLICATED MALARIA.
                                    <b>Pathogen:</b> Malarial parasite (different species of Plasmodium)
                  									<b>Mode of transmission:</b> By bite of female Anopheles mosquitoes
                  									<b>Incubation period:</b> Approximately 12 days
                  									</p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Headache, nausea and muscular pain.</li>
                                        <li>Feeling of chilliness and shivering followed by fever which becomes normal along with sweating after some time.</li>
                                        <li>The patient becomes weak and anaemic.</li>
                                        <li>If not treated properly secondary complications may lead to death.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>Fitting of double door and windows in the house to prevent entry of mosquitoes.</li>
                                        <li>Use of mosquito net and mosquito repellents.</li>
                                        <li>No water should be allowed to collect in ditches or other open spaces to prevent mosquito breeding.</li>
                                        <li>Sprinkling of kerosene oil in ditches or other open spaces where water gets collected.</li>
                                        <li>Antimalarial drugs to be taken.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 16){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Virus (Rubeola) Mode of transmission : By air Incubation period : 3-5 days</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p> Virus (Rubeola) Mode of transmission : By air Incubation period : 3-5 days</p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Common cold</li>
                                        <li>Appearance of small white patches in mouth and throat.</li>
                                        <li>Appearance of rashes on the body.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>The patient should be kept in isolation.</li>
                                        <li>Cleanliness should be maintained.</li>
                                        <li>Antibiotics check only the secondary infections which can easily occur.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 17){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Hepatitis A is spread through the fecal-oral route through contaminated food or water. Diagnosis is made by
                    										a combination of clinical signs and symptoms. Symptoms usually develop within a month from the exposure.
                    										People only can develop hepatitis A once in their lifetime. Infected children under six years of age do not
                    										usually experience noticeable symptoms, and only 10% develop jaundice. Among older children and adults,
                    										infection usually causes more severe symptoms, with jaundice occurring in more than 70% of cases
                    										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>jaundice (yellowing of eyes and skin)</li>
                                        <li>fever</li>
                                        <li>fatigue</li>
                                        <li>loss of appetite, nausea, vomiting, and abdominal pain</li>
                                        <li>dark urine and clay or pale-colored stools</li>
                                        <li>joint pain</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>There is no specific treatment for Hepatitis A ,It is usually a self-limiting infection and resolves
                  									within 4–6 weeks. Therapy is aimed at maintaining comfort and adequate nutritional balance, including
                  									replacement of fluids that are lost from vomiting and diarrhea.
                  									</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 18){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>Pathogen: Hepatitis B virus.
                  									Mode of Transmission: Mainly through contaminated water.
                  									Incubation Period: Generally, 15-160 days.
                  									</p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Body ache.</li>
                                        <li>Loss of appetite and nausea.</li>
                                        <li>Eyes and skin become yellowish, urine deep yellow in color (due to bile pigments).</li>
                                        <li>Enlarged liver.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>Hepatitis B vaccine is now available in India.</li>
                                        <li>Proper hygiene is to be observed.</li>
                                        <li>Avoid taking fat rich substances.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 19){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Typhoid fever (enteric fever) is a severe bacterial illness which occurs where sanitary conditions are poor permitting contamination of food or water with faces. The bacteria which are spread by the faeco-oral route invade the intestinal wall and spread through the bloodstream to all organs. They are passed into the stool and urine of infected patients. They may continue to be present in the stool of asymptomatic carriers, who are persons who have recovered from the symptoms of the disease but continue to carry the bacteria.</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p> Salmonella typhi and paratyphi  </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Fever which increases gradually to a high fever and persists for weeks </li>
                                        <li>Constipation in the early stages</li>
                                        <li>Abdominal pain and diarrhea in the second week of illness</li>
                                        <li>Severe headache </li>
                                        <li>Dry cough </li>
                                        <li>Psychosis and confusion in 10 % of adults </li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To eradicate the infection.</li>
                                        <li>To treat the disease in the patient</li>
                                        <li>To prevent transmission of infection to other people.</li>
                                        <li>Sponging to reduce body temperature if required</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 20){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Diarrhoea means passing frequent, loose, watery stools 3 or more times in a day. Diarrhoea is often accompanied by vomiting. It is very common in children. The commonest cause in this age group is viral. There is therefore usually no need to prescribe antibiotics. Fluid loss occurs quickly in children because of their size. If this is not corrected it may result in dehydration which can be fatal.</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Viral  e.g. Rotavirus </li>
                                        <li>Bacterial  e.g. Shigella</li>
                                        <li>Protozoal  e.g. Amoebae</li>
                                        <li>Side effects of some medications. e.g. Penicillins</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                	<p>
                                      <ol class='list'> 
                                        <li>Frequent watery stools</li>
                                        <li>Blood or mucus in the stool</li>
                                        <li>Presence of fever</li>
                                        <li>Reduced urine output </li>
                                        <li>Associated  vomiting</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To replace lost fluid: as much fluid as goes into the stools should be given to the child to drink for replacement.</li>
                                        <li>To maintain nutrition: mothers tend not to give a child who has diarrhoea anything or very little to eat, at a time when he needs all the food he can get! Continue to feed as much as can be tolerated.</li>
                                        <li>To eliminate infecting organisms where appropriate.</li>
                                        <li>Keep surroundings clean.</li>
                                        <li>Improve personal hygiene e.g. hand washing after toilet.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 21){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>There is no objective definition of constipation because of great individual variation in normal bowel habits. Always ascertain what the patient means by constipation. Patients usually use the term constipation to mean that their faeces are too hard, they do not defaecate often enough, defaecation causes straining or there is a sense of incomplete evacuation.
											                     Persistence of constipation despite appropriate interventions will require re-evaluation of the underlying cause.Prolonged use of laxatives is very common in the community and may be habitual. Their chronic use must be discouraged to avoid hypokalaemia and its consequences.
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Diet deficient in roughage.</li>
                                        <li>Myxoedema, Hypercalcaemia.</li>
                                        <li>Irritable bowel syndrome</li>
                                        <li>Drugs e.g. atropine, codeine phosphate, morphine, tricyclic  antidepressants, disopyramide.</li>
                                        <li>Lazy bowel from chronic laxative use including 'herbal' preparations should be ascertained.</li>
                                        <li>Lack of exercise.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Constipation, if associated with frequent high pitched bowel sounds or absent 
                                        	bowel sounds.</li>
                                        <li>Constipation itself is a symptom. When associated with inability to pass flatus, severe abdominal pain, or vomiting there may be the need for urgent referral to a surgeon.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To identify possible cause of constipation.</li>
                                        <li>To relieve constipation.</li>
                                        <li>Adherence to an appropriate diet and regular exercise. Diet should
                    										include adequate amounts of fibre and fluid (four to six 250 ml glasses
                    										of fluid per day).</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 22){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>The term peptic ulceration refers to an ulcer in the lower esophagus; stomach and duodenum. They have in common the involvement of acid-pepsin in their pathogenesis leading to disruption of the mucosal integrity causing local defect or excavation due to active inflammation. The common ulcers are duodenal and/or gastric. 
                    											Peptic ulcer may present in many different ways, the commonest is chronic, episodic pain present in many different ways, and may persist for months or years. However, the ulcer may come to attention as an acute episode with bleeding or perforation, with little or no previous history. As with duodenal ulcer, epigastric pain is the commonest symptom of gastric ulcer.
                    										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Excessive secretion of gastric acid.</li>
                                        <li>Inadequate protection of the lining of the stomach and duodenum against digestion by acid and pepsin.</li>
                                        <li>Helicobacter pylori (H. pylori) infection.</li>
                                        <li>Medicines e.g. non-steroidal anti-inflammatory drugs (NSAIDs), corticosteroids.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Abdominal pain.</li>
                                        <li>May be a minor discomfort, gnawing, burning, dull ache or very severe pain.</li>
                                        <li>Typically in the epigastrium or right hypochondrium .</li>
                                        <li>Occasionally high up behind the sternum or low down around the umbilicus.</li>
                                        <li>In duodenal ulcer, typically comes on when the patient is hungry and may wake the patient up in the middle of the night.</li>
                                        <li>In gastric ulcer, it is typically worsened by food.</li>
                                        <li>Is relieved by alkalis and food in duodenal ulcer.</li>
                                        <li>Vomiting may occur in both duodenal and gastric ulcers.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To relieve pain and reduce gastric acid secretion.</li>
                                        <li>To promote healing of the ulcer.</li>
                                        <li>To eradicate H. pylori if present.</li>
                                        <li>To prevent recurrence of the ulcer.</li>
                                        <li>To avoid complications.</li>
                                        <li>Avoid smoking and alcohol intake.</li>
                                        <li>Avoid foods that aggravate the pain.</li>
                                        <li>SAllay anxiety and stress.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 23){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Most patients with anal conditions complain of “piles” regardless of what anorectal symptoms they have. Haemorrhoids are enlarged, displaced anal cushions derived from engorged veins. 
											                     First degree haemorrhoids remain in the rectum. Second degree haemorrhoids prolapse, but reduce spontaneously, whereas third degree haemorrhoids prolapse and have to be replaced manually or remain prolapsed permanently until repaired. 
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Increased intra-abdominal pressure e.g. chronic cough, pregnancy, intra-abdominal or pelvic tumours. </li>
                    										<li>Familial predisposition. </li>
                    										<li>Anorectal tumours (secondary haemorrhoids). </li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Passage of bright red blood at defaecation. </li>
                    										<li>Mucoid discharge. </li>
                    										<li>Swelling at anus. </li>
                    										<li>Perianal irritation or itch (pruritus ani. </li>
                    										<li>Discomfort after opening bowels. </li>
                    										<li>Pain occurs only during an acute attack of prolapse with thrombosis, congestion and oedema. </li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To correct anaemia, if present. </li>
                    										<li>To relieve symptoms. </li>
                    										<li>To prevent complications. </li>
                    										<li>Increase intake of fluid and roughage. </li> 
                    										<li>Avoid prolonged straining at defecation. </li>
                    										<li>For prolapsed haemorrhoids, lie patient down and elevate the foot end   of the bed. Try gentle digital reduction after
                                        <li>application of local anaesthetic cream. If this fails, apply cold compresses. Sedation of the patient may be required). </li>
                    										<li>For infected haemorrhoids, warm sitz baths 2-3 times a day). </li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 24){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is a collection of brownish coloured fluid in the liver occurring often as a single mass in the right lobe, as a complication of intestinal infection with Entamoeba histolytica. Occasionally, pyogenic abscesses may have a similar clinical presentation, and will require treatment with appropriate antibiotics.</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Entamoeba histolytica.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Right upper abdominal pain.</li> 
                    										<li>Abdominal distension.</li> 
                    										<li>Fever,Cough.</li> 
                    										<li>Large tender liver .</li> 
                    										<li>Tenderness and or bulging at right intercostal spaces.</li> 
                    										<li>Jaundice.</li> 
                    										<li>Dullness to percussion on the right lower zones with basal crepitations.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To eradicate infection .</li> 
                    										<li>To prevent further destruction of liver tissue .</li> 
                    										<li>To prevent rupture of abscess into pleural, pericardial or peritoneal space.</li> 
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 25){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is a condition in which the skin, palms and the sclerae become yellow in colour as a result of elevated levels of bilirubin in the bloodstream. The symptoms and signs that accompany jaundice often give helpful clues to the underlying cause.In adults and children, hyperbilirubinaemia may result in hepatic encephalopathy (See sections on Chronic Hepatitis, Obstructive Jaundice and Liver Failure).
                    											Jaundice in neonates can result in kernicterus because of the consequences of hyperbilirubinaemia on the brain of the newborn. Kernicterus causes death in most infants and survivors suffer mental and physical handicaps with cerebral palsy, high frequency nerve deafness, poor memory, low IQ and visual-motor incoordination.
                    										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <b>Adults</b>
                      										<li>Hepatitis - viral, alcoholic, drug-induced (including allopathic and  herbal preparations)</li>
                      										<li>Haemolysis from various causes including malaria, glucose-6phosphate dehydrogenase (G6PD) deficiency and sickle cell disease, allopathic drugs and herbal concoctions.</li> 
                      										<li>Chronic liver diseases - decompensated cirrhosis, biliary cirrhosis, chronic hepatitis, hepatoma.</li> 
                      										<b>Children</b>
                      										<li>Physiological jaundice - jaundice appearing between the 2nd to 5th day of life for which all other causes have been excluded.</li> 
                      										<li>Haemolysis - sickle cell disease, G6PD deficiency, drugs and herbs, Haemolytic disease of the newbornExtravasation of a large amount blood.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Yellowish or greenish discolouration of the eyes or skin.</li> 
                    										<li>Itching.</li> 
                    										<li>Deep yellow discolouration of urine.</li> 
                    										<li>Pale stools.</li> 
                    										<li>Pallor (may indicate possibilty of haemolysis, chronic disease or  malignancy).</li> 
                    										<li>Scratch marks ( indicative of obstruction).</li> 
                    										<li>Hepatomegaly (may be tender).</li> 
                    										<li>Splenomegaly in portal hypertension.</li> 
                    										<li>Hepatic flap ( indicative of liver failure).</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To identify and treat cause of jaundice.</li> 
                    										<li>To relieve symptoms associated with jaundice.</li> 
                    										<li>To prevent complications associated with elevated levels of bilirubin in the blood.</li> 
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 26){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Ascites is an abnormal accumulation of fluid in the peritoneal cavity.</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>May arise as a complication or sequelae of chronic liver disease, kidney or heart failure, abdominal tuberculosis, intra-abdominal or pelvic malignancies.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Abdominal enlargement.</li>
                    										<li>Difficulty breathing.</li>
                    										<li>Distended abdomen.</li>
                    										<li>Abdominal tenderness.</li>
                    										<li>Signs relating to the underlying causes (see appropriate chapter).</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To relieve symptoms.</li>
										                    <li>To identify and manage underlying cause.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 27){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>These are diseases characterised by excessive bleeding. They may be present from birth or acquired later in life. The bleeding may be due to defective blood vessels, platelet disorders or clotting factor deficiency.  A good history is important in distinguishing between the various causes. Past episodes of excessive bleeding e.g. following circumcision, a family history of bleeding and drug therapy should be enquired about.
											                    Bleeding may be spontaneous or follow trauma or surgery. The pattern of bleeding is a helpful guide to its cause: in platelet and vessel wall defects, bleeding is usually into skin and mucosal surfaces like the gums, nose, gastrointestinal tract; in coagulation factor deficiency (e.g. haemophilia), bleeding is into deep tissues like the brain, joints and muscles. 
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Liver disease.</li>
                    										<li>Vitamin K deficiency especially in newborns.</li>
                    										<li>Drug induced - herbal preparations, warfarin, heparin, NSAIDs e.g. Aspirin, ibuprofen .</li>
                    										<li>Bone marrow failure and malignancy e.g. aplastic anaemia and leukaemia.</li>
                    										<li>Low platelet count from any cause.</li>
                    										<li>Haemophilia.</li>
                    										<li>Severe septicaemia resulting in Disseminated Intravascular Coagulation (DIC) .</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Spontaneous bleeding from mucous membranes or cuts.</li>
                    										<li>Easy bruising.</li>
                    										<li>Excessive bleeding from cuts or incisions.</li> 
                    										<li>Swelling at site of blood collection e.g. joints.</li>
                    										<li>Pain.</li>
                    										<li>Excessive bleeding.</li>
                    										<li>Swelling at site of blood collection e.g. joints.</li>
                    										<li>Tenderness.</li>
                    										<li>Purpura.</li>
                    										<li>Pallor.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To prevent or arrest life-threatening bleeding.</li>
                    										<li>To identify and correct underlying cause.</li>
                    										<li>Apply pressure dressing or ice packs to minimise bleeding where possible.</li>
                    										<li>Stop any drugs thought to be responsible for bleeding or which may aggravate bleeding.</li>
                    										<li>Educate haemophiliacs on their disease, encouraging them to minimise trauma prone activities, and to inform doctors of their condition before any surgical procedure.</li>
                    										<li>Avoid unnecessary injections and surgical procedures in all patients(especially those with a family history of bleeding tendencies).</li>
                    									</ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 28){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is a hereditary disease characterized by the possession of two abnormal haemoglobins, one of which is haemoglobin.
                      										There are various types, including HbSS, HbSC and HbS â-thalassaemia. The possession of one normal haemoglobin (haemoglobin A) together with one abnormal haemoglobin (e.g. AS or AC) does not constitute sickle cell disease. It is a haemoglobinopathy trait.The use of the word 'sickler' to describe patients with sickle cell disease must be avoided. It has no meaning and tends to give a person an unfavourable label.
                      											Sickle cell disease patients may present either in the steady state, in crises or with complications. 
                      										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Joint and bone pain, especially during cold wet seasons.</li>
                    										<li>Periodic jaundice.</li>
                    										<li>Abdominal pain, especially in the splenic area.</li>
                    										<li>Jaundice.</li>
                    										<li>Pallor.</li>
                    										<li>Hepatomegaly.</li>
                    										<li>Splenomegaly (may be absent in older patients).</li>
                    										<li>There may be old or recent scarification marks particularly over the abdominal wall.</li>
                    										<li>Venous ulcers.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>To prevent the development of sickle cell crises.</li>
                    										<li>To identify and manage the precipitating cause .</li>
                    										<li>To manage sickle cell crises and complications.</li>
                    										<li>Avoid common precipitating causes of crises such as malaria, pneumonia and exposure to extremes of weather.</li>
                    										<li>Encourage drinking plenty of fluids to prevent dehydration.</li>
                    										<li>Maintain a good nutritional state.</li>
                    										<li>Prompt treatment of infections.</li>
                    										<li>Genetic counseling and parental education .</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To identify possible cause of constipation.</li>
                    										<li>To relieve constipation.</li>
                    										<li>Adherence to an appropriate diet and regular exercise. Diet should include adequate amounts of fiber and fluid (four to six 250 ml glasses of fluid per day.</li> 
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 29){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Gastroesophageal reflux disease (GERD) is caused by backflow of gastric or duodenal contents or both past the lower oesophageal sphincter into the oesophagus without belching or vomiting.The disease is classified into two groups based on endoscopy findings as non-erosive gastroesophageal disease (non erosive GERD) and erosive gastroesophageal disease (erosive GERD). Failure to treat may result in oesophagitis, ulceration, strictures and rarely adenocarcinoma.
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Hiatus hernia
                    										<li>Increased intra-abdominal pressure e.g. in pregnancy.</li>
                    										<li>Obesity.</li>
                    										<li>Long term use of nasogastric tube.</li>
                    										<li>Agents that decrease lower oesophageal sphincter pressure .</li>
                    										<li>Children with chronic neurological disease.</li>
										                  </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Heartburn - worsens with vigorous exercise, bending forward, lying; relieved by antacids.</li>
                    										<li>Early satiety,Pain on swallowing.</li>
                    										<li>Retrosternal and epigastric pain: mimics angina pectoris radiating to neck, jaws and arms; the pain is worse on bending down e.g. sweeping.</li>
                    										<li>Nocturnal regurgitation: wakes patients up with coughing, choking and filling of the mouth with saliva.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To relieve symptoms.</li>
                    										<li>To prevent complications.</li>
                    										<li>Elevate head of bed by about 30 degrees or sleep on pillows.</li>
                    										<li>Avoid sleeping within 3 hours after eating.</li>
                    										<li>Avoid over-eating and heavy meals before bedtime.</li>
                    										<li>Avoid foods that aggravate symptoms e.g. fatty and spicy food.</li>
                    										<li>Avoid smoking and alcohol.</li>
                    										<li>Avoid non-steroidal anti-inflammatory drugs (NSAIDs).</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 30){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Oesophageal pain is usually burning in quality and tends to be localized behind the sternum. It may sometimes be confused with other causes of chest pain. 
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Irritation of the oesophageal mucosa by reflux of the acidic contents of the stomach (reflux oesophagitis).</li>
                    										<li>Hiatus hernia.</li>
                    										<li>Spasm of the oesophageal muscle in response to obstruction.</li> 
                    										<li>Tumours.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Chest pain.</li>
                    										<li>Associated with meals.</li> 
                    										<li>Worse on regurgitation .</li>
                    										<li>Worse on lying flat.</li>
                    										<li>Difficulty in swallowing .</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To relieve pain.</li>
                    										<li>To treat identified cause.</li>
                    										<li>Bland foods and milk (may sometimes relieve the pain).</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 31){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Malnutrition occurs when there is a deficiency in intake of some or all of the above nutrients. It is most commonly seen in children less than five years, particularly after weaning. In many cases, the malnourished child is brought to the health unit because of other complaints such as diarrhoea, vomiting, fever, worms or cough.  In adults, malnutrition frequently occurs in association with chronic alcoholism.Malnutrition can result in a breakdown of the child's or adult's ability to fight disease and infection. 
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Inadequacy of quality and/or quantity of food intake.</li>
                    										<li>Social neglect.</li>
                    										<li>Chronic illness and cancers.</li>
                    										<li>Infections and infestations (children).</li> 
                    										<li>Measles, pertussis HIV, pulmonary tuberculosis.</li>
                    										<li>Worm infestations .</li>
                    										<li>Alcoholism (adults).</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Weight loss.</li>
                    										<li>Poor weight gain (marasmus).</li>
                    										<li>May be noted as drop or flattening in weight on the “Road to Health” Chart.</li>
                    										<li>Body swelling (Kwashiorkor).</li>
                    										<li>Lack of energy.</li>
                    										<li>Apathy.</li>
                    										<li>Disinterest in food.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                      										<li>To correct the nutritional deficiency.</li>
                      										<li>To prevent reoccurrence.</li> 
                      										<li>To check and correct complications.</li>
                      										<li>Fluid and electrolyte imbalance.</li>
                      										<li>To identify and treat underlying infections and infestations.</li>
                      										<li>To adequately manage chronic illnesses.</li>
                      										<li>Frequent feeding with small amounts of a balanced diet.</li>
                      										<li>Return to acceptable balanced family meals.</li>
                      										<li>Participation of parents and care givers in nutrition education.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 32){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>In multiple myeloma, abnormal plasma cells are produced in the bone marrow. These abnormal plasma cells produce abnormal immunoglobulins in excess. The abnormal plasma cells in the bone marrow result in a reduction in normal blood cell production and erosion of bone with release of calcium. The abnormal immunoglobulin in blood results in hyperviscosity, renal failure and impaired ability to fight infections. Multiple myeloma usually affects adults above the age of 40 years. 
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Usually unknown.</li>
                    										<li>Chemicals e.g. dioxins, solvents and cleaning agents.</li>
                    										<li>Radiation.</li>
                    										<li>Viruses e.g. Herpes virus 8, Epstein-Barr, HIV, Hepatitis virus.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Bone pain.</li>
                    										<li>Excessive thirst.</li>
                    										<li>Excessive micturition.</li>
                    										<li>Easy fatigability.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                        								<li>To reduce the number of abnormal plasma cells to normal and reduce their rate of increase.</li>
                        								<li>To reduce bone pain.</li>
                        								<li>To manage pathological fracture.</li>
                        								<li>To improve or maintain good bone mineral density.</li>
                        								<li>To reduce the incidence of infections and renal complications.</li> 
                        								<li>Patients should drink at least 3 litres of fluid each day throughout the course of their disease.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 33){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Leukaemia is the uncontrolled production of white cells at different stages of maturation.  There are two main types of leukaemia depending on the type of white cell affected.  These are lymphoid leukaemia and myeloid leukaemia.  Each can further be divided into acute (where the patient falls suddenly ill) and chronic (where the patient may have been harbouring the disease for months and occasionally years without knowing).   
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Usually no cause in any particular case.</li>
                    										<li>Viruses e.g. Human T Lymphotrophic Virus Type 1 (HTLV-1) and Epstein Barr Virus (EBV).</li>
                    										<li>Chemicals e.g. benzene, industrial solvents, pesticides (lindane), dyes.</li> 
                    										<li>Drugs e.g. alkylating agents such as Melphalan.</li>
                    										<li>Radiation .</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Fever.</li>
                    										<li>Easy fatigability.</li>
                    										<li>Bruising tendencies.</li>
                    										<li>Bone and joint pain especially in children.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To aim for a cure for ALL in children.</li>
                    										<li>To aim for a cure for good prognostic cases of ALL in adults.</li> 
                    										<li>To achieve remission and prolong good quality life in AML.</li>
                    										<li>To control white cell counts and symptoms and prolong good quality life in CML.</li>
                    										<li>Watchful waiting or careful observation in CLL.</li>
                    										<li>Good hydration.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 34){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This refers to a heterogeneous group of disorders characterized by malignant proliferation of lymphoid tissue usually presenting as lymph node swellings. There are 2 major histological types distinguished by the presence or absence of the Reed Sternberg (RS) cell.  The 2 main groups are Hodgkin's Lymphoma; (RS cell present) and Non-Hodgkin's Lymphoma (RS cell absent).  No age is exempt although generally the incidence of Non-Hodgkin's Lymphoma (NHL) increases with age and immunosuppression while Hodgkin's Lymphoma (HL) shows a bimodal peak. 
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>May not be found in any particular case.</li>
                    										<li>Chronic antigenic stimulation as in Helicobacter pylori infection in gastric lymphoma.</li>
                    										<li>Viruses e.g. Herpes virus 8, Epstein-Barr virus, HTLV-1.</li>
                    										<li>Chemicals e.g. pesticides, herbicides .</li>
                    										<li>Wood dust.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Lymph node swelling which may wax and wane.</li>
                    										<li>Fever.</li>
                    										<li>Night sweats.</li>
                    										<li>Weight loss.</li>
                    										<li>Easy fatigability.</li>
                    										<li>Firm, rubbery, non-tender lymph nodes.</li>
                    										<li>Splenomegaly.</li>
                    										<li>Superior vena cava syndrome if bulky mediastinal masses are present.</li>
                    										<li>Pallor if marrow has been involved.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To provide a cure.</li> 
                    										<li>To provide support treatment.</li>
                    										<li>Watchful waiting in low grade NHL.</li>
                    										<li>Good hydration.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 35){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Measles is an acute infectious disease which occurs usually in children between 6 months and 3 years who have not been immunized or have been incompletely or unsuccessfully immunized. It is very infectious from up to 7 days before to 5 days after appearance of the rash.
                    											Measles is often complicated by croup, vitamin A deficiency leading to xerophthalmia and blindness, otitis media and deafness from otitis media. Other complications include bronchopneumonia, diarrhoea, malnutrition and activation of latent tuberculosis.
                    										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Measles virus.</li> 
                    										<li>Measles is caused by a paramyxovirus which is spread by droplet infection.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                      										<li>High fever, present before the rash appears.</li>
                      										<li>Generalised itchy maculo-papular eruption.</li>
                      										<li>Runny nose.</li>
                      										<li>Cough.</li>
                      										<li>Red eyes.</li>
                      										<li>Sore mouth.</li>
                      										<li>Diarrhoea.</li>
                      										<li>Child is generally miserable.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To relieve symptoms.</li>
                    										<li>To treat  complications.</li>
                    										<li>To prevent death.</li>
                    										<li>To maintain good nutrition.</li>
                    										<li>Tepid sponging for fever.</li>
                    										<li>Encourage oral hygiene.</li>
                    										<li>Continue feeding with soft high calorie foods.</li>
                    										<li>Wash eyes with clean water.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 36){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is a bacterial respiratory tract infection common in children.  It may be complicated by protein-calorie malnutrition, bronchiectasis and cerebral hypoxia flowing apnoeic episodes leading to convulsions and coma. Secondary bacterial infections like otitis media, pneumonia or activation of latent tuberculosis may also occur. 
                    											Pertussis can be prevented by the “Five in One” immunization recommended for all children. 
                    										</p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
										                    <li>Bordetella pertussis.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Cough.</li>
                    										<li>Fever.</li>
                    										<li>Poor appetite, refusal of food.</li>
                    										<li>Runny nose.</li>
                    										<li>Vomiting.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To prevent complications .</li>
                    										<li>To maintain good nutrition.</li>
                    										<li>Feed frequently between coughing spasms.</li>
                    										<li>Encourage adequate oral fluid intake.</li>
                    										<li>Admit to hospital when complications like dehydration, fever, pneumonia and malnutrition arise.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 37){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Poliomyelitis is a viral disease characterised by varying degrees of paralysis, especially of the lower limbs. The paralysis may affect any group of skeletal muscles, including the muscles of respiration.  Poliomyelitis is commonly acquired in childhood. The infection is often sub-clinical and may only appear as a mild flu-like illness. Only few cases progress to develop paralysis. However, injections during periods of the febrile illness are associated with an increased incidence of paralytic poliomyelitis. 
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
										                    <li>It is a rare cause of hypotonia with abrupt onset of weakness (often asymmetrical) in association with a febrile illness.</li>
										                    <li>It is caused by one of the three related polio viruses, types 1, 2 and 3 which comprise a subdivision of the groups of enteroviruses.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Fever.</li>
                    										<li>Headache.</li>
                    										<li>Neck stiffness.</li>
                    										<li>Muscle pain.</li>
                    										<li>Vomiting.</li>
                    										<li>Paralysis in a small proportion of patients.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To provide supportive care till patient recovers from acute illness.</li>
                    										<li>To avoid paralysis or limit the extent.</li> 
                    										<li>To provide rehabilitation in paralytic cases.</li> 
                    										<li>Bed rest.</li>
                    										<li>Avoid injections during febrile illness in children.</li>
                    										<li>Physiotherapy.</li>
                    										<li>Provision of appropriate appliances to aid mobility.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 38){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Yellow fever is caused by a virus transmitted to man by a species of mosquitoes (Aedes Aegypti) that bite infected monkeys. Classical yellow fever is usually fatal. Yellow fever vaccination is protective against the disease and needs to be repeated every ten years. All cases of yellow fever should be reported to the District Disease Control Officer.
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Yellow fever virus.</li>
                    										<li>It is caused by a virus that belongs to Flavivirus.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Fever.</li>
                    										<li>Weakness.</li>
                    										<li>Abdominal pain.</li>
                    										<li>Vomiting.</li> 
                    										<li>Diarrhoea.</li>
                    										<li>Jaundice.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To provide supportive care for hepatic, renal and circulatory failure.</li>
                    										<li>To prevent further transmission.</li>
                    										<li>If yellow fever is suspected in a patient, admit immediately to an isolation ward.</li>
                    										<li>Full supportive treatment for hepatic failure and acute renal failure may be needed in patients with severe disease but the prognosis is generally poor.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 39){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This refers to a blood glucose level below 2.2mmol/L. This may result in unconsciousness and death if not promptly treated.  It should be treated as soon as suspected. Successful treatment results in prompt response. 
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Prematurity.</li>
                    										<li>Intra uterine growth retardation.</li>
                    										<li>Baby born to a diabetic mother.</li>
                    										<li>Infection.</li>
                    										<li>Asphyxia.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Irritability/restlessness.</li>
                    										<li>Tremors.</li>
                    										<li>Sweating.</li>
                    										<li>Seizures.</li>
                    										<li>Lethargy.</li> 
                    										<li>Sweating.</li>
                    										<li>Tremor.</li>
                    										<li>Convulsion.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To maintain blood glucose levels within normal.</li>
                    										<li>To treat underlying cause of hypoglycaemia.</li>
                    										<li>To prevent complications e.g. brain damage.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 40){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Deep Vein Thrombosis (DVT) is a condition in which a blood clot forms in a deep vein in the lower limbs. It is a common clinical problem which may progress to pulmonary embolism, sometimes with fatal consequences. As such it must be prevented in all hospitalized patients, especially those at high risk of developing it. It is important to differentiate DVT from cellulitis which may present with similar local clinical features.  
										                    </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                      										<b>Increased tendency of blood in the deep veins to clot, due to:</b>
                      										<li>Stagnation of blood in the vein.</li>
                      										<li>Increased viscosity of blood.</li>
                      										<li>Inflammation of the blood vessel.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                    										<li>Swelling or firmness in the calf or thigh (usually unilateral).</li>
                    										<li>Pain in the affected limb.</li>
                    										<li>Mild fever.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                    										<li>To prevent clot propagation and pulmonary embolism.</li>
                    										<li>To prevent recurrence of deep vein thrombosis.</li>
                    										<li>Elastic compression stockings.</li>
                    										<li>Ensure adequate hydration with oral fluids.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 41){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Pulmonary embolism (PE) occurs when a blood clot in the peripheral venous circulation breaks off and obstructs the pulmonary artery or its branches. It often occurs without previous warning features. It is therefore good practice to give prophylactic treatment to all patients at high risk.   
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                          <li>The dislodgement of a blood clot, usually from a vein in the lower limb,  into the pulmonary arterial circulation.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Breathlessness  may be intermittent.</li>
                                        <li>Dizziness, fainting or collapse.</li>
                                        <li>Sharp chest pain.</li>
                                        <li>Blood stained sputum.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To stabilise cardio-respiratory function.</li>
                                        <li>To prevent further clot formation and embolisation.</li>
                                        <li>To prevent death from PE.</li>
                                        <li>To prevent recurrence of PE and development of pulmonary hypertension.</li>
                                        <li>Elevate the affected leg on a pillow.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 42){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>A stroke or cerebrovascular accident is a rapidly developing focal (or global) disturbance of cerebral function lasting 24 hours or longer or leading to death, with no apparent cause other than a vascular origin. The risk factors for a stroke include hypertension, diabetes mellitus, cigarette smoking, cardiac arrhythmias, obesity, plasma lipid abnormalities, heart and peripheral vascular disease and excessive alcohol intake.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Cerebral infarction from.</li>
                                        <li>Thrombosis of a cerebral vessel.</li> 
                                        <li>Embolism from a distant site (e.g. Atrial fibrillation).</li>
                                        <li>Intracerebral & Subarachnoid haemorrhage.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Weakness of one side of the body including the face.</li>
                                        <li>Inability to rise up from a sitting or lying position.</li>
                                        <li>Sudden fall.</li>
                                        <li>Loss of speech.</li>
                                        <li>Severe headache and/or neck pain (subarachnoid haemorrhage).</li>
                                        <li>Unconsciousness in some patients.</li>
                                        <li>Seizures.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To limit the progression area of brain damage.</li>
                                        <li>To protect patients from the dangers of unconsciousness and immobility.</li>
                                        <li>To treat the underlying cause if possible.</li>
                                        <li>To institute measures to improve functional recovery.</li>
                                        <li>To support and rehabilitate patients who survive with residual disability.</li>
                                        <li>To prevent recurrence of cerebrovascular lesions.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 43){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>These are disorders of cardiac rate, rhythm and conduction. Based on the heart rate, they can be classified into bradyarrhythmias, when the heart rate is less than 60 per minute; and tachyarrhythmias, when the heart rate is greater than 100 per minute. 
                                          Bradyarrhythmias include sinus bradycardia, sinus pauses and atrioventricular blocks. The tachyarrhythmias can further be classified into supraventricular and ventricular arrhythmias, based on their site of origin. Tachyarrhythmias include atrial fibrillation, atrial flutter, paroxysmal supraventricular tachycardia, ventricular tachycardia and ventricular fibrillation.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Rheumatic heart disease.</li>
                                        <li>Hypertensive heart disease.</li>
                                        <li>Thyrotoxicosis.</li>
                                        <li>Cardiomyopathy.</li>
                                        <li>Electrolyte abnormalities particularly hypokalaemia.</li> 
                                        <li>Ischaemic heart disease.</li>
                                        <li>Pericardial disease.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Palpitation.</li> 
                                        <li>Dizziness.</li>
                                        <li>Chest discomfort.</li>
                                        <li>Difficulty in breathing.</li>
                                        <li>Sudden collapse.</li>
                                        <li>Sudden death.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>To control the heart rate.</li>
                                        <li>To restore sinus rhythm.</li>
                                        <li>To control ventricular rate.</li>
                                        <li>To prevent or treat associated complications.</li>
                                        <li>To treat the underlying condition e.g. thyrotoxicosis.</li>
                                        <li>To prevent thromboembolism.</li>
                                        <li>Reassure the patient.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 44){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is a febrile illness in which there is inflammation of several systems, but mainly the joints and heart. It is a major cause of permanent damage to the heart in developing countries. The disease occurs mainly in children of school going age. The onset of symptoms occurs 1-3 weeks after the throat infection. In Ghana, this illness may mimic malaria, typhoid fever, sickle cell disease, myocarditis and tuberculosis. 
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                          <li>It is a complication of untreated or inadequately treated Group A streptococcal infection of the throat.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Persistent fever.</li>
                                        <li>Joint pain which moves from one joint to another (knees, ankles, wrists, elbows).</li>
                                        <li>Palpitations.</li>
                                        <li>Easy fatigability.</li>
                                        <li>Chest pain.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To eradicate streptococcal throat infection.</li>
                                        <li>To prevent recurrent episodes of rheumatic fever and further heart damage.</li>
                                        <li>To treat heart failure if co-existent.</li>
                                        <li>Admit patient. Bed rest until rheumatic activity subsides.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 45){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                    <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Pneumonia is an infection of the lung tissue caused by various bacterial species, viruses, fungi or parasites. Identification of the causative organism is the key to correct treatment. However, because of the serious nature of the infection, antibiotic treatment should be started immediately based on one's estimation of the most probable cause before subsequent laboratory confirmation of the causative agent.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Community acquired pneumonia.</li> 
                                        <li>Staphylococcus aureus in the elderly during 'flu epidemics.</li> 
                                        <li>Where aspiration may occur, as in stroke, drunken stupor or seizures, anaerobic organisms and Staph. aureus should be suspected.</li>
                                        <li>Hospital acquired pneumonia.</li>
                                        <li>Gram-negative bacteria (including Pseudomonas aeruginosa).</li>
                                        <li>Staphylococcus aureus - tends to be more drug resistant.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Fever.</li> 
                                        <li>Cough productive or non-productive.</li> 
                                        <li>Sputum production rusty or blood stained, yellowish-green.</li> 
                                        <li>Pleuritic chest pain - worse on deep breathing or coughing.</li>
                                        <li>Breathlessness.</li>
                                        <li>Body aches.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To treat the infection.</li>
                                        <li>To prevent complications.</li>
                                        <li>To identify patients at greater risk who require in-hospital management.</li>
                                        <li>Nurse in comfortable position, usually on pillows or with head raised.</li>
                                        <li>Sponging to control fever, especially in children < 5 years (who are at risk of febrile convulsions).</li>
                                        <li>Adequate oral hydration if it can be tolerated.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 46){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Asthma is a chronic inflammatory disease of the bronchial airways which manifests as recurrent episodes of wheeze, cough and shortness of breath which is reversible spontaneously or with treatment. It is characterised by increased sensitivity to many external agents. Asthma is episodic and may be associated with seasons like the rainy season or harmattan. Bronchial asthma occurs at all ages but peaks in childhood. It is classified as an allergic disease, which may be due to an external or intrinsic agent. The disease may be associated with a personal or family history of hay fever, eczema or urticaria.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Allergens e.g. house dust and animal hairs.</li>
                                        <li>Drugs e.g. beta-blockers such as propranolol, prostagladin F2á and aspirin.</li>
                                        <li>Environmental e.g. air pollution, climatic changes, strong scents and smoke.</li>
                                        <li>Infections-viral or bacterial.</li>
                                        <li>Exercise.</li>
                                        <li>Emotions and hyperventilation (excessive deep breathing usually due to anxiety).</li>
                                        <li>Occupational exposure to industrial chemicals, dust and drug manufacturing.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Episodic breathlessness.</li>
                                        <li>Tightness of the chest.</li>
                                        <li>Cough - often nocturnal.</li>
                                        <li>Wheeze.</li>
                                        <li>Nocturnal symptoms - any of  the symptoms waking up the patient at night.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To relieve symptoms.</li>
                                        <li>To prevent complications and recurrence.</li>
                                        <li>Avoid triggers of an acute asthmatic attack.</li>
                                        <li>Avoid smoking.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 47){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Breast cancer is the commonest cancer affecting women. Early detection of this cancer is possible through monthly breast self-examination, which is especially recommended for women of child-bearing age, and periodic screening through clinical breast examination (3 yearlies for women below 40 years and yearly for women above 40 years) as well as mammography every 2 years for women 40 years and above.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Associated risk factors.</li>
                                        <li>Female sex.</li>
                                        <li>Family history of breast cancer.</li>
                                        <li>Previous personal history of breast cancer.</li>
                                        <li>Oestrogen therapy.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Lump in the breast.</li>
                                        <li>Other changes in breast change in size or shape.</li>
                                        <li>Skin changes in breast.</li>
                                        <li>Peau d'orange.</li>
                                        <li>Skin nodules.</li>
                                        <li>Ulceration.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To achieve a cure.</li>
                                        <li>To prevent local and distant metastasis.</li>
                                        <li>To prolong survival in metastatic disease.</li>
                                        <li>To relieve pain in incurable cases.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 48){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Dysmenorrhoea refers to cyclical lower abdominal pain associated with menstruation. The pain is thought to result from uterine contractions. It may be primary or secondary indicating the absence or presence, respectively, of an identifiable underlying cause.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Uterine fibroids.</li>
                                        <li>Chronic pelvic infections e.g. Chlamydial infections.</li>
                                        <li>Endometriosis.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Lower abdominal pain that is cramping or colicky in nature but may be dull and constant.</li>
                                        <li>Pain may radiate to the lower back or legs.</li>
                                        <li>Nausea, vomiting, headaches and dizziness may sometimes be associated with the pain.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To relieve pain.</li>
                                        <li>To treat underlying cause.</li>
                                        <li>Allow bed rest.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 49){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Anxiety is a common symptom that occurs in all psychiatric disorders including depressive illness and most psychoses. Some patients have a mixture of anxiety and depressive symptoms, but pure states exist. Due of the similarity of symptoms, it may be difficult to differentiate an anxiety state from a minor depressive illness. Anxiety may also significantly overshadow many serious illnesses. It may be worthwhile to exclude any underlying physical disease especially hyperthyroidism, cardiac disease or hypertension. 
                                          In this condition, there is excessive anxiety and worry about events or activities, such as performance at school or work, occurring on most days, for at least 6 months.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                          <li>Life experiences.</li>
                                          <li>Environmental factors.</li>
                                          <li>Personality.</li>
                                          <li>Genetics.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                          <li>Excessive anxiety and worry occurring on most days, for at least 6 months.</li>
                                          <li>Muscle tension.</li> 
                                          <li>Crawling and burning sensation around the body.</li>
                                          <li>Restlessness or feeling on edge.</li> 
                                          <li>Being easily fatigued.</li>
                                          <li>Difficulty concentrating or mind going blank.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                          <li>To reduce anxiety.</li>
                                          <li>To attain relief of somatic symptoms.</li>
                                          <li>Reassurance about the absence of physical disease once they are ruled out.</li>
                                          <li>Teach relaxation methods.</li>
                                          <li>Encourage regular exercise.</li>
                                          <li>Encourage healthy social activities.</li>
                                          <li>Psychotherapy.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 50){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>A panic disorder refers to a pattern of recurrent unexpected attacks of intense fear or discomfort over a discrete period. During attacks 4 or more of the symptoms listed below develop abruptly and reach a peak within 10 minutes. Panic disorders are accompanied by persistent concern about having another attack or worrying about implications of having an attack.  
                                          In children especially, partial complex seizures may mimic panic attacks. Medications are required to treat panic disorders only if the attacks occur frequently enough to cause distress.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Cause unknown.</li>
                                        <b>Contributing factors:</b>
                                        <li>Stress.</li>
                                        <li>Genetics.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Fear of dying or going 'crazy'.</li>
                                        <li>Palpitations, pounding heart or rapid heart rate.</li>
                                        <li>Trembling or shaking.</li>
                                        <li>Sensation of shortness of breath.</li>
                                        <li>Feeling of choking.</li>
                                        <li>Chest pain or discomfort.</li>
                                        <li>Feeling dizzy, unsteady or faint.</li>
                                        <li>Numbness or tingling sensations.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To stop the attacks of panic or at least reduce the frequency and intensity of symptoms to a minimum.</li>
                                        <li>Rebreathing into a paper bag. (Do not use a polythene bag).</li>
                                        <li>Panic disorder patients should be advised to eliminate caffeine containing foods e.g. coffee, tea, cola and chocolates, from their diet as they tend to worsen anxiety.</li> 
                                        <li> Training.</li> 
                                        <li>Cognitive Therapy.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 51){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Pruritus or itching is a sensation that the patient instinctively attempts to relieve by scratching. Itching may accompany a primary skin disease or may be a symptom of a systemic disease. The cause of the itching should be identified and treated. If no skin disease is seen, an underlying systemic disorder or drug-related cause should be sought.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Scabies, Contact dermatitis, Pediculosis (body lice).</li>
                                        <li>Intertrigo, Onchocerciasis, Urticaria.</li>
                                        <li>Insect bites (fleas, bed bugs), Lichen planus.</li>
                                        <li>Dry skin (especially in the elderly) often causes severe generalized itching.</li>
                                        <li>Obstructive liver disease (cholestasis).</li>
                                        <li>Uraemia (in renal failure).</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Itching.</li>
                                        <li>Itching, excoriations and scars.</li>
                                        <li>Features of underlying conditions.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To relieve symptoms.</li>
                                        <li>To identify and treat underlying condition.</li>
                                        <li>Avoid contact with substances known to cause itching.</li>
                                        <li>Stop all medications and perfumery likely to cause itching.</li>
                                        <li>Irritating clothing e.g. nylon should be avoided.</li>
                                        <li>Counselling for psychogenic pruritus.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 52){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is a disorder of the hair follicle and sebaceous gland which presents mainly in adolescence and usually resolves by late teens. Severe acne may require evaluation to exclude an underlying hormonal disorder. Food is not known to be responsible for acne vulgaris Psychological disturbances may occur in this condition.   
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Increased sebum secretion.</li>
                                        <li>Abnormal keratinisation of the hair follicles( hereditary).</li>
                                        <li>Increased sensitivity of the sebaceous glands to male hormones.</li> 
                                        <li>Prolonged use of systemic and topical steroids.</li>
                                        <li>Use of pomades e.g. cocoa butter.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Pimples on face, and occasionally on the trunk, chest and shoulders.</li>
                                        <li>Greasy skin.</li>
                                        <li>Comedones (blackheads and whiteheads).</li>
                                        <li>Papules, Cysts, Scars.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To improve cosmetic appearance.</li>
                                        <li>To prevent complications particularly scarring.</li>
                                        <li>To reassure patient.</li>
                                        <li>Regular washing of affected skin areas with sulphur based soap and water.</li>
                                        <li>Counselling of patients.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 53){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Hepatocellular carcinoma (HCC) is a primary malignancy of the liver cell and must be differentiated from malignancies elsewhere that metastasize to the liver.  HCC occurs more commonly in men than in women and is often diagnosed several years after establishment of the initial causative condition. The disease has a poor prognosis resulting from early metastases to the lung, portal vein, peri-portal lymph nodes, bone or brain and complications such as hepatic failure, variceal bleeding or tumor rupture with bleeding into the peritoneum. The tumour is often resistant to chemotherapy.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Alcoholic liver cirrhosis.</li>
                                        <li>Chronic hepatitis B virus infection.</li>
                                        <li>Chronic hepatitis C virus infection.</li>
                                        <li>Chronic exposure to hepatic carcinogens e.g. Aflatoxin.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Jaundice.</li> 
                                        <li>Itching .</li> 
                                        <li>Weight loss.</li> 
                                        <li>Haematemesis.</li>
                                        <li>Abdominal distension.</li>
                                        <li>Right upper abdominal pain.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To relieve pain.</li> 
                                        <li>To relieve discomfort from gross ascites.</li>
                                        <li>To prevent or treat hepatic encephalopathy.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 54){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Bladder cancer is the second commonest urological cancer after prostate cancer. It is the commonest of all the cancers which affect the urinary tract lining (urothelium). Males are more affected than females in a ratio of about 3:1. It is more common in the white race compared to the black race in a ratio of 4:1.More than 80% of clients with bladder cancer are above 50 years. The commonest pathological types are transitional cell carcinoma TCC (90%), Squamous cell carcinoma (8%) and adenocarcinoma and carcinoma in-situ (2%). 
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Smoking of cigarettes.</li>
                                        <li>Occupational Risks; Environmental exposure to cancercausing chemicals used in industries like dye, textile, rubber, cable, printing, plastic, spraying and hair-dressing.</li>
                                        <li>Chronic Infections of the bladder like Schistosoma haematobium(Bilharzia) and chronic bacterial infections.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>May be asymptomatic in early disease (25%).</li>
                                        <li>Haematuria (usually painless).</li>
                                        <li>Frequency.</li> 
                                        <li>Urgency.</li>
                                        <li>Dysuria.</li>
                                        <li>Flank pain (hydronephrosis).</li>
                                        <li>Pelvic pain from cancer invasion.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>Surgical cure for early disease.</li>
                                        <li>Prevention of recurrence, progression and metastases.</li>
                                        <li>Management of complications.</li>
                                        <li>Additional treatment with cancer drugs and radiotherapy where necessary.</li> 
                                        <li>Cystectomy: Partial or radical with or without bladder replacement.</li>
                                        <li>Radiotherapy.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 55){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Carcinoma of the cervix is the commonest form of female genital cancer seen in Ghana and indeed most developing countries. Even though it is common, it is thought to be preventable. Its treatment poses a major challenge, demanding the services of a gynaecological oncologist and the surgical procedure, Wertheim's hysterectomy, for operable cases.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Human papilloma virus.</li>
                                        <li>Associated risk factors.</li>
                                        <li>Sexual promiscuity.</li>
                                        <li>Multiple child births.</li>
                                        <li>Infections with Herpes Simplex Hominis type II, HIV.</li>
                                        <li>Smoking.</li>
                                        <li>Low socio-economic status.</li>
                                        <li>Family history.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Asymptomatic (diagnosed on routine screening or assessment during antenatal care, family planning etc.).</li>
                                        <li>Symptomatic.</li> 
                                        <li>Early cases-erosion of cervix or changes of chronic cervicitis.</li>
                                        <li>Ulcerative or fungating cervical lesion on speculum examination.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To treat central tumour 
                                        <li>To treat areas of tumour spread with the aim of eradicating the disease
                                        <li>Surgery.</li>
                                        <li>Radiotherapy.</li>
                                        <li>A combination of surgery and radiotherapy Early disease.</li>
                                        <li>Primary surgery.</li>
                                        <li>Conisation of the cervix or simple hysterectomy Overt disease .</li>
                                        <li>Radical surgery.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 56){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is acute inflammation of joints, usually big joints, following bacterial infection. The majority are due to non-gonococcal bacteria whereas the remaining cases may follow gonorrhoeal infection. Good prognosis depends on early initiation of appropriate antibiotic treatment which should begin immediately diagnosis is suspected while ensuring that samples are taken for appropriate investigations.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>Staphylococcus aureus in majority of cases.</li>
                                        <li>Streptococcus pyogenes and Pneumococci.</li>
                                        <li>Haemophilus influenzae in infants.</li>
                                        <li>Salmonella in sickle cell disease.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                      <li>Sudden onset. Large joints usually affected.</li>
                                      <li>Pain, Joint abnormalities.</li>
                                      <li>Fever, swollen with effusion.</li>
                                      <li>Restriction of movement of limbs.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                      <li>To relieve pain.</li>
                                      <li>To treat infection.</li>
                                      <li>To prevent joint damage.</li>
                                      <li>Rest affected joint e.g. splinting or traction during acute phase.</li>
                                      <li>Joint aspiration.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 57){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is an infection of the coverings of the brain, and is most commonly caused by bacteria. Other causative organisms are viruses, fungi and protozoa. One type, cerebrospinal meningitis (CSM), caused by Neisseria meningitides, is common in the northern and upper regions of Ghana, and usually occurs in epidemics during the harmattan season. This type is contagious and usually presents with a short history. The presentation may sometimes be confused with cerebral malaria. 
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Bacterial, Viruses.</li>
                                        <li>Neisseria meningitides.</li>
                                        <li>Streptococcus pneumoniae.</li>
                                        <li>Haemophilus influenza.</li>
                                        <li>Mycobacterium tuberculosis.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Fever, Irritability, Refusal to eat.</li>
                                        <li>Poor sucking, Vomiting.</li>
                                        <li>Drowsiness and weak cry.</li>
                                        <li>Focal or generalized convulsions after which the child is sleepy.</li>
                                        <li>Presence or absence of neck stiffness.</li> 
                                        <li>Bulging fontanelle, Coma, Lethargy.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To identify and eradicate the causative organisms.</li>
                                        <li>To prevent complications.</li>
                                        <li>To prevent spread to contacts.</li> 
                                        <li>Reduce fever in children with tepid sponging.</li>
                                        <li>Maintain good nutrition.</li> 
                                        <li>Feed through a nasogastric tube if patient is in coma.</li>
                                        <li>Keep the airway clear.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 58){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Acquired Immune Deficiency Syndrome (AIDS) is a late stage of infection with the Human Immune Deficiency Virus (HIV). It can affect both adults and children often predisposing them to opportunistic infections and certain malignancies. 
                                          HIV infection is currently not curable. The only way to stop the spread of the infection is by preventive methods. For persons living with HIV infection (PLHIV), anti-retroviral therapy (ART) is available country-wide at accredited centres at the regional and district level in both public and private health care facilities.
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Human Immunodeficiency Virus.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <b>Major Signs</b>
                                        <li>Weight loss.</li> 
                                        <li>Chronic diarrhoea > 1 month.</li>
                                        <li>Prolonged fever > 1 month.</li>
                                        <b>Minor Signs</b>
                                        <li>Generalized lymphadenopathy.</li>
                                        <li>Oro-pharyngeal candidiasis.</li>
                                        <li>Repeated common infections (otitis media, pharyngitis).</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To make the patient feel clinically better.</li>
                                        <li>To produce sustained and durable suppression of viral load.</li>
                                        <li>To reduce HIV-related morbidity and mortality.</li>
                                        <li>To restore or preserve immune function and prevent opportunistic infection.</li> 
                                        <li>Prevention of HIV infection is by promoting safe sexual practices through abstinence, faithfulness to one's partner and the use of condoms.</li> 
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 59){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is cessation of blood supply to the test is due to twisting of the cord. This is a medical emergency that needs to be recognized before the cardinal signs and symptoms are fully manifest as prompt surgery saves the testes. 
                                          It can be classified into intra-vaginal torsion which constitute more than 95% and extra-vaginal torsion which is usually found in infants.  About 50% of torsion occurs during sleep and early in the morning.  It is rare in older children and adults but common in children under 15 years.   
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Undescended testis.</li>
                                        <li>Bell-clapper malformation.</li>
                                        <li>Horizontal lie of testis/inversion of testis.</li> 
                                        <li>Long mesorchium.</li>
                                        <li>Trauma.</li>
                                        <li>Spasm of cremaster muscles.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Sudden onset of acute severe pain in one testicle or recurrent pain which resolves spontaneously (recurrent torsion and detorsion).</li> 
                                        <li>Lower abdominal pain on affected side.</li>
                                        <li>Nausea and vomiting.</li>
                                        <li>No urinary symptoms.</li> 
                                        <li>No fever.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To have surgical intervention within 6 hours of onset.</li>
                                        <li>To surgically explore all doubtful cases.</li>
                                        <li>To prevent testicular loss.</li>
                                        <li>Emergency surgery is the standard treatment.</li>
                                        <li>Manual detorsion procedure-under local anaesthesia (see below) and standing at the foot of bed untwist: Right testis anticlockwise, Left testis- clockwise.</li>
                                        <li>Emergency surgery should follow this procedure as soon as possible.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 60){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This refers to a narrowing or complete obstruction of the urethral lumen due to fibrosis (scarring). It is the second commonest cause of retention of urine in Ghana and the most common in young males usually resulting from previous inadequately treated STI. The commonest site is the anterior urethra i.e. bulbar and penile urethra in males. It may be complicated by periurethral abscess, superficial extravasation of urine and urethrocutaneous fistulae.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Gonococcal or non-gonococcal urethritis.</li>
                                        <li>External trauma e.g. road traffic injuries, falls.</li>
                                        <li>Urethral instrumentation e.g. catheterisation, endoscopy.</li>
                                        <li>Congenital strictures (rare).</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>There may be none
                                        <li>Bladder may be palpable if there is retention.</li>
                                        <li>Kidney may be palpable in hydronephrosess.</li>
                                        <li>Localized induration may be felt along the urethra.</li>
                                        <li>Failure of catheterisation this heightens the suspicion of a stricture.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To relieve symptoms and prevent complication.</li>
                                        <li>To treat underlying cause.</li>
                                        <li>Try catheterisation a gentle attempt is made to pass a urethral catheter, which will be held up, at the site of stricture.</li>
                                        <li>If catherization fails and patient in acute retention.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 61){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is the passage of blood in the urine. Certain drugs and food products may colour urine red and these should be differentiated from haematuria. Examples of such substances are rifampicin and rhodamine B food colouring used in cakes, cookies and soft drinks. Occasionally vaginal bleeding may be mistaken for haematuria.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Vesical schistosomiasis (Bilharzia).</li>
                                        <li>Benign prostatic hyperplasia (BPH).</li>
                                        <li>Carcinoma of prostate, bladder and kidney.</li>
                                        <li>Urinary tract infection.</li>
                                        <li>Trauma, Urinary calculi.</li>
                                        <li>Medical causes e.g. sickle cell disease, acute glomerulonephritis and anticoagulant therapy.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Blood in the urine (on initiation, mixed with the urine, or at the end of passing urine).</li>
                                        <li>Pain/discomfort on passing urine.</li>
                                        <li>Lower urinary tract symptoms (LUTS).</li>
                                        <li>Loin pain.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To treat underlying cause.</li>
                                        <li>To arrest bleeding.</li>
                                        <li>High fluid intake is advised in order to prevent clot formation in the urinary bladder.</li>
                                        <li>If patient presents with clot retention, then catheterise and refer.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 62){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>Kidney damage for >3 months, as defined by structural or functional abnormalities of the kidney, with or without decreased GFR manifest by either Pathological abnormalities; or Markers of kidney damage, including abnormalities in the composition of the blood or urine abnormalities in imaging tests or GFR < 60mL/minute/1.73m2 for > 3 months, with or without kidney damage.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Hypertensive renal disease.</li>
                                        <li>Glomerulonephritis, Pyelonephritis.</li>
                                        <li>Anorexia, nausea, vomiting.</li>
                                        <li>Gastrointestinal bleeding.</li>
                                        <li>Breathlessness on exertion.</li>
                                        <li>Thirst, Nocturia, polyuria.</li>
                                        <li>Muscle Cramps, Paraesthesia, Pruritus, Insomnia.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <b>Early Signs</b>
                                        <li>Earlier stages detected through laboratory tests in serum creatinine and estimation of GFR.</li>
                                        <li>Measurement of albumin creatinine ratio.</li>
                                        <b>Late Signs</b>
                                        <li>Lethargy.</li>
                                        <li>Bleeding tendency.</li>
                                        <li>Pallor.</li>
                                        <li>Hypertension.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To detect chronic kidney disease early in susceptible individuals.</li>
                                        <li>To control hypertension.</li> 
                                        <li>To control blood glucose.</li>
                                        <li>To treat other underlying causes.</li>
                                        <li>To prevent complications and further worsening of kidney function.</li>
                                        <li>General health advice e.g. smoking cessation.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
if($setvalue == 63){
  echo "<div class='col-md-10 offset-md-1 col-xl-6 offset-xl-0'>
                      <p class='category'><br></p>
                        <div class='card'>
                            <ul class='nav nav-tabs nav-tabs-neutral justify-content-center' role='tablist' data-background-color='orange'>
                                <li class='nav-item'>
                                    <a class='nav-link active' data-toggle='tab' href='#home1' role='tab'>About</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#profile1' role='tab'>Causes</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#messages1' role='tab'>Symptoms</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' data-toggle='tab' href='#settings1' role='tab'>Prevention</a>
                                </li>
                            </ul>
                          
                          <div class='card-block'>
                                <div class='tab-content text-center'>
                                    <div class='tab-pane active' id='home1' role='tabpanel'>
                                        <p>This is a condition in which the blood pressure of an adult is persistently higher than 140/90 mmHg in a non-diabetic, or above 130/80 mmHg in a diabetic, based on the average of two or more properly measured blood pressure readings.Hypertension carries an increased risk of early death from stroke, heart attack, heart failure and kidney failure if not properly controlled. Once a diagnosis of hypertension is made, the individual should be evaluated for the cause of the hypertension.  
                                        </p>
                                    </div>
                                <div class='tab-pane' id='profile1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <b>Primary hypertension</b>
                                        <li>In the majority of patients no specific underlying cause is identified.</li> 
                                        <li>Risk factors associated with this type of hypertension include increasing age, family history, excess body weight, excessive alcohol intake.</li>
                                        <b>Secondary hypertension</b>
                                        <li>In about 10% of cases, hypertension may be due to a kidney disease, endocrine disorder, renal artery stenosis or coarctation of the aorta.</li> 
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='messages1' role='tabpanel'>
                                    <p>
                                      <ol class='list'> 
                                        <li>Most patients with hypertension may have no complaint whatsoever and are discovered by chance during medical examinations.</li>
                                        <b>Occasionally, patients may complain of:</b>
                                        <li>Headache.</li>
                                        <li>Palpitation.</li>
                                        <li>Dizziness.</li>
                                        <li>Easy fatigability.</li>
                                      </ol>
                                    </p>
                                </div>
                                <div class='tab-pane' id='settings1' role='tabpanel'>
                                    <p>
                                      <ol class='list'>
                                        <li>To reduce blood pressure levels to 140/90 mmHg or less(130/80 mmHg or less in diabetics).</li>
                                        <li>To prevent cardiovascular, cerebrovascular and renal complications.</li>
                                        <li>To identify and manage secondary hypertension appropriately .</li>
                                        <li>Reduce salt intake.</li>
                                        <li>Reduce animal fat intake.</li>
                                        <li>Ensure regular fruit and vegetable intake.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
}
?>  

<div style="text-align: left"></div>
</body>

<script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min1.js" type="text/javascript"></script>

</html>