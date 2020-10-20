function init(){
    max=1000;
    cp=document.getElementById("div_form");
    cp.style.display="none";
    nb=document.getElementById("nb_caract");
    nb.value=max;
    comment_text=document.getElementById("cont_comment");
    fr=document.getElementById("first");
    sd=document.getElementById("second");
    txt=document.getElementById("ev_desc");
    txt.style.overflow="hidden";
    fr.style.display="block";
    sd.style.display="none";
    heure();
    reste();
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
function reste(){
    if(comment_text.value.length>max){
      comment_text.value=comment_text.value.substring(0,max);
      nb.value=max;
    }
    nbr=max-comment_text.value.length;
    nb.value=nbr;
}
function comment(){
cp.style.display="block";
}
function afficher_event(){
  txt.style.minHeight=600+"px";
  fr.style.display="none";
  sd.style.display="block";
}
