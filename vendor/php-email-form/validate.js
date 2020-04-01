jQuery(document).ready(function($) {
  "use strict";

  //Contact
  $('form.php-email-form').submit(function() {

    var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    //  $("input[name*='send_msg']").remove();
      $('.sent-message').hide();
      //$('.error-message').hide();
      //$('#modal-warning').removeClass('hide');
      //$('.frame-error').css("display","initial");
      //$('body').css("overflow", "hidden");
      //setTimeout(function(){ location.reload(); }, 8000);//5 seconds

    f.children('input').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;

          case 'email':
            if (!emailExp.test(i.val())) {
              ferror = ierror = true;
            }
            break;

          case 'checked':
            if (! i.is(':checked')) {
              ferror = ierror = true;
            }
            break;

          case 'regexp':
            exp = new RegExp(exp);
            if (!exp.test(i.val())) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validate').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    f.children('textarea').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validate').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    //if (ferror) return false;
    var str = $(this).serialize();

    var this_form = $(this);
    var action = $(this).attr('action');

    if( ! action ) {
      this_form.find('.loading').slideUp();
      this_form.find('.error-message').slideDown().html('The form action property is not set!');
      return false;
      }

    this_form.find('.sent-message').slideUp();
    this_form.find('.error-message').slideUp();
    this_form.find('.loading').slideDown();


    $.ajax({
      type: "POST",
      url: action,
      data: str,
      success: function(msg) {
        $('.center .loading').hide();
        if (msg == 'OK') {
          this_form.find('.loading').slideUp();
          this_form.find('.sent-message').slideDown();
          this_form.find("input:not(input[type=submit]), textarea").val('');
          $("#name").attr("readonly","readonly");
          //('.sent-message-img').css("display", "initial");
          //$('.center .sent-message').css("display", "initial");
        } else {
          this_form.find('.loading').slideUp();
          this_form.find('.error-message').slideDown().html(msg);
          $('.error-message').html(msg);
          $(".readmore").attr('value', 'Riprova');
          //$('.error-message-img').css("display", "initial");
          //$('.center .error-message').css("display", "initial");
        }
      }
    });
    return false;


  });


  //Oxygen Code Project
  $('form.php-newsletter-form').submit(function() {
    var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

      $(".subscribe-area").fadeOut();
      $('#modal-warning').removeClass('hide');
      $('.frame-error').css("display","initial");
      $('body').css("overflow", "hidden");
      setTimeout(function(){ location.reload(); }, 8000);//5 seconds


    if (ferror) return false;
    else var str = $(this).serialize();

    var this_form = $(this);
    var action = $(this).attr('action');

    if( ! action ) {
      this_form.find('.loading').slideUp();
      this_form.find('.error-message').slideDown().html('The form action property is not set!');
      return false;
    }



    $.ajax({
      type: "POST",
      url: action,
      data: str,
      success: function(msg) {
        $('.loading').hide();
        if (msg == 'OK') {

          $('.sent-message-img').show();
          $('.error-message-img').hide();
          $('.sent-message').show();
          $('.error-message').hide();
        } else {
          $('.sent-message-img').hide();
          $('.error-message-img').show();
          $('.error-message').html(msg);
          $('.error-message').show();
          $('.sent-message').hide();
        }
      }
    });
    return false;
  });

  $( "#close" ).click(function() {
  $('#modal-warning').addClass('hide');
  $('body').css("overflow", "initial");
  location.reload();
});




});
