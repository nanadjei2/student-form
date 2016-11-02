@extends('master')
@section('title')
  Home
@endsection


@section('content')
<div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <!-- Header Begins -->
          <div class="header text-center">

            @include('common.notification')
            
            <img src="{{ url('assets/img/banner.png') }}" alt="college banner" />
            <div class="header-title">
              <p><h4>STUDENTS' ACHIEVEMENT PROGRAMME</h4></p>
              <h4>(STUDENT'S PARTICIPATION FORM)</h4> <hr>
            </div>
          </div>
          <!-- Header Ends -->

          <!-- Descriptions Begins -->
            <div class="description">
              <h5 >The College of Science Students’ achievement programme (an initiative of the college provost) is about
                helping students develop institutional and programme fit achievements.
              </h5>
            </p>
            <h4>CONDITIONS OF PARTICIPATION</h4>
            <h5>Students are <strong>exempt from paying any fees</strong> but they are obligated
              to attend all tutorial sessions for the courses for which they sign up.</h5>
          </div>
          <!-- Descriptions Ends -->

          <!-- Form Begins -->
          <div class="form">
            <h4 class="text-center">PARTICIPATING STUDENT’S INFORMATION</h4><hr><br>
                {!! Form::open(['url' => '/post-student', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                <div class="form-group {{ $errors->has('name')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="name">Name:</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="name" type="text" name="name" Placeholder="Enter name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                      <span style="color:#b84464;">{{$errors->first('name') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('index_number')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="index-number">Index Number:</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="index-number" type="text" name="index_number" Placeholder="Enter index number" value="{{ old('index_number') }}">
                    @if ($errors->has('index_number'))
                      <span style="color:#b84464;">{{$errors->first('index_number') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('programme_of_study')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="index-number">Programme of Study:</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="program-of-study" type="text" name="programme_of_study" Placeholder="Enter program of study" value="{{ old('programme_of_study') }}">
                    @if ($errors->has('programme_of_study'))
                      <span style="color:#b84464;">{{$errors->first('programme_of_study') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('year_of_study')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="Year-of-study">Year of Study:</label>
                  <div class="col-sm-8 year">
                    <label class="radio-inline"><input type="radio" name="year_of_study" value="Year 1" {{ (old('year_of_study') == 'Year 1') ? 'checked' : '' }}>Year 1</label>
                    <label class="radio-inline"><input type="radio" name="year_of_study" value="Year 2" {{ (old('year_of_study') == 'Year 2') ? 'checked' : '' }}>Year 2</label>
                    <label class="radio-inline"><input type="radio" name="year_of_study" value="Year 3" {{ (old('year_of_study') == 'Year 3') ? 'checked' : '' }}>Year 3</label>
                    <label class="radio-inline"><input type="radio" name="year_of_study" value="Year 4" {{ (old('year_of_study') == 'Year 4') ? 'checked' : '' }}>Year 4</label>
                    <label class="radio-inline"><input type="radio" name="year_of_study" value="Year 5" {{ (old('year_of_study') == 'Year 5') ? 'checked' : '' }}>Year 5</label>
                    <label class="radio-inline"><input type="radio" name="year_of_study" value="Year 6" {{ (old('year_of_study') == 'Year 6') ? 'checked' : '' }}>Year 6</label>
                    <div class="year_of_study">
                      @if ($errors->has('year_of_study'))
                        <span style="color:#b84464;">{{$errors->first('year_of_study') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group {{ $errors->has('trailed_courses')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="trailed-courses">Trailed Courses(s):</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="trailed-courses" type="text" name="trailed_courses" Placeholder="Enter trailed courses" value="{{ old('trailed_courses') }}">
                    @if ($errors->has('trailed_courses'))
                      <span style="color:#b84464;">{{$errors->first('trailed_courses') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('current_CWA')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="Current-CWA:">Current CWA:</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="current-CWA" type="text" name="current_CWA" Placeholder="Enter current-CWA" title="Must be a figure" value="{{ old('current_CWA') }}">
                    @if ($errors->has('current_CWA'))
                      <span style="color:#b84464;">{{$errors->first('current_CWA') }}</span>
                    @endif
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="control-label col-sm-4" for="semester-courses">Semester Course(s):</label>
                  <div class="col-sm-8">
                    <select class="courses form-control" id="semester-courses" name="courses" multiple="multiple">
                      <option value="course 1">Course 1</option>
                      <option value="course 2">Course 2</option>
                      <option value="course 3">Course 3</option>
                      <option value="course 4">Course 4</option>
                      <option value="course 5">Course 5</option>
                      <option value="course 6">Course 6</option>
                    </select>
                  </div>
                </div> -->
                <div class="form-group {{ $errors->has('signature_of_participant')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="Signature-of-participant">Signature of participant:</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="Signature-of-participant" type="text" name="signature_of_participant" Placeholder="Signature of participant" value="{{ old('signature_of_participant') }}">
                    @if ($errors->has('curresignature_of_participantnt_CWA'))
                      <span style="color:#b84464;">{{$errors->first('signature_of_participant') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('student_date')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="datepicker">Date:</label>
                  <div class="col-sm-8">
                    <!-- <input id="datepicker" type='text' class='datepicker-here form-control' name="endDate" data-language='en' data-position='bottom left' placeholder="Click to select Date"> -->
                    <input id="datepicker" class="form-control" type="date" name="student_date" placeholder="Make a date" value="{{ old('date') }}">
                    @if ($errors->has('student_date'))
                      <span style="color:#b84464;">{{$errors->first('student_date') }}</span>
                    @endif
                  </div>
                </div>
                <h4 class="text-center office-use">OFFICIAL USE ONLY</h4><hr>
                <div class="form-group {{ $errors->has('comments')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="comments">Comments:</label>
                  <div class="col-sm-8 year">
                    <label class="radio-inline"><input type="radio" name="comments" value="1" {{ (old('comments') == '1') ? 'checked' : '' }}>Approved</label>
                    <label class="radio-inline"><input type="radio" name="comments" value="0" {{ (old('comments') == '0') ? 'checked' : '' }}>Not approved</label>
                    <div class="comments">
                      @if ($errors->has('comments'))
                        <span style="color:#b84464;">{{$errors->first('comments') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group {{ $errors->has('reason')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="reasons">Give reason for non-approval:</label>
                  <div class="col-sm-8">
                    <textarea id="reasons" class="form-control" name="reason" rows="8" cols="40" placeholder="Write something...">{{ old('reason') }}</textarea>
                    @if ($errors->has('reason'))
                      <span style="color:#b84464;">{{$errors->first('reason') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('signature_and_name_of_office')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="S-and-n-of-office">Signature & Name of office:</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="S-and-n-of-office" type="text" name="signature_and_name_of_office" Placeholder="Signature of participant" value="{{ old('signature_and_name_of_office') }}">
                    @if ($errors->has('signature_and_name_of_office'))
                      <span style="color:#b84464;">{{$errors->first('signature_and_name_of_office') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group {{ $errors->has('office_date')? 'has-error' : ''}}">
                  <label class="control-label col-sm-4" for="datepicker">Date:</label>
                  <div class="col-sm-8">
                    <!-- <input id="datepicker" type='text' class='datepicker-here form-control' name="date" data-language='en' data-position='bottom left' placeholder="Click to select Date"> -->
                    <input class="form-control" type="date" name="office_date" placeholder="Make a date">
                    @if ($errors->has('office_date'))
                      <span style="color:#b84464;">{{$errors->first('office_date') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-8">
                    <input class="btn btn-primary" type="submit" value="Submit">
                  </div>
                </div>
              {!! Form::close() !!}
          </div>
          <!-- Form-ends -->
        </div><!-- container -->


      </div><!-- row -->
    </div>
@endsection
