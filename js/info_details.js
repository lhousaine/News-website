function init(){
    heure();
}
function heure(){
  setTimeout("heure()",1000);
  d=new Date();
  h=d.getHours();
  m=d.getMinutes();
  s=d.getSeconds();
  j=d.getDate();
  mo=d.getMonth()+1;
  y=d.getFullYear();
  if(s%2==0)
    sep=":";
  else
    sep=" ";
  if(h<10) h="0"+h;
  if(m<10) m="0"+m;
  if(s<10) s="0"+s;
  if(j<10) j="0"+j;
  if(mo<10) mo="0"+mo;
  sp="-";
  document.getElementById("hr").value=h+sep+m+sep+s;
  document.getElementById("dt").value=j+sp+mo+sp+y;
}
