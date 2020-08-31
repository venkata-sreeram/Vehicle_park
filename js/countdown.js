/*------------------
        CountDown
    --------------------*/
	$("#countdown").countdown("2020/12/04", function(event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hours</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Minutes</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Seconds</p> </div>"));
    });

    $("#countdown-2").countdown("2020/12/04", function(event) {
        $(this).html(event.strftime("<div class='cd-time'><span>%w</span> <p>Week</p> </div>" + "<div class='cd-time'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-time'><span>%H</span> <p>Hours</p> </div>" + "<div class='cd-time'><span>%M</span> <p>Minutes</p> </div>" + "<div class='cd-time'><span>%S</span> <p>Seconds</p> </div>"));
    });

    /*------------------
        About Counter Up
    --------------------*/
    $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
        Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
            $(this).text(Math.ceil(now));
            }
        });
    });
