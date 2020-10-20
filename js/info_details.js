function init(){
    max=1000;
    nb=document.getElementById("nb_caract");
    nb.value=max;
    comment_text=document.getElementById("cont_comment");
    vo_res=document.getElementById("voir_res");
    result=document.getElementById("v_result");
    result.style.display="none";
    yes=0;
    no=0;
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
      nb.value=0;
    }
    nbr=max-comment_text.value.length;
    nb.value=nbr;
}
function vote_with(){
  yes++;
}
function vote_without(){
  no++;
}
function vote_result(){
  document.getElementById("v_y").innerHTML=yes;
  document.getElementById("v_n").innerHTML=no;
  vo_res.style.display="none";
  result.style.display="block";
}
