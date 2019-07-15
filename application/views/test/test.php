<div class="col-md-12 col-sm-12 col-xs-12">
    <table id="ini_table" class="table table-striped table-bordered hidden" style="width:100%;">
        <thead>
            <tr>
                <th></th>
                <th>created_at</th>
                <th>entry_id</th>
                <th>field1</th>
            </tr>
        </thead>
        <tbody id="test">
        </tbody>
    </table>
    <div class="clearfix"></div>
</div>

<script src="<?php echo site_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script src="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script>
    $(document).ready(function () {
        $('#ini_table').DataTable();
        test();
    });
    var SITE_LOCAL = "<?php echo site_url()?>";

    function test() {
        var table = ''
        $('#test').html(table)
        $.ajax({
            url: SITE_LOCAL + 'assets/report_json/test.json',
            method: 'get',
            dataType: 'json',
            async: false,
            cache: false,
            success: function (feeds) {
                // console.log(feeds)
                hasil = feeds['channel']
                hasil2 = feeds['feeds']
                for (var i = 0; i < hasil2.length; i++) {
                    var beach = hasil2[i];
                    // console.log(beach['created_at'])
                    table +=
                        "<tr>" +
                        "<td></td>" +
                        "<td>" + beach['created_at'] + "</td>" +
                        "<td>" + beach['entry_id'] + "</td>" +
                        "<td>" + beach['field1'] + "</td>" +
                        "</td></tr>"
                }
                $('#test').html(table)
            }
        });
    }
</script>