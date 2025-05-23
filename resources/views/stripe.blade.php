<!DOCTYPE html>
<html>

<head>
    <title>Laravel - Stripe Payment Gateway Integration Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Laravel - Stripe Payment Gateway Integration Example</h1>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <h3 class="panel-title">Payment Details</h3>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            @csrf
                            <div class="form-row row">
                                <div class="col-xs-12 form-group required">
                                    <label class="control-label">Name on Card</label>
                                    <input class="form-control" size="4" type="text" required>
                                </div>
                            </div>

                            <div class="form-row row">
                                <div class="col-xs-12 form-group card required">
                                    <label class="control-label">Card Number</label>
                                    <input autocomplete="off" class="form-control card-number" size="20" type="text" required>
                                </div>
                            </div>

                            <div class="form-row row">
                                <div class="col-xs-12 col-md-4 form-group cvc required">
                                    <label class="control-label">CVC</label>
                                    <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text" required>
                                </div>
                                <div class="col-xs-12 col-md-4 form-group expiration required">
                                    <label class="control-label">Expiration Month</label>
                                    <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text" required>
                                </div>
                                <div class="col-xs-12 col-md-4 form-group expiration required">
                                    <label class="control-label">Expiration Year</label>
                                    <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text" required>
                                </div>
                            </div>

                            <div class="form-row row">
                                <div class="col-md-12 error form-group hide">
                                    <div class="alert-danger alert">Please correct the errors and try again.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                                </div>
                            </div>
                            <input type="hidden" name="stripeToken" id="stripeToken" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                                     'input[type=text]', 'input[type=file]',
                                     'textarea'].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                // Si la carte n'est pas déjà enregistrée
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();  // Empêcher l'envoi du formulaire avant d'obtenir le token Stripe

                    var stripe = Stripe($form.data('stripe-publishable-key'));
                    stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }).then(function(result) {
                        if (result.error) {
                            // Si Stripe renvoie une erreur, afficher un message d'erreur
                            console.log(result.error.message); // Ajouter un log pour la détection d'erreurs
                            $('.error')
                                .removeClass('hide')
                                .find('.alert')
                                .text(result.error.message);
                        } else {
                            // Si tout se passe bien, ajouter le token au formulaire et le soumettre
                            var token = result.token.id;
                            $('#stripeToken').val(token);
                            console.log("Token généré avec succès : ", token); // Log du token pour vérifier
                            $form.get(0).submit();  // Soumettre le formulaire après avoir ajouté le token
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
