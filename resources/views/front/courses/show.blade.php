
@extends('front.layout.master')
 @section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Course Details</h2>
                            <p>Homepage<span>/</span>Courses<span>/</span><span>{{$course->Category->name}}</span><span>{{$course->name}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{asset('uploads/courses/'.$course->img)}}" alt="">
                    </div>
                    
                    <div class="content_wrapper py-5">
                    <h4>course descreption</h4>
                      {!! $course->desc !!}
                    
                        </div>
                    </div>
                

            </div>
                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span class="color">{{$course->Trainer->name}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course price </p>
                                    <span>${{$course->price}}</span>
                                </a>
                            </li>
                           

                        </ul>
                        
                    </div>


    
                    <h4 class="title">enroll now</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your info</h6>
                               
                                @include('front.inc.errors')
                                
                                <form action="{{url('/message/enroll')}}" method="post">
                                    @csrf

                                    <input type="hidden" name="course_id" value="{{$course->id}}">

                                    <div class="form-group">
                                        <label for="my-input">Name:</label>
                                        <input id="my-input" class="form-control" type="text" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="my-input">Email:</label>
                                        <input id="my-input" class="form-control" type="text" name="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="my-input">Speciality:</label>
                                        <input id="my-input" class="form-control" type="text" name="spec">
                                    </div>
    
                                    <input class="btn_1 d-block" type="submit" value="Enroll the course">
                                </form>
                                
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

   


 @endsection('content')
