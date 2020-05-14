    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"> Screenshots </h4>
            </div>

            <div class="modal-body">

                <div class="x_panel" style="padding: 10px;">
                    <div class="row" style="display: flex;">
                        <div style="width: 800px;">
                            <div style="display: flex; padding-left: 20px;">
                                <label> Date </label>
                                <p style="padding-left: 15px"> 01/01/2001 </p>
                            </div>

                            <div style="display: flex; padding-left: 20px;">
                                <label> Employee Name: </label>
                                <p style="padding-left: 15px"> Kim Yohan </p>
                            </div>

                            <div style="display: flex; padding-left: 20px; ">
                                <label> Project Name </label>
                                <p style="padding-left: 15px"> Pesamakini Backend UI </p>
                            </div>

                            <div style="display: flex; 20px; padding-left: 20px; ">
                                <label> Activity Title </label>
                                <p style="padding-left: 15px"> Title of Activity </p>
                            </div>
                        </div>

                        <div style="width: 500px;">
                            <div style="display: flex; padding-left: 20px; ">
                                <label> Time Start </label>
                                <p style="padding-left: 15px"> 11:00 am </p>
                            </div>

                            <div style="display: flex; padding-left: 20px; ">
                                <label> Time End </label>
                                <p style="padding-left: 15px"> 11:00 pm </p>
                            </div>

                            <div style="display: flex; padding-left: 20px; ">
                                <label> Time Consumed </label>
                                <p style="padding-left: 15px"> 12 hrs </p>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="display: flex; padding: 0px 10px 10px 10px;">
                        <div class="x_panel" style="margin-right: 5px">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="height: 500px">
                                <table id="datatable" class="table table-striped projects">
                                    <tbody>
                                        @for($i = 0; $i < 20 ; $i++)
                                        <tr>
                                            <td> Screenshot_0000{{$i}}.jpg </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="x_panel" style="margin-right: 5px">
                            <label> Screenshot_00001.jpg </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>