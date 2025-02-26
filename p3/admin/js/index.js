$(document).ready(function () {
    const body = $("body");
    const popup = "<div class='popup'></div>";
    var tbl = $('#tblData');
    var frmOpt;
    //get autoID
    function get_auto_id() {
        $.ajax({
            url: 'action/get-auto-id.php',
            type: 'POST',
            data: { opt: frmOpt, a: 123, b: "rtyu" },
            // contentType:false,
            cache: false,
            // processData:false,
            dataType: "json",
            beforeSend: function () {
                //work before success    
            },
            success: function (data) {
                // alert(data['id']);
                if (data['id'] == null) {
                    body.find(".frm #txt-id").val(1);
                    body.find(".frm #txt-od").val(1);

                } else {
                    body.find(".frm #txt-id").val(parseInt(data['id']) + 1);
                    body.find(".frm #txt-od").val(parseInt(data['id']) + 1);
                }
            }
        });
    }
    $("#btnAdd").click(function () {
        body.append(popup);
        const frm = ["frm-menu.php", "frm-news.php"];

        $(".popup").load("frm/" + frm[frmOpt], function (responseTxt, statusTxt, xhr) {
            if (statusTxt == "success")
                get_auto_id();
            if (statusTxt == "error")
                alert("Error:" + xhr.status + ":" + xhr.statusTxt);


        });
    });
    //close frm
    body.on("click", ".frm #btnClose", function () {
        $(".popup").remove();

    });
    //get from
    body.on("click", ".left-menu .sub-menu li", function () {
        var eThis = $(this);
        frmOpt = eThis.data("opt");
        body.find('.container .box').show();
        if(frmOpt==0){
        get_menu_data();
        }else if(frmOpt==1){
        get_new_data();
        }
    });
    //get menu data
    function get_menu_data() {
        var txt = '';
        var th = `<tr>
                    <th width="70">ID </th>
                    <th >Name</th>
                    <th width="50">Photo </th>
                    <th width="50">OD</th>
                    <th width="50">Status</th>
                    <th width="50">Action</th>
                </tr>`;
        $.ajax({

            url: 'action/get-menu-json.php',
            type: 'POST',
            data: {},
            // contentType:false,
            cache: false,
            // processData:false,
            dataType: "json",
            beforeSend: function () {
                //work before success    
            },
            success: function (data) {
                for (i in data) {
                    txt += `
                    <tr> 
                    <td>${data[i]['id']} </td>
                    <td> ${data[i]['title']}</td>
                    <td>${data[i]['img']} </td>
                    <td> ${data[i]['od']}</td>
                    <td>${data[i]['status']} </td>
                    <td> </td>
                    </tr>
                    
                    `
                }
                tbl.html(th + txt);
            }
        });
    }
      //get new
    function get_new_data(){
        var th=`<tr>
                 <th width="100px">ID </th>
                    <th>Title</th>
                    <th>Photo</th>
                    </tr>
        `;
        tbl.html(th);
      }
    // Save menu
    function save_menu(eThis){
        var Parent=eThis.parents('.frm');
        var id=Parent.find('#txt-id');
        var title=Parent.find('#txt-title');
        var od=Parent.find('#txt-od');
        var status=Parent.find('#txt-status');
        var frm = eThis.closest('form.upl');
        var Photo="123.pv";
        var frm_data = new FormData(frm[0]);
        $.ajax({
            url: 'action/save-menu.php',
            type: 'POST',
            data: frm_data,
            contentType: false,
            cache: false,
            processData: false,
            dataType:"json",
            beforeSend: function () {
                //work before success    
            },
            success: function (data) {
                
             var tr=`
                 <tr>
                    <td>${data.id}</td>
                    <td>${title.val()}</td>
                    <td>${Photo}</td>
                    <td>${od.val()}</td>
                    <td>${status.val()}</td>
                    <td>100</td>
                    
                 </tr>
             `     ;
             tbl.find('tr:eq(0)').after(tr);
             title.val('');
             id.val(data.id+1);
             od.val(data.id+1);
             title.focus();

            }
        }); 
    }
    function save_news(){
        alert("23")
    }
    body.on('click', '.frm .btnSave', function () {
        var eThis = $(this);
       
        if(frmOpt==0){
        save_menu(eThis);
        }else if(frmOpt==1){
            save_news();
        }
    });
});