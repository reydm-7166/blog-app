

$(document).ready(function(){

    let id = $('input#current_id').val();

    home_ajax(id);

    function home_ajax(id) {
        $.ajax({
            type: "GET",
            url: "/newsfeed/"+ id,
            dataType: "json",
            success: function (response) {
                $('#newsfeed_posts_container').html("");

                $.each(response.post_data, function (key, item) { 
                    let quote = "'";

                    // window.location.href =;
                    console.log(window.location.href);
        
                    $('#newsfeed_posts_container').append(
                        "<div id='posts' class='rounded light-gray-bg shadow p-3 ps-4 pb-4 mb-2 posts'>\
                            <div id='votes_container' class='d-inline-block align-top text-center'>\
                                <p class='font fw-bold'>Up</p> \
                                <p class='font' id='vote_count'></p>\
                                <p class='font fw-bold'>Down</p> \
                            </div>\
                            <div id='posts_container' class='d-inline-block'>\
                                <div id='post_author_info' class='d-flex'>\
                                    <div id='author_image' class='pe-2'>\
                                        <img src='/img/profile_picture.jpg' alt='aa' class='border rounded-circle border-0' id='profile_picture'>\
                                    </div>\
                                    \
                                    <div id='author_information' class='pt-1 ps-2'>\
                                        <small class='font fw-bold d-block fs-6'><a href='' class='text-dark hyperlink'>"+ item.first_name + " " + item.last_name +"</small></a>\
                                        <small class='font fw-light'>2h ago</small>\
                                    </div>\
                                    <div id='author_options' class='ms-auto d-flex align-items-center'>\
                                        <div class='btn-group' id='dropdown_options'><button type='button' class='btn btn-primary dropdown-toggle ms-5 dropdown-toggle-split' data-bs-toggle='dropdown' aria-expanded='false'>\
                                            <span class='visually-hidden'>Toggle Dropdown</span>\
                                            </button>\
                                            <ul class='dropdown-menu'>\
                                            <li><a class='dropdown-item' href='#'>Hide</a></li>\
                                            <li><a class='dropdown-item' href='#'>Report</a></li>\
                                            </ul>\
                                        </div>\
                                    </div>\
                                    \
                                </div>\
                                <div id='post_content' class='text-break p-2 post_content'>\
                                    <p>"+ item.post_content + "</p>\
                                </div>\
                                <div id='comment_share_button' class='p-2'>\
                                    share\
                                    comment\
                                    save\
                                </div>\
                            </div>\
                            \
                        </div>\
                        ") 
                        $(".hyperlink").attr("href", "/"+item.user_id+"/profile");
                });
            }
        });
    }

    $('.edit-cancel').click(function(){
        $('#edit_post_modal').hide();
    });

    $(document).on('click', '#edit_post', function(){
        var id = $(this).val();


        edit_modal(id);

        function edit_modal(id) {
            $('#edit_post_modal').show();

            $('#edit_post_modal').on('hidden.bs.modal', function(){
                $(this).find('form')[0].reset();
            });


            $.ajax({
                type: "get",
                url: "/edit-data/"+id,
                dataType: "json",
                success: function (response) {
                    $.each(response.post_data, function (key, item) { 
                        $('input[type=text]#input_post_title').val(item.post_content);
                        $('textarea#post_content').val(item.post_content);
                    });
                }
            });
        }
    });

    $(document).on('click', '#home', function(e){

        e.preventDefault();
        let id = $('input#current_id').val();

        

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        home_ajax(id);
    });   
});
