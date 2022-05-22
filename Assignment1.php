

<?php
/*Assignment 1 Haini Xiao A00587586
2022 May 16
*/


//call function getDayofTheWeek

getDayofTheWeek(1950,"March",20);

     // function validate leap year
       function isLeapYear($year){
    
       return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
    
       }

     //function getdayOfTheWeek

      function getDayofTheWeek($year, $month,$day){
    
      //month code
      switch ($month) {
      case "January":
      $key=1;
      break;
      case "February":
      $key=4;
      break;
      case "March":
      $key=4;
      break;
      case "April":
      $key=0;
      break;
      case "May":
      $key=2;
      break;
      case "June":
      $key=5;
      break;
      case "July":
      $key=0;
      break;
      case "Auguest":
      $key=3;
      break;
      case "September":
      $key=6;
      break;
      case "October":
      $key=1;
      break;
      case "November":
      $key=4;
      break;
      case "December":
      $key=6;
      break;
      default:
    
      }
            

       //week code
       
        $weekcode = array('Saturday'=>0, 'Sunday'=>1,'Monday'=>2, 'Tuesday'=>3, 'Wednesday'=>4, 'Thursday'=>5, 'Friday'=>6);     

      
       $leapy=isLeapYear($year);
    
    
       if($leapy ==1){ //if it is leap year
      
            $yearremain=$year%100; //get last 2 digits
      
            $y1=floor($yearremain/12);//how many 12s fit in
            $y2=$yearremain-$y1*12;//the remainder of the devision
            $y3=floor($y2/4);//how many 4s fit in
            
      
          //if january or February in leap year 
          
           if($month == "January" || $month == "February" ){
              $daynew=$day-1;
           }
           
           // if in the 1600 or 2000
           
           elseif($year== 1600 || $year ==2000 ){
              $daynew=$day+6;
           }
           // of in 1700 or 2100
           elseif($year== 1700 || $year ==2100 ){
               
             $daynew=$day+4;
           }
           //if in 1800
            elseif($year== 1800 ){
               
              $daynew=$day+2;
           }
           
           
           // echo $y1 .  $y2. $y3 . $day. $key;

            $sum=$y1+$y2+$y3+$daynew+$key;//sum
            $weeknum=$sum%7; //mode by 7
      
            $weekvalue = array_search ($weeknum, $weekcode);//get week name
        
         
       }
        else{ //if it is not leap year
       
         $yearremain=$year%100; //get last 2 digits
      
         $y1=floor($yearremain/12);//how many 12s fit in
         $y2=$yearremain-$y1*12;//the remainder of the devision
         $y3=floor($y2/4);//how many 4s fit in
      
   
        $sum=$y1+$y2+$y3+$day+$key;//sum
        $weeknum=$sum%7; //mode by 7
      
        $weekvalue = array_search ($weeknum, $weekcode);//get week name
        
        
       }
    
      echo $month . " " . $day . ", " . $year.  "   "  . $weekvalue;
     }

    //function print out each day in 2022
  
  
   function makeCalendar($year2022){
       
       echo "\n-----------------\nPrint 2022 Calendar\n";
       
       
       //week code
       
        $weekcode = array('Saturday'=>0, 'Sunday'=>1,'Monday'=>2, 'Tuesday'=>3, 'Wednesday'=>4, 'Thursday'=>5, 'Friday'=>6);   
        
       
      // month 1,3,5,7,8,10,12 have 31 days
      // month 2 has 28 days
      //month 2,4,6,9,11 have 30 days
      
      
       for($i=1;$i<=12;$i++){
           
            
         //month code
          switch ($i) {
          case 1:
          $key=1;
          break;
          case 2:
          $key=4;
          break;
          case 3:
          $key=4;
          break;
          case 4:
          $key=0;
          break;
          case 5:
          $key=2;
          break;
          case 6:
          $key=5;
          break;
          case 7:
          $key=0;
          break;
          case 8:
          $key=3;
          break;
          case 9:
          $key=6;
          break;
          case 10:
          $key=1;
          break;
          case 11:
          $key=4;
          break;
          case 12:
          $key=6;
          break;
          default:
        
          }
           
           
          if ($i==2){
              
              $d=28;
          }
          
           
          elseif($i==1 ||$i==3 || $i==5|| $i==7|| $i==8 || $i==10 || $i==12){
              
              $d=31;
          }
          else{
              
              $d=30;
          }
           
           
        for($j=1;$j<=$d;$j++) {
            
         $yearremain=$year2022%100; //get last 2 digits
      
         $y1=floor($yearremain/12);//how many 12s fit in
         $y2=$yearremain-$y1*12;//the remainder of the devision
         $y3=floor($y2/4);//how many 4s fit in
         
        
         $sum=$y1+$y2+$y3+$j-1+$key;//sum
         $weeknum=$sum%7; //mode by 7
      
         $weekvalue = array_search ($weeknum, $weekcode);//get week name
           
            
         echo  $i."-".$j."-". $year2022 . "  ". $weekvalue .  "\n";
           
            
  
            
        }
           
           
       }
       
   }//end makecalendar

   makeCalendar(2022);

?>
