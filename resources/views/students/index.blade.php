@extends('layouts.backend.index')
@section('content')


<!-- content start -->
    <div class="container-fluid p-0 home-content">

<div class="page-header">
  <h1 class="page-title">Dashboard</h1>
</div>
<div class="page-content container-fluid">
    <div class="row">
    <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block p-30 bg-red-600">
            <div class="card-watermark darker font-size-80 m-15"><i class="fa fa-chalkboard" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{ $count_enrolled[0]->count_enrolled ? $count_enrolled[0]->count_enrolled : '0' }}</span>
                <span class="counter-number-related text-capitalize">Courses Enrolled</span>
              </div>
              <div class="counter-label text-capitalize">This Semester</div>
            </div>
          </div>
          <!-- End Card -->
        </div>

        <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block p-30 bg-blue-600">
            <div class="card-watermark darker font-size-80 m-15"><i class="fas fa-bullhorn" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{round($gpa,2)}}</span>
                <span class="counter-number-related text-capitalize">GPA</span>
              </div>
              <div class="counter-label text-capitalize">This Semester</div>
            </div>
          </div>
          <!-- End Card -->
        </div>

        <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block p-30 bg-green-600">
            <div class="card-watermark darker font-size-60 m-15"><i class="far fa-play-circle" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{ round($cgpa,2) }}</span>
                <span class="counter-number-related text-capitalize">CGPA</span>
              </div>
              <div class="counter-label text-capitalize">overall</div>
            </div>
          </div>
          <!-- End Card -->
        </div>
    </div>
    <div class="subpage-slide-Courses">
            <div class="container">
                <h1>My Courses</h1>
                @foreach($courses as $course)
                  @if($course->isCompleted == 0)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="course-block mx-auto">
                        <a href="{{ route('course.learn', $course->course_slug) }}" class="c-view">
                            <main>
                                <div class="col-md-12"><h6 class="course-title">{{ $course->course_title }}</h6></div>
                                
                                <div class="instructor-clist">
                                    <div class="col-md-12">
                                        <i class="fa fa-chalkboard-teacher"></i>&nbsp;
                                        <span>Instructor <b>{{ $course->first_name.' '.$course->last_name }}</b></span>
                                    </div>
                                </div>
                            </main>
                        </a>    
                        </div>
                    </div>
                  @endif 
                @endforeach
            </div>
    </div>
    <div class = subpage-slide-StudentDesk>
      <div class="container">
    <h1>Student Desk</h1>
</div>

</div>
</div>
@endsection
