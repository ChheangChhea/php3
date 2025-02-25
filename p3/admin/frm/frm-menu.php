<div class="frm">
    <div class="header">
        <span> Menu from</span>
        <div class="btnClose" id="btnClose">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <form class="upl">
        <div class="body">
            <label for="">ID</label>
            <input type="text" name="txt-id" id="txt-id" class="frm-control" readonly>

            <label for="">Title</label>
            <input type="text" name="txt-title" id="txt-title" class="frm-control">

            <label for="">OD</label>
            <input type="text" name="txt-od" id="txt-od" class="frm-control">
            <label for="">Status</label>
            <select name="txt-status" id="txt-status" class="frm-control">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <label for="">Photo</label>
            <div class="img-box">
                <input type="file" name="" id="">
                <input type="hidden" name="txt-img-name" id="txt-img-name">
            </div>

        </div>
        <div class="footer">
            <div class="btnSave" id="btnSave">
                <i class="fa-solid fa-floppy-disk"></i>
                save
            </div>
        </div>
    </form>

</div>