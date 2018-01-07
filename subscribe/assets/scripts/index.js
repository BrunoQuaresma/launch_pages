$('#subscribe-form').on('submit', function(event) {
  event.preventDefault();

  var form = this;
  var submitButton = $(this).find('button');

  submitButton.html('Fazendo inscrição...');
  submitButton.prop('disabled', true);

  $.post(form.action, { email: form.email.value }, function() {
    var subscribe_description = $('#subscribe-description');
    var subscribe_success = $('#subscribe-success');

    subscribe_description.addClass('d-none');
    subscribe_success.removeClass('d-none');

    document.cookie = "subscribe-tcc=true;domain=workshops.nucleoopcmg.com.br;path=/";
    window.location.href = 'http://www.workshops.nucleoopcmg.com.br/tcc-campeao'
  });
});
