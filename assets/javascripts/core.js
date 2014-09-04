function load_mnh_data(base_url,parameter){
    $.ajax({
        async: false,
        url: base_url+'home/get_git_data/'+parameter,
        beforeSend: function(xhr) {
            xhr.overrideMimeType("text/plain; charset=x-user-defined");
        },
        success: function(data) {
            //console.log(data);
            fork=0;
            obj = jQuery.parseJSON(data);
            mnh_div = $('#mnh_data_'+parameter+' .inner');

            switch(parameter){
                case 'commits':
                    $('#mnh_data_latest_commits .inner').append('<p><span class="date"><i class="fa fa-github-alt"></i>'+moment(obj[0].commit.author.date).fromNow()+'</span><span class="author"> '+obj[0].commit.author.name+'</span></p>');
                    $.each(obj, function(k, v) {
                        mnh_div.append('<p><span class="hash"><i class="fa fa-git"></i>'+v.sha+'</span><span class="date">'+moment(v.commit.author.date).fromNow()+'</span><span class="author"> '+v.commit.author.name+'</span></p>');
                    });
                    break;
                case 'tags':
                    $.each(obj, function(k, v) {
                        mnh_div.append('<p class="list-item"><span class="name"><i class="fa fa-tag"></i>'+v.name+'</span></p>');
                    });
                    break;
                case 'forks':
                    $.each(obj, function(k, v) {
                        fork++;

                    });
                    break;
            }
            $('#fork_count').append(fork);


        }
    });
}

function load_files(base_url,latest){
    $.ajax({
        async: false,
        url: base_url+'file/load_files/'+latest,
        beforeSend: function(xhr) {
            xhr.overrideMimeType("text/plain; charset=x-user-defined");
        },
        success: function(data) {
            //console.log(data);
            obj = jQuery.parseJSON(data);
            $.each(obj, function(k, v) {
                $.each(v, function(k, value) {
                    name = value['name'];
                    if(name=='false'){
                        name='No Document Found!';
                    }
                    else{
                    }
                    $(value.div).append('<p class="list-item"><span>'+name+'</span><span class="size">'+numeral(value.size).format("0.0 b")+'</span><span class="date">'+moment(value['date']).fromNow()+'</span></p>');
                    $(value.div).parent().parent().attr('data-url',base_url+value.server_path);


                });
            });


        }
    });
}

function get_table_count(base_url,total){
    $.ajax({
        async: false,
        url: base_url+'database/get_tables/'+total,
        beforeSend: function(xhr) {
            xhr.overrideMimeType("text/plain; charset=x-user-defined");
        },
        success: function(data) {
            //console.log(data);
            obj = jQuery.parseJSON(data);
            $('#table_count').append('<p class="list-item"><span><i class="fa fa-table"></i>'+data+'</span></p>')


        }
    });
}
