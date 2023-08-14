@extends('home.layout')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<header style="background-color:  rgb(79, 121, 95); width: 100%; height: 200px;">
    <h3 style="color: rgb(253, 254, 253); font-weight: bold; text-align: center; padding-top: 100px; font-size: 30px;">Quick Donation Form </h1>
</header>



<div class="col-lg-12 d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="{{ route('donation.store', ['id' => $id]) }}" method="POST" class="bg-white p-5 rounded donation-form" data-aos="fade-up" style="width: 70%;">
        @csrf
        <div class="form-field mb-3">
            <label for="amount-1" class="amount js-amount" data-value="1.00">
                <input type="radio" id="amount-1" name="radio-amount" onclick="updateAmount(1.00)">
                <span>$1</span>
            </label>

            <label for="amount-2" class="amount js-amount" data-value="5.00">
                <input type="radio" id="amount-2" name="radio-amount" onclick="updateAmount(5.00)">
                <span>$5</span>
            </label>
            <label for="amount-3" class="amount js-amount" data-value="25.00">
                <input type="radio" id="amount-3" name="radio-amount" onclick="updateAmount(25.00)">
                <span>$25</span>
            </label>
            <label for="amount-4" class="amount js-amount" data-value="100.00">
                <input type="radio" id="amount-4" name="radio-amount" onclick="updateAmount(100.00)">
                <span>$100</span>
            </label>

            <div class="field-icon">
                <span>$</span>
                <input type="text" placeholder="0.00" class="form-control px-4" name="amountPaymnt"
                    style="border-color: rgb(79, 121, 95);" value="1.00" id="donation-amount">
            </div>

            <div class="field-icon">
                <span><i class="far fa-user"></i></span>
                <input type="text" placeholder="Name on Visa Card" class="form-control px-4" name="nameOnCard" style="border-color: rgb(79, 121, 95);" id="card-name">
            </div>

            <div class="field-icon">
                <span><i class="far fa-credit-card"></i></span>
                <input type="text" placeholder="Card Number" class="form-control px-4" name="cardNumber" style="border-color: rgb(79, 121, 95);" id="card-number">
            </div>

            <div class="field-icon">
                <span><i class="far fa-calendar-alt"></i></span>
                <input type="text" placeholder="Expiration Date (MM/YY)" class="form-control px-4" name="expDate" style="border-color: rgb(79, 121, 95);" id="expiration-date-input" maxlength="7">
            </div>

            <div class="field-icon">
                <span><i class="fas fa-lock"></i></span>
                <input type="text" placeholder="CCV" class="form-control px-4" name="CCV" style="border-color: rgb(79, 121, 95);" id="ccv-input" maxlength="3">
            </div>


            <button type="submit" class="btn btn-secondary">Donate Now</button>
        </div>
    </form>

</div>




{{-- js links  --}}


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/tiny-slider.js') }}"></script>
<script src="{{ asset('js/flatpickr.min.js') }}"></script>
<script src="{{ asset('js/glightbox.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/navbar.js') }}"></script>
<script src="{{ asset('js/counter.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>
    function updateAmount(amount) {
        document.getElementById("donation-amount").value = amount.toFixed(2);
    }
</script>

{{-- icons card input  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

{{-- card number --}}
<script>
    const cardNumberInput = document.getElementById('card-number');
    cardNumberInput.addEventListener('input', function() {
        let trimmedValue = this.value.replace(/-/g, ''); // Remove existing dashes
        trimmedValue = trimmedValue.replace(/\s/g, ''); // Remove existing spaces
        let formattedValue = '';
        for (let i = 0; i < trimmedValue.length; i++) {
            if (i > 0 && i % 4 === 0) {
                formattedValue += '-';
            }
            formattedValue += trimmedValue.charAt(i);
        }
        this.value = formattedValue;

        if (formattedValue.length > 19) {
            this.value = formattedValue.slice(0, 19); // Limit to 16 characters (including dashes)
        }
    });
</script>

{{-- EXP date  --}}

<script>
    const expirationDateInput = document.getElementById('expiration-date-input');

    expirationDateInput.addEventListener('input', function(e) {
        let inputValue = e.target.value;
        inputValue = inputValue.replace(/[^\d]/g, ''); // Remove any non-digit characters

        if (inputValue.length > 2) {
            inputValue = inputValue.slice(0, 2) + '/' + inputValue.slice(2, 4);
        }

        e.target.value = inputValue;
    });
</script>

@endsection
