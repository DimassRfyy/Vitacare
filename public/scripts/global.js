$(() => {
  $('[data-expand]').on('click', function (e) {
    $(this).children('img').toggleClass('-rotate-180')
    let target = $(`#${$(this).data('expand')}`)
    target.slideToggle()
  })

  // Toggle manual payment details 
  $('input[name=payment_method]').on('change', function (e) {
    let manualTarget = $('#manualPaymentDetail');
    let digitalWalletTarget = $('#digitalWallet');

    if ($(this).is(':checked') && $(this).attr('id') == 'manualMethod') {
        manualTarget.show();
    } else {
        manualTarget.hide();
    }

    if ($(this).is(':checked') && $(this).attr('id') == 'digitalWalletMethod') {
        digitalWalletTarget.show();
    } else {
        digitalWalletTarget.hide();
    }
  })
})