@extends('layouts.frontend.index')
@section('content')
<!-- content start -->
    <div class="container-fluid p-0 home-content">
        <!-- banner start -->
        <div class="subpage-slide-blue">
            <div class="container">
                <h1>Revised Admission Policy for 2020</h1>
            </div>
        </div>
        <!-- banner end -->

        <!-- breadcrumb start -->
            <div class="breadcrumb-container">
                <div class="container">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('instructor.list') }}">IBA Notice Board</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Revised Admission Policy</li>
                  </ol>
                </div>
            </div>
        
        <!-- breadcrumb end -->
        
        <div class="container mt-5">
            <div class="row mt-4">
                <div class="col-xl-3 col-lg-4 col-md-5 d-none d-md-block" >
                    <div class="instructor-profile-box mx-auto" style="box-shadow: none; border: none;">
                        <main>
                            <img src="@if(Storage::exists($instructor->instructor_image)){{ Storage::url($instructor->instructor_image) }}@else{{ asset('backend/assets/images/course_detail_thumb.jpg') }}@endif">

                        </main>
                    </div>

                    
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                   
                    
                    
                    <div class="row">
                        <div class="col-12 text-center seperator-head mt-0" >
                            <p class="mt-3" style="text-align: left;"><b>June 17, 2020:</b> In the wake of COVID-19 constraints, the IBA Karachi has decided to overhaul the admission process for its undergraduate programs. The aptitude test scheduled for July 5, 2020 for BBA, BS Accounting & Finance, BS Economics and BS Social Sciences & Liberal Arts programs has been substituted with an Alternative Assessment Criteria.

The revised process includes shortlisting of candidates based on prior academic qualifications, co-curricular activities, social internships, achievements and the personal statements by the candidates. Announcing these policy changes, IBA Executive Director Dr. S Akbar Zaidi said that the quick movement and pragmatic changes are set out as a necessity to adhere to public health and safety guidelines issued by the government and for the safety of all stakeholders. The IBA Karachi aims to start the next academic year on time and therefore, all candidates are encouraged to apply for admission and complete all the requirements preferably before the deadline to avoid any inconvenience at the last moment.

</p>
                        </div>
                    </div>

                    <!-- course start -->
                    <div class="row">
                    @foreach($instructor->courses as $course)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="course-block mx-auto">
                            <a href="{{ route('course.view', $course->course_slug) }}">
                                <main>
                                    <img src="@if(Storage::exists($course->thumb_image)){{ Storage::url($course->thumb_image) }}@else{{ asset('backend/assets/images/course_detail_thumb.jpg') }}@endif">
                                    <div class="col-md-12"><h6 class="course-title">{{ $course->course_title }}</h6></div>
                                    
                                    <div class="instructor-clist">
                                        <div class="col-md-12">
                                            <i class="fa fa-chalkboard-teacher"></i>&nbsp;
                                            <span>Created by <b>{{ $course->first_name.' '.$course->last_name }}</b></span>
                                        </div>
                                    </div>
                                </main>
                                <footer>
                                    <div class="c-row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            @php $course_price = $course->price ? config('config.default_currency').$course->price : 'Free'; @endphp
                                            <h5 class="course-price">{{  $course_price }}&nbsp;<s>{{ $course->strike_out_price ? $course->strike_out_price : '' }}</s></h5>
                                        </div>
                                        <div class="col-md-5 offset-md-1 col-sm-5 offset-sm-1 col-5 offset-1">
                                            <star class="course-rating">
                                            @for ($r=1;$r<=5;$r++)
                                                <span class="fa fa-star {{ $r <= $course->average_rating ? 'checked' : '' }}"></span>
                                            @endfor
                                            </star>
                                        </div>
                                    </div>
                                </footer>
                             </a>   
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <!-- course end -->
                </div>
            </div>
        </div>
        
    <!-- content end -->
@endsection

@section('javascript')
<script type="text/javascript">
$(document).ready(function()
{
    $("#instructorForm").validate({
            rules: {
                full_name: {
                    required: true
                },
                email_id:{
                    required: true,
                    email:true
                },
                message:{
                    required: true
                }
            },
            messages: {
                full_name: {
                    required: 'This field is required.'
                },
                email_id: {
                    required: 'This field is required.',
                    email: 'Please enter valid Email ID'
                },
                message: {
                    required: 'This field is required.'
                }
            }
        });

});
</script>
@endsection