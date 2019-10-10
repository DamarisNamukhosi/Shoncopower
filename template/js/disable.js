
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(e)
{
  if(event.button==2)
   {
     alert(status);
     return false;	
   }
}
