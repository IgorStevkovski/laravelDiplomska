/**
 * Created by Igor on 26.04.2017.
 * //za koga gore ke se prati na Stripe, da ne se prodolzi so post-anje na podatocite od formata na Laravel
 //posto treba prvo stripe da ni vrati token, a i ne sme ja validirale formata uste
 */
Stripe.setPublishableKey('pk_test_TxepjB4Qu2FgR2FffZ4o8tra');

var $form = $('#checkout-form');

$form.submit(function(event){
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);

    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);

    return false;
});

function stripeResponseHandler(status, response){
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    }
    else{
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken"/>').val(token));

        //Submit the form
        $form.get(0).submit();
    }
}

