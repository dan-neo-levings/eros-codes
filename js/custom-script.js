(function($) {
    $(function() {
        if(window.innerWidth >= 740) {
            var tempHeight = 0;

            $('.featured-title').each(function() {
                if($(this).height() > tempHeight) {
                    tempHeight = $(this).height();
                }

                $(this).height(tempHeight);
            })

            tempHeight = 0;

            $('.popular-title').each(function() {
                if($(this).height() > tempHeight) {
                    tempHeight = $(this).height();
                }

                $(this).height(tempHeight);
            });
        }

        $('body').css('padding-top', $('.subscribe-banner').innerHeight());
        $('.remove-banner').on('click', function() {
            $('.subscribe-banner').css('top', '-100%');
            $('body').css('padding-top', '0px');
        });

        $(window).on('resize', resize);
        $(window).on('scroll', scroll);
        resize();
        scroll();

        function resize() {
            
            $('body').css('padding-top', $('.subscribe-banner').innerHeight());

            $('.fit-parent').each(function() {
                console.log($(this));
                var parentHeight = $(this).parent().height();
                var parentWidth = $(this).parent().width();

                if(parentHeight > $(this).height()) {
                    $(this).css({
                        width: 'auto',
                        height: '100%'
                    })
                } else {
                    $(this).css({
                        width: '100%',
                        height: 'auto'
                    })
                }
            });

            $('.window-height').each(function() {
                $(this).height(window.innerHeight);
            })
        }


        function scroll() {
            $('.fixed-on-scroll').each(function() {
                if(typeof $(this).attr('data-top') == 'undefined') {
                    $(this).attr('data-top', $(this).offset().top);
                }
                if($(window).scrollTop() < $(this).attr('data-top')) {
                    $(this).css({
                        position: 'absolute',
                        bottom: 'auto',
                        top: '0'
                    })
                } else if($(window).scrollTop() + $(this).height() > $('.recent-images').offset().top) {
                    $(this).css({
                        position: 'absolute',
                        bottom: '0',
                        top: 'auto'
                    })
                } else {
                    $(this).css({
                        position: 'fixed',
                        bottom: 'auto',
                        top: '0'
                    })
                }
            })
        }

        $('.responsive-switch-button').on('click', function() {
            $('aside').addClass('show');
            $(this).addClass('show');
        })
    });

})(jQuery)