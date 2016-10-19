@extends('layouts.master')

@section('head')

    <link rel="stylesheet" href="/assets/pages/css/animations.css" type="text/css">
	<link href="/assets/pages/css/agency.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/pages/css/style.css" type="text/css">	
@stop

@section('content')

<body dir="rtl" class="mirza">
 <img src="/assets/pages/img/rules.jpg" class="img-responsive" width="100%">    
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<div class="page-header">
						<h1 class="yellow text-right">شروط الجودة</h1>
					</div>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image animatedParent">
                                <img class="img-circle img-responsive animated rotateIn" src="/assets/pages/img/lec1.png" alt="">
                            </div>
                            <div class="timeline-panel animatedParent">
                               <div class="timeline-heading animated fadeInLeft">
                                    <h3>المحاضر</h3>
									</div>
                                <div class="timeline-body animated fadeInLeft">
                                    <p class="text-muted">هل بينات المحاضر كاملة من ناحية الصورة والسيرة الذاتية
والخبرات والشهادات ومعلمومات التواصل</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image animatedParent">
                                <img class="img-circle img-responsive animated rotateIn" src="/assets/pages/img/title.jpg" alt="">
                            </div>
                            <div class="timeline-panel animatedParent ">
							<div class="timeline-heading animated fadeInRight">
                                    <h3>العنوان
والموضوع</h3>
									</div>
                                <div class="timeline-body animated fadeInRight">
                                    <p class="text-muted">من المهم أن يكون الموضوع ذا قيمة وفائدة وأيضا أن
يتناسب العنوان والعنوانيين الفرعية مع الموضوع والفكرة</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image animatedParent">
                                <img class="img-circle img-responsive animated rotateIn" src="/assets/pages/img/goal.png" alt="">
                            </div>
                            <div class="timeline-panel animatedParent">
							<div class="timeline-heading animated fadeInLeft">
                                    <h3>وضوح
الأهداف</h3>
									</div>
                                <div class="timeline-body animated fadeInLeft">
                                    <p class="text-muted">يجب على المحاضر أن يوضح الأهداف والأفكار
والمهارات التي سيكتسبها المتعلم من الدورة</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image animatedParent">
                                <img class="img-circle img-responsive animated rotateIn" src="/assets/pages/img/listen.png" alt="">
                            </div>
                            <div class="timeline-panel animatedParent">
							<div class="timeline-heading animated fadeInRight">
                                    <h3>جودة التسجيل</h3>
									</div>
                                <div class="timeline-body animated fadeInRight">
                                    <p class="text-muted">التسجيل جزء لابد من النظر اليه مثل جودة الفيديو
والصوت وأيضا مكان التصوير وما يتعلق بذلك</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image animatedParent">
                            <img class="img-circle img-responsive animated rotateIn" src="/assets/pages/img/courses.png" alt="">    
                            </div>
							<div class="timeline-panel animatedParent">
							<div class="timeline-heading animated fadeInLeft">
                                    <h3>بيانات الدورة</h3>
									</div>
							<div class="timeline-body animated fadeInLeft">
                                    <p class="text-muted">أن يكون بينات الدورة كاملة من ناحية الصور والوصف و
والعناويين والصورة ويفضل أن يكون هناك عرض دعائي
لتوضيح الدورة</p>               
                                </div>
                                </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image animatedParent">
                                <img class="img-circle img-responsive animated rotateIn" src="/assets/pages/img/rupee.png" alt="">
                            </div>
                            <div class="timeline-panel animatedParent">
							<div class="timeline-heading animated fadeInRight">
                                    <h3>السعر</h3>
									</div>
                                <div class="timeline-body animated fadeInRight">
                                    <p class="text-muted">السعر أيضا يجب أن يكون مناسب للمتعلم وأن يكون
متناسب مع الجهد والمعلومات الموجودة في الدورة .</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@section('javascript')
	<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
	    <script
	  src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"
	  integrity="sha256-JklDYODbg0X+8sPiKkcFURb5z7RvlNMIaE3RA2z97vw="
	  crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src='/assets/pages/js/css3-animate-it.js'></script>
@stop

@stop