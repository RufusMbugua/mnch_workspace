<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/slick/dist/slick.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/moment/moment.js"></script>
<script src="<?php echo base_url();?>assets/javascripts/core.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/numeral/numeral.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/nprogress/nprogress.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/headroom.js/dist/headroom.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/headroom.js/dist/jQuery.headroom.js"></script>

<script>
    $(document).ready(function(){
        var base_url = '<?php echo base_url();?>';
        load_mnh_data(base_url,'commits');
        load_mnh_data(base_url,'tags');
        load_mnh_data(base_url,'forks');
        load_files(base_url,1);
        load_files(base_url,0);
        get_table_count(base_url,0);


        $('.widget-small').click(function(){
            url = $(this).attr('data-url');
            if(url!=null){
                window.open(url);
            }

        });
        $('a:contains("<?php echo $title; ?>")').parent().addClass('active');

        /*$("#header").headroom({
            // vertical offset in px before element is first unpinned
            offset : 0,
            // scroll tolerance in px before state changes
            tolerance : 0,
            // or you can specify tolerance individually for up/down scroll
            tolerance : {
                up : 5,
                down : 0
            },
            // css classes to apply
            classes : {
                // when element is initialised
                initial : "headroom",
                // when scrolling up
                pinned : "headroom--pinned",
                // when scrolling down
                unpinned : "headroom--unpinned",
                // when above offset
                top : "headroom--top",
                // when below offset
                notTop : "headroom--not-top"
            },
            // callback when pinned, `this` is headroom object
            onPin : function() {},
            // callback when unpinned, `this` is headroom object
            onUnpin : function() {},
            // callback when above offset, `this` is headroom object
            onTop : function() {},
            // callback when below offset, `this` is headroom object
            onNotTop : function() {},
        });

      x
        $("#header").headroom({
            "tolerance": 5,
            "offset": 0,
            "classes": {
                "initial": "animated",
                "pinned": "slideDown",
                "unpinned": "slideUp",
                "top": "headroom--top",
                "notTop": "headroom--not-top"
            }
        });*/
    });
</script>
