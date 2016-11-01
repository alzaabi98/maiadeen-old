@extends('layouts.master')

@section('head')

    
	<link href="/assets/pages/css/agency.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/pages/css/style.css" type="text/css">	
@stop

@section('content')

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
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/assets/pages/img/lec1.png" alt="">
                            </div>
                            <div class="timeline-panel animatedParent">
                               <div class="timeline-heading">
                                    <h3>المحاضر</h3>
									</div>
                                <div class="timeline-body">
                                    <p class="text-muted">هل بينات المحاضر كاملة من ناحية الصورة والسيرة الذاتية
والخبرات والشهادات ومعلمومات التواصل</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/assets/pages/img/title.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
							<div class="timeline-heading">
                                    <h3>العنوان
والموضوع</h3>
									</div>
                                <div class="timeline-body">
                                    <p class="text-muted">من المهم أن يكون الموضوع ذا قيمة وفائدة وأيضا أن
يتناسب العنوان والعنوانيين الفرعية مع الموضوع والفكرة</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/assets/pages/img/goal.png" alt="">
                            </div>
                            <div class="timeline-panel">
							<div class="timeline-heading">
                                    <h3>وضوح
الأهداف</h3>
									</div>
                                <div class="timeline-body">
                                    <p class="text-muted">يجب على المحاضر أن يوضح الأهداف والأفكار
والمهارات التي سيكتسبها المتعلم من الدورة</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/assets/pages/img/listen.png" alt="">
                            </div>
                            <div class="timeline-panel">
							<div class="timeline-heading">
                                    <h3>جودة التسجيل</h3>
									</div>
                                <div class="timeline-body">
                                    <p class="text-muted">التسجيل جزء لابد من النظر اليه مثل جودة الفيديو
والصوت وأيضا مكان التصوير وما يتعلق بذلك</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                            <img class="img-circle img-responsive" src="/assets/pages/img/courses.png" alt="">    
                            </div>
							<div class="timeline-panel">
							<div class="timeline-heading">
                                    <h3>بيانات الدورة</h3>
									</div>
							<div class="timeline-body">
                                    <p class="text-muted">أن يكون بينات الدورة كاملة من ناحية الصور والوصف و
والعناويين والصورة ويفضل أن يكون هناك عرض دعائي
لتوضيح الدورة</p>               
                                </div>
                                </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/assets/pages/img/rupee.png" alt="">
                            </div>
                            <div class="timeline-panel">
							<div class="timeline-heading">
                                    <h3>السعر</h3>
									</div>
                                <div class="timeline-body">
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
@stop

@stop