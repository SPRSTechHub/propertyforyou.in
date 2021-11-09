<style>
.figure {
    margin-bottom: 0 !important;
}
</style>
<!-- START SECTION USER PROFILE -->
<section class="user-page section-padding " style="margin-top: 0px;padding-top: 0px;">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2">

                <div class="my-properties m-5">
                    <!-- Posts List -->
                    <table class="table-responsive" id='postsList'>
                        <thead>
                            <tr>
                                <th nowrap>Images</th>
                                <th nowrap>House Details</th>
                                <th nowrap>Date Added</th>
                                <th nowrap>City</th>
                                <th nowrap>Price</th>
                                <th nowrap>Purpose</th>
                                <th nowrap>Status</th>
                                <th nowrap>Actions</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    <!-- Paginate -->
                    <div class="pagination-container">
                        <nav>
                            <ul class="pagination" id='paginations'>
                                <li class="page-item"><a class="btn btn-common" href="#"><i
                                            class="lni-chevron-left"></i> Previous </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="btn btn-common" href="#">Next <i
                                            class="lni-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div style='margin-top: 10px;' id='pagination'></div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END SECTION USER PROFILE -->

<script type='text/javascript'>
$(document).ready(function() {
    $('#pagination').on('click', 'a', function(e) {
        e.preventDefault();
        var pageno = $(this).attr('data-ci-pagination-page');
        loadPagination(pageno);
    });

    loadPagination(0);

    // Load pagination
    function loadPagination(pagno) {
        $.ajax({
            url: '<?=base_url()?>SQLTable/loadRecord/' + pagno,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                $('#pagination').html(response.pagination);
                createTable(response.result, response.row);
            }
        });
    }



    // Create table list
    function createTable(result, sno) {
        var uri = 'https://propertyforyou.in/uploads/';
        sno = Number(sno);
        $('#postsList tbody').empty();
        for (index in result) {
            var id = result[index].id;
            var house_id = result[index].house_id;
            var house_name = result[index].house_name;
            house_name = house_name.substr(0, 60) + " ...";
            var userid = result[index].userid;
            var images = result[index].house_imges;
            var address = result[index].address;
            var rating = result[index].house_rating;
            var city = result[index].city;
            var price = result[index].price;
            var purpose = result[index].purpose;
            var date = result[index].date;
            var status = result[index].status;

            sno += 1;

            var tr = "<tr>";
            //  tr += "<td><h4>" + sno + "</h4></td>";
            tr += '<td class="image myelist">';
            tr +=
                '<a href = "#" class="el_mdl" id="' + house_id +
                '" ><img alt = "my-properties" src="';
            tr += uri + images + '" class="img-fluid"></a> </td>';
            tr += '<td><div class="inner"><h2>' + house_name +
                '</h2> <figure><i class="fas fa-map-marker-alt"></i>' +
                address + '</figure><figure> <ul class="starts text-left mb-0" >' + rating +
                '</ul></figure>';
            tr += "<td>" + date + "</td>";
            /* tr += "<td><a href='" + userid + "' target='_blank' >" + house_id + "</a></td>";*/
            tr += "<td>" + city + "</td>";
            tr += "<td>" + price + "</td>";
            tr += "<td>" + purpose + "</td>";
            tr += "<td>" + status + "</td>";
            tr += '<td class="actions"><a href="' + '<?=base_url();?>' + 'home/post/' + house_id +
                '" class="edit">Modify <i class="far fa-edit"></i></a></td>';
            tr += "</tr>";
            $('#postsList tbody').append(tr);
        }
    }
});
</script>