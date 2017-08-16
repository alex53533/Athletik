<?php


 class NextBMeet{
  
    public function nextmeeting(){
     
        $IndexWeb=new IndexWeb;
        $IndexWeb-> nextmeet();
        
    }
    public function lastclassmnt(){
     
         $IndexWeb=new IndexWeb;
         $IndexWeb-> lastresult();
    }
    public function generalclassmnt(){
     
         $IndexWeb=new IndexWeb;
         $IndexWeb-> classmnt();      
    }
    public function resultbymeeting(){
     
         $Resultbydate=new Resultbydate;
         $Resultbydate-> bydate();   
    }
 } 