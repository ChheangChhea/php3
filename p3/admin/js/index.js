$(document).ready(function(){
    const body=$("body");
    const popup="<div class='popup'></div>";
    var frmOpt;
    //get autoID
    function get_auto_id(){
        $.ajax({
            url:'action/get-auto-id.php',
            type:'POST',
            data:{opt:frmOpt,a:123,b:"rtyu"},
            // contentType:false,
            cache:false,
            // processData:false,
            dataType:"json",
            beforeSend:function(){
                    //work before success    
            },
            success:function(data){   
                    // alert(data['id']);
                    if(data['id']==null){
                        body.find(".frm #txt-id").val(1);    
                        body.find(".frm #txt-od").val(1);   

                    }else{
                    body.find(".frm #txt-id").val( parseInt(data['id']) +1);    
                    body.find(".frm #txt-od").val( parseInt(data['id']) +1);   
            }}				
        }); 
    }
   $("#btnAdd").click(function(){
    body.append(popup);
    const frm=["frm-menu.php","frm-news.php"];
    
    $(".popup").load("frm/"+frm[frmOpt],function(responseTxt,statusTxt,xhr){
        if(statusTxt=="success")
            get_auto_id();
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
    // Save menu
    body.on('click','.frm .btnSave',function(){
        var eThis =$(this);
        var frm = eThis.closest('form.upl');
        var frm_data = new FormData(frm[0]);
        $.ajax({
            url:'action/save-menu.php',
            type:'POST',
            data:frm_data,
            contentType:false,
            cache:false,
            processData:false,
            // dataType:"json",
            beforeSend:function(){
                    //work before success    
            },
            success:function(data){   
                    //work after success        
            }				
        }); 
    });
});