$(document).ready(function(){
    const body=$("body");
    const popup="<div class='popup'></div>";
    var frmOpt;
   $("#btnAdd").click(function(){
    body.append(popup);
    const frm=["frm-menu.php","frm-news.php"];
    
    $(".popup").load("frm/"+frm[frmOpt],function(responseTxt,statusTxt,xhr){
        if(statusTxt=="success")
            //    alert("dc")
            if(statusTxt=="error")
                alert("Error:"+xhr.status +":"+xhr.statusTxt);

            
    });
   });
   //close frm
   body.on("click",".frm #btnClose",function(){
    $(".popup").remove();

   });
   //get from
   body.on("click",".left-menu .sub-menu li",function(){
    var eThis =$(this);
    
    frmOpt = eThis.data("opt");

    body.find('.container .box').show();
   });

});