@extends('layouts.master')

@section('head')

    <link href="/assets/pages/css/style.css" rel="stylesheet">

@stop

@section('content')
<body dir="rtl" class="mirza">
<img src="/assets/pages/img/faq.jpg" alt="FAQ" class="img-responsive width100 m-b" >
<div class="absolute">
    	<h1 class="yellow text-right">الاسئلة المتكررة</h1>

</div>

<!-- Bootstrap FAQ - START -->
    <div class="panel-group" id="accordion">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">ما معنى ميادين؟</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    ميادين اسم يدل على تنوع المساحات الموجودة للتعلم
والوفرة في الفرص للتعلم. أيضا المفرد ميدان بمعنى
البقعة المعدة للسباق ونحن نقصد الاسراع في التعلم
لانه بين يديك وفي اي مكان فهيا نتعلم. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">كيف اسجل في ميادين؟</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    بشكل سهل يمكنك أن تسجل ببريدك الالكتروني أو عن
طريق حسابك في فيسبوك أو تويتر
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">ما هي الطرق التي يمكنني انا اشترك في
الدورات؟</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                  اذا رايت ان الدورة مفيدة لك وسعرها مناسب مع عليك
الا الضغط على اشترك وبعد اتمام عملية الدفع ستكون
في ملفك الشخصي وتكون قادر على البدء متى شئت
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">هل سأحصل على شهادة عند اتمام
الدورة؟</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                   نعم سيكون هناك شهادة تثبت أنك قد قمت باتمام
الدورة. ويمكنك ايضا تحميلها وطباعتها اذا شئت
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">ما هي طرق الدفع؟</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    حساب
PayPal
بطاقات ماستر وفيزا
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">كيف أصبح محاضر؟</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                   عند اتمام عملية التسجيل كعضو عادي ستكون قادر
على ان تصبح محاضر مع عليك الا الضغط على وصلة
كيف اصبح محاضرا؟ ثم سترى كل المعلمومات التي
تحتاجها ومن ضمنها اتمام بيانات الملف الشخصي
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">هل هناك تكلفة لعمل دورة معينة؟</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    لا . أي محاضرة تقوم برفعها تكون مجانية. في كل
عملية شراء ستحصل على 60 % من السعر كما موضح
في الشروط والأحكام لموقع ميادين
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">كيف استلم حصتي من البيع؟</a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                    عن طريق حسابك في
Paypal
أو البطاقة الائتمانية 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">ما هو السعر المناسب للدورة؟</a>
                </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
                <div class="panel-body">
                    يعتمد سعر الدورة على نوعها والجهد المبذول
والمعلومات الموجودة . ونحن نقترح أن يتراوح السعر بين
20 دولار الى 200 دولار في الدورات الكبيرة 
                </div>
            </div>
        </div>

        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">ما هي الشروط الاساسية لانشاء دورة
على موقع ميادين؟</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                   جدا سهلة وبامكانك الاطلاع على الشروط هنا . 
                </div>
            </div>
        </div>
		 <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1">ما دور ميادين لتسويق الدورات
والمحاضرين؟</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                   سيقوم موقع ميادين بنشر الدورات على حسابات
التواصل الاجتماعي
                </div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">هل يوجد تطبيق لميادين ؟</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
             حاليا لا يوجد ولكن سيكون ان شاء الله قريبا
                </div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">كيف أصبح محاضرا مميزا؟</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
             يعتمد على التقييم العام من المتعلمين وأيضا جزء من
تقييم ميادين بخصوص الجودة والمادة العليمة وعدد
الدورات
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">ما نوع الاجهزة ) كاميرا وميكروفون ، وبرامج
( أحتاج إلى إنشاء دورة ؟</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    لا توجد شروط لاي جهاز ما دام الجودة جيدة . وهنا
بعض الامور التي ستفيدك في هذا المجال.
                </div>
            </div>
        </div>
    </div>

@section('javascript')
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
  src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"
  integrity="sha256-JklDYODbg0X+8sPiKkcFURb5z7RvlNMIaE3RA2z97vw="
  crossorigin="anonymous"></script>
@stop

@stop