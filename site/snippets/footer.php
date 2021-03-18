 <!--Wrapper-->
 <a id="scroll-wrapper" href="">
        <!--Scroll Content-->
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
    </a>
    <script type="text/javascript">
        var $a = $('#scroll-wrapper'),
            $s = $('.slide');
        $(document).ready(function() {
            var h = $(window).height(),
                w = $(window).width();
            $('.project').each(function() {
                var $t = $(this).find('.thumbnail'),
                    th = $t.find('.thumb').data('h'),
                    tw = $t.find('.thumb').data('w');
                if ((h / w * 100) <= (th / tw * 100)) {
                    $t.addClass('horizontal');
                } else {
                    $t.addClass('vertical');
                }
            });
        });
        $(window).on('resize', function() {
            var h = $(window).height(),
                w = $(window).width();
            $('.project').each(function() {
                var $t = $(this).find('.thumbnail'),
                    th = $t.find('.thumb').data('h'),
                    tw = $t.find('.thumb').data('w');
                if ((h / w * 100) <= (th / tw * 100)) {
                    $t.removeClass('vertical').addClass('horizontal');
                } else {
                    $t.removeClass('horizontal').addClass('vertical');
                }
            });
        });
        //Scroll Functions
        $(window).scroll(function() {
            if ($(window).width() > 600 && $(window).scrollTop() > $(window).height() * 2.5) {
                $('#top').css('opacity', '1');
                $('#top').css('pointer-events', 'all');
            } else {
                $('#top').css('opacity', '0');
                $('#top').css('pointer-events', 'none');
            }
        });
        $a.scroll(function() {
            /*Project Link*/
            var h = $a.height(),
                w = $a.width(),
                url = $('.project.active .thumbnail').attr('href');
            $a.attr('href', url);
            $s.each(function(i) {
                /*Slides*/
                var $s = $(this),
                    sh = $s.height(),
                    ss = $s.position().top,
                    sD = 100 - ss / sh * -100;
                /*Projects*/
                var $p = $('.project').eq(i),
                    $t = $p.find('.thumbnail');
                if (0 >= ss && sh >= -ss - 1) {
                    $p.addClass('active');
                    if ($t.hasClass('pan-x')) {
                        $t.width(sD + 'vw').height(h);
                    } else if ($t.hasClass('pan-y')) {
                        $t.width(w).height(sD + 'vh');
                    } else {
                        if ($t.hasClass('horizontal')) {
                            $t.width(sD + 'vw').height(sD + 'vw');
                        } else if ($t.hasClass('vertical')) {
                            $t.width(sD + 'vh').height(sD + 'vh');
                        }
                    }
                    if ($p.find('video').length) {
                        $p.find('video')[0].play();
                    }
                } else {
                    $p.removeClass('active');
                    if ($p.find('video').length) {
                        $p.find('video')[0].pause();
                    }
                }
            });
            if ($('.last').hasClass('active')) {
                $('#top').addClass('active');
            } else {
                $('#top').removeClass('active');
            }
        });
        $(window).on("load", function() {
            /*if(Cookies.get('Scroll')){
                 $("#loading").fadeOut(function(){
                     $(this).remove();
                 });
            }*/
            $('.poster').next('video').show(0, function() {
                $('.poster').remove();
            });
        });
    </script>
     <!--Back to top-->
     <div id="top">
        <span>[ <span></span> <span></span> ]</span>
    </div>
 
 <footer>
        <!--Newsletter-->
        <form id="newsletter" action="https://studio.us7.list-manage.com/subscribe/post?u=5128b9775807e61869e0184d6&amp;id=236a6ccc39" autocomplete="off" method="post" name="mc-embedded-subscribe-form" target="_blank" validate>
            <label for="newsletter-email">
              <span>SUBSCRIBE TO OUR </span>NEWSLETTER:
          </label>
            <input id="newsletter-email" type="email" name="EMAIL" placeholder="ENTER YOUR EMAIL" required spellcheck="false">
            <button id="newsletter-submit" type="submit" name="subscribe">[ SUBMIT ]</button>
        </form>
        <!--Instagram-->
        <a href="https://www.instagram.com/reisingerandres/" target="_blank" rel="noreferrer">
          INSTAGRAM
      </a>
        <!--Copyright-->
        <wrap>
            ©2021 REISINGER STUDIO
        </wrap>
        <!--Contact-->
        <div>
            <!--Link Address-->
            <a href="https://www.google.com/maps/place/Carrer+de+Llull,+70,+08005+Barcelona,+Espa%C3%B1a/data=!4m2!3m1!1s0x12a4a31a0e4bb789:0xeb580f9a9aca91d8?sa=X&ved=2ahUKEwiY8bvT5aLuAhUBDmMBHR0mBT4Q8gEwAHoECAMQAQ" target="_blank" rel="noreferrer">
              C/ LLULL 70. <br>08005 BARCELONA, SPAIN </a>
            <!--Mail-->
            <a href="mailto:info@reisinger.studio">
              INFO@REISINGER.STUDIO </a>
        </div>
        <!--Credits-->
        <div>
            <a href="https://www.querida.si/" target="_blank" rel="noreferrer">
                <span>DESIGN</span> <span>QUERIDA</span></a>
            <span>/</span>
            <a href="http://carlosmayo.info/" target="_blank" rel="noreferrer">
                <span>CODE</span> <span>CARLOS MAYO</span></a>
        </div>
    </footer>



<?= js('assets/js/libs.js') ?>
<?= js('assets/js/main.js', ['async' => false, 'defer' => true ]) ?>
</body>

</html>