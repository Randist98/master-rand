@extends('home.layout')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<header style="background-color:  rgb(79, 121, 95); width: 100%; height: 300px;">
    <h1 style="color: rgb(253, 254, 253); font-weight: bold; text-align: center; padding-top: 150px; font-size: 40px;">Zakat Calculator</h1>
</header>


<div class="container">
    <div class="row">
        <div class="col-lg-6">

            <form>


                <div class="form-group">
                    <h2 for="moneyType" style="color:  rgb(79, 121, 95); font-weight: bold; text-align: center; padding-top: 150px; font-size: 40px;">Type of Money:</h2>

                    <div class="list-unstyled" id="moneyType" style= "text-align: center; padding-top: 15px; ">


                        <label for="goldOption" class="amount js-amount">
                            <input type="radio" id="goldOption" name="moneyType" value="gold">
                            <span><i class="fa fa-coins" style="color: rgb(184,134,11); margin-right: 5px;font-size: 48px;"></i></span>
                        </label>


                        <label for="silverOption" class="amount js-amount">
                            <input type="radio" id="silverOption" name="moneyType" value="silver">
                            <span><i class="fa fa-coins" style="color: rgb(141, 173, 171); margin-right: 5px;font-size: 48px;"></i></span>
                        </label>

                        <label class="amount js-amount" for="cashOption">
                            <input class="form-check-input" type="radio" name="moneyType" id="cashOption"
                                value="cash">
                            <span><i class="fa fa-money"
                                    style="margin-right: 5px; font-size: 48px; color: rgb(79, 121, 95);"></i></span>
                        </label>


                    </div>
                </div>



                <div class="form-group" style= "text-align: center; padding-top: 15px; ">
                    <label for="amount">Amount of Savings:</label>
                    <input type="number" class="form-control" id="amount" style= "margin: auto; padding-top: 15px; width: 150px;">

                </div>
                <div class="form-group" style= "text-align: center; padding-top: 15px; ">

                    <button type="button" class="btn btn-primary" onclick="calculateZakat()" style= "margin: auto; padding-top: 15px; ">Calculate Zakat</button>

                </div>

            </form>

            <div id="result" class="mt-4"></div>
        </div>
        <div class="col-lg-5">
        <p>الزكاة (الجمع: زَكَوَات) في اللغة بمعنى: النماء والزيادة والبركة والمدح والثناء والصلاح وصفوة الشيء، والطهارة حسية أو معنوية، وبمعنى: زكاة المال. وتطلق الزكاة على ما ينفقه المتصدق من مال، وتستعمل في ديانات التوحيد بهذا المعنى الذي يقصد منه العبادة التي هي بمعنى: التصدق بالمال. والزَّكاةُ في الإسلام: المال اللازم إنفاقه في مصارفه الثمانية وفق شروط مخصوصة، وهي حق معلوم من المال، مقدر بقدر معلوم، يجب على المسلم بشروط مخصوصة، في أشياء مخصوصة هي: الأموال الزكوية، وزكاة الفطر. فهي في الشرع الإسلامي نوع من العبادات بمعنى: إنفاق المال على جهة الفرض، حيث تعد أحد أركان الإسلام الخمسة، وتطلق الصدقة على الإنفاق المفروض وغيره.

            وأما في الديانات الأخرى فيوجد ما يفيد معنى إنفاق المال، أو دفع قدر من المال إلى ذوي الاحتياجات، على اختلاف في تفاصيل الأحكام، وكذلك الاختلاف في مصطلحات التسمية، ففي المسيحية مثلا توجد كلمة صدقة. ويتفق الدين الإسلامي مع المسيحية واليهودية في المفهوم العام للصدقة، من حيث أنها عبادة وقربة يتقرب بها الإنسان إلى الله، وأنها باب من أبواب الخير، وأن على الأغنياء بذل قسط من مالهم للفقراء والمحتاجين وسد حاجاتهم، مع اختلافهم في تفاصيل الأحكام. والزَّكاةُ في الشرع الإسلامي: «حِصّةٌ من المال ونحوه يوجب الشرعُ بذلها للفقراءِ ونحوهم بشروط خاصة». أو هي: «اسم لمال مخصوص، يجب دفعه للمستحقين، بشروط مخصوصة». سميت زكاة؛ لأنها شرعت في الأموال الزكوية لتطهير المال، وفي زكاة الفطر لتطهير النفس، كما أن دفع الزكاة سبب لزيادة المال ونمائه، وسبب لزيادة الثواب في الآخرة بمضاعفته للمتصدق. وتسمى الزكاة صدقة، إلا أن الصدقة تشمل: الفرض والنفل، بخلاف الزكاة فإنها تختص بالفرض.

            وإيتاء الزكاة في الإسلام عبادة متعلقة بالمال، تعد ثالث أركان الإسلام الخمسة، وهي مفروضة بإجماع المسلمين، وفرضها بأدلة من الكتاب والسنة، وإجماع المسلمين، فمن القرآن ﴿وآتوا الزكاة﴾،  وَأَقِيمُوا الصَّلَاةَ وَآتُوا الزَّكَاةَ وَارْكَعُوا مَعَ الرَّاكِعِينَ  ، والأحاديث المستفيضة، مثل حديث: بُني الإسلام على خمس وذكر منها: إيتاء الزكاة. واقترنت الزكاة بالصلاة في القرآن في اثنين وثمانين آية، وهذا يدل على أن التعاقب بينهما في غاية الوكادة والنهاية كما في المناقب البزازية. وفرضت في مكة على سبيل الإجمال، وبينت أحكامها في المدينة في السنة الثانية للهجرة. وتجب الزكاة في مال، أو بدن، على الأغنياء بقدر معلوم تدفع في مصارف الزكاة الثمانية.

            والزكاة في الفقه الإسلامي تتضمن دراسة زكاة المال، وزكاة الفطر، والأموال الزكوية ومقاديرها وأحكامها، وتجب في النعم والذهب والفضة وفي أجناس من الزروع والثمار، وفي عروض التجارة والركاز والمعدن. والزكاة فريضة شرعية ذات نظام متكامل، يهدف لتحقيق مصالح العباد والبلاد والتكافل الاجتماعي، وسد حاجة المحتاجين، وإغناء الفقير. والزكاة هي الصدقة المفروضة، بقدر معلوم في المال، وهي إلزامية، وليست مساهمة خيرية، ولا تعتبر ضريبة، بل تختلف عنها، ولا خلاف في مقاديرها، وأحكامها إلا في مسائل فرعية قليلة، ويدفعها المزكي، أو من ينوبه للمستحقين، وإذا طلبها السلطان؛ لزم دفعها إليه، وتصرف في مصارف الزكاة. ولا تصرف للجمعيات الخيرية، ولا لبناء المساجد، وغير ذلك من الأعمال الخيرية. ومنع الزكاة سبب لتلف المال وضياعه والعقوبة في الآخرة، ومانعها مع اعتقاد وجوبها يأخذها السلطان منه، وإن كان بذلك خارجا عن قبضة الإمام؛ قاتله بحق الإسلام، ولا يخرجه ذلك عن الإسلام.</p>
        </div>
    </div>
</div>


<script>
    function calculateZakat() {
        var moneyType = document.querySelector('input[name="moneyType"]:checked').value;
        var amount = parseFloat(document.getElementById("amount").value);

        if (isNaN(amount)) {
            document.getElementById("result").innerHTML = "<p>Please enter a valid amount.</p>";
            return;
        }

        var zakatValue;

        if (moneyType.toLowerCase() === "gold" || moneyType.toLowerCase() === "silver") {
            var goldRate = 87.5;
            var silverRate = 612.4;
            var zakatRate = (moneyType.toLowerCase() === "gold") ? goldRate : silverRate;
            zakatValue = (amount / zakatRate) * 0.025;
        } else if (moneyType.toLowerCase() === "cash") {
            zakatValue = amount / 40;
        } else {
            document.getElementById("result").innerHTML = "<p>Please select a valid money type.</p>";
            return;
        }

        document.getElementById("result").innerHTML = "<p>Zakat Value: " + zakatValue.toFixed(2) + "</p>";
    }
</script>
@endsection
