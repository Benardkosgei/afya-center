 <?php
 $malaria = array("Headache", "high temperature of 38", "a widespread red rash","Fever");
 $dangue  = array("Fever","Headache","muscle and joint pains","Skin rash" );
 $cough =array("Fatigue","Sneeze");
 $corona = array("dry cough","tiredness","diarrhoea","Headache","a widespread red rash");
 #=------------------------------------
 if(empty($_POST['symptom'])){
 	die("<b style='color:red;margin-left:10px;'>You've got to select atleast a symptom!!</b>");
 }
 #------------------------------------------------------------
  $symptom =$_POST['symptom'];
  $arrlength = count($symptom);
  $disease = "";
  echo "<b>Your symptoms are : </b> </br>";
    foreach ($symptom as $key => $value) {
       echo "$value</br>";
        foreach ($malaria as $sign) {
           for ($i=0; $i < $arrlength; $i++) { 
             if($sign == $value){

                $disease = "Malaria";
              }
            }

        }
    	//---------------------------------------------------------------
          foreach ($dangue as $data) {
             for ($i=0; $i < $arrlength; $i++) { 
               if($data == $value){
                  $disease = "Dangue";
               }
                
                }
                
          }
      //-------------------------------------------------------------------
          foreach ($cough as $sign) {
             for ($i=0; $i < $arrlength; $i++) { 
               if($sign == $value){
                  $disease = "Cough";
                }
              }


          }
      //---------------------------------------------------------------------
          foreach ($corona as $covid) {
             for ($i=0; $i < $arrlength; $i++) { 
               if($covid == $value){
                  $disease = "Covid - 19";
               }
                }
                

          }
      //---------------------------------------------------------------------
    }
    

    echo "<b>System Prediction :</b> ";
   echo  $disease;
  
 ?>