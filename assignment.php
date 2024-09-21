<?php
function Call_name(){

   print ("Hello Nakitende Christine");

}
function MYage($currentYear,$DateOfBirth)
{
$age=$currentYear-$DateOfBirth;
return $age;
}
function HomeAddress()
{print ("Kampala Ug");

}
 Call_name();
 print ("!<br> Thank you for coming to \t" );
 HomeAddress();
print ("<br>Today you make\t".MYage(2024,2003)."\tyears old");

?>