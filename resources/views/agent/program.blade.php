@extends('layouts.agent_app')
@section('content')
    @php $countries     = getCountry();@endphp
    @php $colleges      = getCollege();@endphp
    @php $inakesdate    = getIntekDate();@endphp
    @php $postdisciplines = getPostDiscipline();@endphp
    @php $subcategories = getSubCategories();@endphp
    @php $getPermitVisa = getPermitVisa();@endphp
    @php $getEducations = getEducation();@endphp
    @php $getGradingSchemes = getGradingScheme();@endphp
    @php $getEnglishexamType = getEnglishexamType();@endphp
    <?php //print_r($inakesdate);
    ?>
    <div class="page-content program p-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <!--<nav aria-label="breadcrumb">-->
                    <!--      <ol class="breadcrumb">-->
                    <!--        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>&nbsp; /-->
                    <!--        <li class="breadcrumb-item"><a href="#">Programs & Schools</a></li>&nbsp; /-->
                    <!--        <li class="breadcrumb-item active" aria-current="page">Data</li>-->
                    <!--      </ol>-->
                    <!--    </nav>-->
                </div>
                
                <div class="col-md-8">
                    <div class="input-group d-flex ">
                        
                        <input type="text" class=" me-4 border inp-resp border-info rounded"
                            placeholder="Search Programs">
                        <input type="text" class=" me-4 border inp-resp border-info rounded"
                            placeholder="Search Colleges">
                        <button class="btn btn-primary clr bt-resp text-center" type="button"> <span class="spinner-grow spinner-grow-sm"></span>
  Search </button>
                        
      
                    </div>
                </div>
            </div>
            <!--<hr>-->

            <div class="row">
                <div class="col-md-3">
                    <div class="">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header filtertip" id="eligibilityheadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#eligibility" aria-expanded="true" aria-controls="eligibility">
                                        Eligibility &nbsp;
                                    </button>
                                </h2>
                                <div id="eligibility" class="accordion-collapse collapse show"
                                    aria-labelledby="eligibilityheadingOne" data-bs-parent="#accordionExample">

                                    <div class="accordion-body">
                                        <form action="agenteligibilityfilter" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Select Student</label>
                                                @if (!empty($student_list))
                                                    <!-- <select class="select2 form-control select2-multiple" multiple="" data-placeholder="Choose ..." name="student[]">
                                                 @foreach ($student_list as $student)
                                                 <option value="{{ $student->id }}">{{ $student->name }}</option>
                                                @endforeach
                                                                        </select>-->
                                                @endif
                                                <input type="text" id="search-dropdwon-main" class="form-control"
                                                    placeholder="Search..." required >
                                                <input type="hidden" id="student" name="student" value="">
                                                <div class="search-dropdown">
                                                    <img src="{{ url('/img/loader.gif') }}" alt="Image" width="20"
                                                        class="loadern" />
                                                    <span id="suggesstionbox"></span>
                                                    <ul>
                                                        <li class="disabled">No Option </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#addNewStudent"> + ADD
                                                            NEW STUDENT </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="form-group py-1">
                                                <label>Do you have a valid Study Permit / Visa?</label>
                                                <select class="select2 form-control select2-multiple" multiple="multiple"
                                                    data-placeholder="Choose ..." name="visa_permit" id="visa_permit">

                                                    @foreach ($getPermitVisa as $visa)
                                                        <option value="{{ $visa->id }}">{{ $visa->visa_title }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="row form-group py-1">
                                                    <div class="col">
                                                        <label>Nationality</label>
                                                <select class="form-control select2" name="nationality" id="nationality" required >
                                                    <option value="" >-- select one --</option>

                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                    </div>
                                            
                                                    <div class="col">
                                                        <label>Education Country</label>
                                                <select class="form-control select2" name="education_country" required
                                                    id="education_country">
                                                    <option value="">-- select one --</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                    </div>
                                             </div>
                                             
                                             
                                                        
                                                        
                                             <div class="row form-group py-1">
                                                    <div class="col">
                                                        <label>Education Level</label>
                                                <select class="form-control select2" name="education_lavel" required 
                                                    id="education_lavel">
                                                    <option>Select...</option>

                                                    @foreach ($getEducations as $getEducation)
                                                        <option value="{{ $getEducation->id }}">{{ $getEducation->title }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>Grading Scheme</label>
                                                <select class="form-control select2" name="grading_schem" required
                                                    id="grading_schem">
                                                    <option>Select...</option>


                                                    @foreach ($getGradingSchemes as $getGradingScheme)
                                                        <option value="{{ $getGradingScheme->id }}">
                                                            {{ $getGradingScheme->grad_name }}</option>
                                                    @endforeach

                                                </select>
                                                    </div>
                                                    
                                            </div>

                                            
                                            
                                            <div class="form-group py-1">
                                                <label>English Exam Type</label>
                                                <select class="form-control select2" name="exam_type" id="exam_type" required>

                                                    @foreach ($getEnglishexamType as $type)
                                                        <option value={{ $type->id }}>{{ $type->exam_name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="row addisnalrow " style="display:none">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Reading</label>
                                                        <input type="text" name="reading" id="reading"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Listening</label>
                                                        <input type="text" name="listening" id="listening"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Speaking</label>
                                                        <input type="text" name="speaking" id="speaking"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Writing</label>
                                                        <input type="text" name="writing" id="writing"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group checkbox">
                                                                    <input class="form-check-input" type="checkbox" value="" id="OnlyCheckDefault">
                                                                    <label class="form-check-label" for="OnlyCheckDefault">
                                                                        Only Show Direct Admissions
                                                                    </label>
                                                                    <i class="fa-solid fa-circle-question" id="question" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Turning this switch ON means you will only see programs that you will beeligible to apply for them without taking any prerequisite english classes.Keeping this filter OFF means some results shown will require you to takeEnglish classes before becoming eligible to apply."></i>
                                                                </div> -->
                                            <div class="form-group mt-5 text-center">
                                                <button type="submit" class="btn1-primary waves-effect waves-light">APPLY FILTERS</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header filtertip" id="schoolfiltersheadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#school-filters" aria-expanded="true"
                                        aria-controls="school-filters">
                                        College Filters &nbsp;
                                    </button>
                                </h2>
                                <div id="school-filters" class="accordion-collapse collapse show"
                                    aria-labelledby="schoolfiltersheadingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form action="agentcollagefilter" method="POST">
                                            @csrf
                                            <div class="row form-group py-1">
                                                    <div class="col">
                                                        <label> Country </label>
                                                <select class="select2 form-control select2-multiple" id="country" required
                                                    name="collage_country[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    @foreach ($countries as $country)
                                                        <option data-id="{{ $country->id }}"
                                                            value="{{ $country->id }}">{{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                        </div>
                                                        <div class="col">
                                                            <label>college</label>
                                                <select class="form-control select2" name="college[]" multiple="multiple" required
                                                    data-placeholder="select ...">
                                                    <option value="">No Option</option>
                                                    @if (!empty($colleges))
                                                        @foreach ($colleges as $college)
                                                            <option value="{{ $college->id }}">
                                                                {{ $college->college_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                            </div>
                                                        
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="row form-group py-1">
                                                    <div class="col">
                                                        <label>Provinces / States</label>
                                                <select class="select2 form-control select2-multiple" id="state" required
                                                    name="collage_state[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    <option value="">No Option</option>

                                                </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>Campus City <i class="fa-solid fa-circle-question" id="question"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                        data-bs-original-title="By selecting this checkbox, only programs that are from schools participating in the Post Graduation Work Permit program (in Canada), Optional Practical Training program (in USA), Temporary Graduate Visa program (in Australia), Post-Study Work Visa program (in UK), and Stay Back Visa (in Ireland) will be shown."></i></label>
                                                <select class="form-control select2" multiple="multiple" id="city" required
                                                    name="campus_city_name[]" data-placeholder="select ...">
                                                    <option value="">No Option</option>

                                                </select>
                                                    </div>
                                             </div>
                                             
                                            

                                            <div class="form-group checkbox py-1">
                                                <div class="row">
                                                    <div class="col">
                                                        <input class="form-check-input"name="univercity" type="checkbox" 
                                                            value="University" id="UniversityCheckDefault">
                                                        <label class="form-check-label" for="UniversityCheckDefault">
                                                            University
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox" value="College" required
                                                            name="collage" id="CollegeCheckDefault">
                                                        <label class="form-check-label" for="CollegeCheckDefault">
                                                            College
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="english_institute" value="English Institute"
                                                            id="englishinstituteCheckDefault">
                                                        <label class="form-check-label"
                                                            for="englishinstituteCheckDefault">
                                                            English Institute
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="High School" name="high_school"
                                                            id="highschoolCheckDefault">
                                                        <label class="form-check-label" for="highschoolCheckDefault">
                                                            High School
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group checkbox py-1">
                                                <input class="form-check-input" type="checkbox" value="Yes"
                                                    name="work_permit_status" id="PostCheckDefault">
                                                <label class="form-check-label" for="PostCheckDefault">
                                                    Post-Graduation Work Permit Available
                                                </label>
                                                <i class="fa-solid fa-circle-question" id="question"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Turning this switch ON means you will only see programs that you will beeligible to apply for them without taking any prerequisite english classes.Keeping this filter OFF means some results shown will require you to takeEnglish classes before becoming eligible to apply."></i>
                                            </div>
                                            
                                            <div class="form-group mt-5 text-center">
                                                <button type="submit" class="btn1-primary waves-effect waves-light">APPLY FILTERS</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header filtertip" id="programfiltersheadingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#program-filters" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Program Filters &nbsp;
                                    </button>
                                </h2>
                                <div id="program-filters" class="accordion-collapse collapse show"
                                    aria-labelledby="programfiltersheadingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form action="agentprogramfilter" method="POST">
                                            @csrf
                                            
                                            <div class="row form-group py-1">
                                                <div class="col">
                                                        <label> College</label>
                                                <select class="form-control select2" name="collage_name[]"
                                                    multiple="multiple" data-placeholder="select ...">
                                                    <option value="">No Option</option>
                                                    @if (!empty($colleges))
                                                        @foreach ($colleges as $college)
                                                            <option value="{{ $college->id }}">
                                                                {{ $college->college_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <!--<select class="form-control select2" multiple="multiple" data-placeholder="select ...">
                                                                    <option value="">No Option</option>
                                                                </select>-->
                                                    </div>
                                                    <div class="col">
                                                        <label>Intakes</label>
                                                <select class="select2 form-control select2-multiple" name="inakes_date[]" required
                                                    multiple="multiple" data-placeholder="select ...">

                                                    <?php print_r($inakesdate); ?>
                                                    @if (!empty($inakesdate))
                                                        @foreach ($inakesdate as $date)
                                                            <option value="{{ $date->earliest_intake_date }}">
                                                                {{ date('d-F-Y', strtotime($date->earliest_intake_date)) }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                    </div>
                                                    
                                            </div>
                                            
                                            
                                            
                                                
                                            
                                            <div class="form-group py-1">
                                                <label>Post-Secondary Discipline</label>
                                                <select class="select2 form-control select2-multiple" required
                                                    name="post_discipline[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    @if (!empty($postdisciplines))
                                                        @foreach ($postdisciplines as $disc)
                                                            <option value="{{ $disc->id }}">{{ $disc->title }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group py-1">
                                                <label>Post-Secondary Sub-Categories</label>
                                                <select class="select2 form-control select2-multiple" required
                                                    name="sub_categories[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    @if (!empty($subcategories))
                                                        @foreach ($subcategories as $sub_cat)
                                                            <option value="{{ $sub_cat->id }}">
                                                                {{ $sub_cat->sub_cat_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <!-- <div class="form-group checkbox">
                                                                <input class="form-check-input" type="checkbox" value="" id="CommissionsCheckDefault">
                                                                <label class="form-check-label" for="CommissionsCheckDefault">
                                                                    Show Commissions
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <p>All amounts are listed in the currency charged by the school. For best results, please specify a country of the school.</p>
                                                            </div>-->
                                            
                                            <div class="form-group py-1">
                                                <label class="pt-2">Tuition Fee</label>
                                                <!--<input type="text" class="float-end tution-feeProg-main" name="tuition_free" id="range_04" required>-->
                                                 <input type="text"  id="range_04" class="form-control float-end" name="tuition_free"
                                                     required >
                                            </div>
                                            <div class="form-group pt-2">
                                                <label class="pt-2">Application Fee</label>
                                                <!--<input type="text" class="float-end tution-feeProg-main" name="applocation_free" id="range_05" required>-->
                                                <input type="text"  id="range_05" class="form-control float-end" name="applocation_free"
                                                     required >
                                            </div>
                                            <div class="form-group checkbox pt-3">
                                                <input class="form-check-input" type="checkbox" value="Yes" required
                                                    name="living_cost" id="TuitionCheckDefault">
                                                <label class="form-check-label" for="TuitionCheckDefault">
                                                    Include living costs
                                                </label>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <div class="row">
                                                    <!--div class="col-6">
                                                                        <button type="button" class="btn btn-danger px-4">Clear Filters</button>
                                                                    </!--div>-->
                                                    <!-- <div class="col-6">
                                                                        
                                                                        <button type="button" class="btn btn-primary px-4 float-end">Apply Filters</button>
                                                                    </div>-->
                                                    <div class="form-group mt-4 text-center">
                                                        <button type="submit" class="btn1-primary waves-effect waves-light">APPLY FILTERS</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="program-list">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="programs-tab" data-bs-toggle="pill"
                                    data-bs-target="#programs" type="button" role="tab" aria-controls="programs"
                                    aria-selected="false">Programs ( @if ($collages != 'not_found')
                                        {{ $courseTotal }}
                                    @else
                                        0
                                    @endif) </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="school-tab" data-bs-toggle="pill" data-bs-target="#school"
                                    type="button" role="tab" aria-controls="school" aria-selected="true">Colleges (
                                    @if ($collages != 'not_found')
                                        {{ count($collages) }}
                                    @else
                                        0
                                    @endif)
                                </button>
                            </li>
                        </ul>
                        <ul class="d-flex float-end select-bar-program">
                            <li>
                                <form action="agentProgram" method="GET">
                                    @csrf
                                    <div class="form-group">
                                        <select class="form-select slt-resp" id="sorting" name="sorting"
                                            aria-label="Default select example">
                                            <option value="1">Relevance</option>
                                            <option value="college_asc">College Name(A-Z)</option>
                                            <option value="college_desc">College Name(Z-A)</option>
                                            <option value="tfee_asc">Tution Fee(0-9)</option>
                                            <option value="tfee_desc">Tution Fee(9-0)</option>
                                            <option value="applo_asc">Application Fee (0-9)</option>
                                            <option value="applo_desc">Application Fee (9-0)</option>
                                        </select>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            
                            

                            <div class="tab-pane fade active show" id="programs" role="tabpanel"
                                aria-labelledby="programs-tab">
                                
                          
        <!--KD SECTION HERE -->
                                
                                @if ($collages != 'not_found')
                                    @foreach ($collages as $list)
                                        
                                        <section class="p-4">
                                            <div id="mancontainer">
                                            <div id="innermaincontainer">
                                                <div id="Studentdetails">
                                                <div id="backgroundpurple"></div>
                                                    <div id="info" class="card border-1 pl-2">
                                    
                                                        <section>
                                    
                                    
                                                        <div class=" mb-0">
                                                            <div class="card testimonial-card">
                                                                <div class="card-up" style="background-color: #2b50edd9"></div>
                                                                <div class="avatar avatar-main-new bg-white">
                                                                    <img src="{{ url('/images/' . $list->college_logo) }}"
                                                                        class="rounded-circle img-fluid" />
                                                                </div>
                                                                <div class="card-body text-left">
                                                                    <a href="/agent-college-details/{{ $list->id }}">{{ $list->college_name }}</a>
                                                                    <!--<hr />-->
                                                                    <p class="dark-grey-text">
                                                                       {{ $list->college_address }}, {{ $list->college_country }}
                                                                    </p>
                                                                   @foreach ($list->courses as $p)
                                                <div class="main-programs-img-content">
                                                    <div class="">
                                                        <div class="text-left">
                                                            <a
                                                                href="/agent-program-details/{{ $p->id }}">{{ $p->programs_name }}</a>
                                                                
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="main-programs-list">
                                                            <div class="css-1kos2q0 d-flex">
                                                                 <div class="border border-secondary pt-2 rounded-circle px-2 tutionFee-icon"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg></div>                                                    <div class="d-flex flex-column px-2">
                                                                <span>TUITION FEE</span>
                                                                <span class="money css-6xix1i">
                                                                    @if ($p->tuition_fee_min != '')
                                                                        {{ number_format($p->tuition_fee_min, 2) }}
                                                                        -
                                                                    @else
                                                                        NA
                                                                    @endif
                                                                    @if ($p->tuition_fee_max != '')
                                                                        {{ number_format($p->tuition_fee_max, 2) }}
                                                                    @endif
                                                                </span>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="css-1kos2q0 ps-5 appFee-main-new d-flex">
                                                                 <div class="border border-secondary pt-2 rounded-circle px-2 tutionFee-icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="15" height="15" x="0" y="0" viewBox="0 0 100 100" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M47.027 30.047h19.186a1 1 0 1 0 0-2H47.027a1 1 0 1 0 0 2zM47.027 25.182h19.186a1 1 0 1 0 0-2H47.027a1 1 0 1 0 0 2zM47.027 34.913h19.186a1 1 0 1 0 0-2H47.027a1 1 0 1 0 0 2zM47.027 39.778h9.593a1 1 0 1 0 0-2h-9.593a1 1 0 1 0 0 2zM27.905 49.12a1 1 0 1 0 0 2h39.062a1 1 0 1 0 0-2zM25.227 49.12h-1.935a1 1 0 1 0 0 2h1.935a1 1 0 1 0 0-2zM66.967 54.924H27.905a1 1 0 1 0 0 2h39.062a1 1 0 1 0 0-2zM25.227 54.924h-1.935a1 1 0 1 0 0 2h1.935a1 1 0 1 0 0-2zM27.905 60.728a1 1 0 1 0 0 2h31.374a1 1 0 1 0 0-2zM25.227 60.728h-1.935a1 1 0 1 0 0 2h1.935a1 1 0 1 0 0-2zM59.279 66.531H27.905a1 1 0 1 0 0 2h31.374a1 1 0 1 0 0-2zM25.227 66.531h-1.935a1 1 0 1 0 0 2h1.935a1 1 0 1 0 0-2z" fill="#000000" data-original="#000000" class=""></path><path d="M87.782 61.023a.999.999 0 0 0-1.138-.195l-6.479 3.098V13.55a2.814 2.814 0 0 0-2.81-2.81h-2.871V7.87a2.814 2.814 0 0 0-2.81-2.811H14.735a2.814 2.814 0 0 0-2.81 2.811v78.58a2.814 2.814 0 0 0 2.81 2.81h2.871v2.87a2.814 2.814 0 0 0 2.81 2.811h56.94a2.814 2.814 0 0 0 2.81-2.811V78.656c0-.039-.018-.073-.022-.111l7.834-16.383a1.002 1.002 0 0 0-.195-1.139zm-9.617 31.106a.811.811 0 0 1-.81.811H20.416a.81.81 0 0 1-.81-.811V13.55c0-.446.363-.81.81-.81h56.94a.81.81 0 0 1 .81.81v51.333l-17.452 8.345a1 1 0 0 0 .252 1.886l10.75 1.966 1.976 10.762a1 1 0 0 0 1.886.252l2.588-5.412v9.45z" fill="#000000" data-original="#000000" class=""></path><path d="M32.667 18.664c-5.725 0-10.383 4.657-10.383 10.383S26.942 39.43 32.667 39.43 43.05 34.773 43.05 29.047s-4.658-10.383-10.383-10.383zm0 9.383a2.855 2.855 0 0 1 2.852 2.852 2.85 2.85 0 0 1-1.852 2.662v1.099a1 1 0 1 1-2 0v-1.099a2.85 2.85 0 0 1-1.852-2.662 1 1 0 1 1 2 0c0 .47.382.853.852.853a.854.854 0 0 0 0-1.705 2.855 2.855 0 0 1-2.852-2.852c0-1.219.773-2.254 1.852-2.661v-1.099a1 1 0 1 1 2 0v1.099a2.849 2.849 0 0 1 1.852 2.661 1 1 0 1 1-2 0 .853.853 0 1 0-.852.852z" fill="#000000" data-original="#000000" class=""></path></g></svg></div>                                                    <div class="d-flex flex-column px-2">
                                                                <span>APPLICATION FEE</span>
                                                                <span class="money css-6xix1i">
                                                                   <span>
                                                                    @if ($p->application_fee_min != '')
                                                                        {{ number_format($p->application_fee_min, 2) }}
                                                                        -
                                                                    @else
                                                                        NA
                                                                    @endif
                                                                    @if ($p->application_fee_max != '')
                                                                        {{ number_format($p->application_fee_max, 2) }}
                                                                    @endif
                                                                </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                            
                                                            <!--<div class="css-1kos2q0 ps-5 appFee-main-new">-->
                                                            <!--    <span>APPLICATION FEE</span>-->
                                                            <!--    <span>-->
                                                            <!--        @if ($p->application_fee_min != '')-->
                                                            <!--            {{ number_format($p->application_fee_min, 2) }}-->
                                                            <!--            --->
                                                            <!--        @else-->
                                                            <!--            NA-->
                                                            <!--        @endif-->
                                                            <!--        @if ($p->application_fee_max != '')-->
                                                            <!--            {{ number_format($p->application_fee_max, 2) }}-->
                                                            <!--        @endif-->
                                                            <!--    </span>-->
                                                            <!--</div>-->
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    @if (!empty($canapply))
                                                        <div class="select-submit">
                                                            <a class="" href="" data-bs-toggle="modal"
                                                                data-bs-target="#select-student"
                                                                data-programid="{{ $p->id }}"
                                                                onclick="setprogramid({{ $p->id }});">Select
                                                                Student</a>
                                                        </div>
                                                    @endif
                                                </div>
                                            @break
                                        @endforeach
                                        
                                         <div class="text-center py-3">
                                            <a href="javascript:;" class="see-more"> See {{ count($list->courses) }}
                                                More Programs <i class="fa fa-chevron-down"></i></a>
                                            
                                            <div class="main-slide">
                                                @foreach ($list->courses as $plist)
                                                    <div class="main-programs-img-content">
                                                        <div class="">
                                                            <div>
                                                                <a
                                                                    href="/agent-program-details/{{ $plist->id }}">{{ $plist->programs_name }}</a>
                                                            </div>
                                                            <div class="main-programs-list">
                                                                <div class="css-1kos2q0">
                                                                    <span>TUITION FEE</span>
                                                                    <span class="money css-6xix1i">
                                                                        @if ($plist->tuition_fee_min != '')
                                                                            {{ number_format($plist->tuition_fee_min, 2) }}
                                                                            -
                                                                        @else
                                                                            NA
                                                                        @endif
                                                                        @if ($plist->tuition_fee_max != '')
                                                                            {{ number_format($plist->tuition_fee_max, 2) }}
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div class="css-1kos2q0 ps-3">
                                                                    <span>APPLICATION FEE</span>
                                                                    <span>
                                                                        @if ($plist->application_fee_min != '')
                                                                            {{ number_format($plist->application_fee_min, 2) }}
                                                                            -
                                                                        @else
                                                                            NA
                                                                        @endif
                                                                        @if ($plist->application_fee_max != '')
                                                                            {{ number_format($plist->application_fee_max, 2) }}
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @if (!empty($canapply))
                                                            <div class="select-submit">
                                                                <a class="" href=""
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#select-student"
                                                                    data-programid="{{ $plist->id }}"
                                                                    onclick="setprogramid({{ $plist->id }});">Select
                                                                    Student</a>

                                                            </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                                <a href="javascript:;" class="less-more"> See Less <i
                                                        class="fa fa-chevron-up"></i></a>
                                                <!--<hr />-->
                                            </div>

                                        </div>
                                        
                                        
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                    
                                                    </div>
                                                    
                                                    
                                                    </div>
                                            </div>
                                            </div>
                                        </section>
                                        
                                         <!--KD SECTION ENDS HERE -->
                                        
                                        
                                        
                                    <!--    <div class="main-programs-content card bg-white" >-->
                                    <!--        <div class="main-programs-img" style="background-color: #2b50ed;"></>-->
                                    <!--            <a href="/agent-college-details/{{ $list->id }}">-->
                                    <!--                <img width="48" height="48" src="{{ url('/images/' . $list->college_logo) }}" alt="Logo" />-->
                                    <!--            </a>-->
                                    <!--            <div>-->
                                    <!--                <div>-->
                                    <!--                    <a-->
                                    <!--                        href="/agent-college-details/{{ $list->id }}">{{ $list->college_name }}</a>-->
                                    <!--                </div>-->
                                    <!--                <div class="css-6g7jag">-->
                                    <!--                    {{ $list->college_address }}, {{ $list->college_country }}-->
                                    <!--                    Header Avatar-->

                                    <!--                </div>-->
                                    <!--            </div>-->
                                                
                                    <!--        </div>-->
                                    <!--        @foreach ($list->courses as $p)-->
                                    <!--            <div class="main-programs-img-content">-->
                                    <!--                <div class="">-->
                                    <!--                    <div class="text-center">-->
                                    <!--                        <a-->
                                    <!--                            href="/agent-program-details/{{ $p->id }}">{{ $p->programs_name }}</a>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="main-programs-list">-->
                                    <!--                        <div class="css-1kos2q0">-->
                                    <!--                            <span>TUITION FEE</span>-->
                                    <!--                            <span class="money css-6xix1i">-->
                                    <!--                                @if ($p->tuition_fee_min != '')-->
                                    <!--                                    {{ number_format($p->tuition_fee_min, 2) }}-->
                                    <!--                                    --->
                                    <!--                                @else-->
                                    <!--                                    NA-->
                                    <!--                                @endif-->
                                    <!--                                @if ($p->tuition_fee_max != '')-->
                                    <!--                                    {{ number_format($p->tuition_fee_max, 2) }}-->
                                    <!--                                @endif-->
                                    <!--                            </span>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="css-1kos2q0 ps-5">-->
                                    <!--                            <span>APPLICATION FEE</span>-->
                                    <!--                            <span>-->
                                    <!--                                @if ($p->application_fee_min != '')-->
                                    <!--                                    {{ number_format($p->application_fee_min, 2) }}-->
                                    <!--                                    --->
                                    <!--                                @else-->
                                    <!--                                    NA-->
                                    <!--                                @endif-->
                                    <!--                                @if ($p->application_fee_max != '')-->
                                    <!--                                    {{ number_format($p->application_fee_max, 2) }}-->
                                    <!--                                @endif-->
                                    <!--                            </span>-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->
                                    <!--                </div>-->
                                    <!--                @if (!empty($canapply))-->
                                    <!--                    <div class="select-submit">-->
                                    <!--                        <a class="" href="" data-bs-toggle="modal"-->
                                    <!--                            data-bs-target="#select-student"-->
                                    <!--                            data-programid="{{ $p->id }}"-->
                                    <!--                            onclick="setprogramid({{ $p->id }});">Select-->
                                    <!--                            Student</a>-->
                                    <!--                    </div>-->
                                    <!--                @endif-->
                                    <!--            </div>-->
                                    <!--        @break-->
                                    <!--    @endforeach-->
                                        
                                        
                                        
                                        
                                   


                                    <!--    <div class="text-center py-3">-->
                                    <!--        <a href="javascript:;" class="see-more"> See {{ count($list->courses) }}-->
                                    <!--            More Programs <i class="fa fa-chevron-down"></i></a>-->
                                            
                                    <!--        <div class="main-slide">-->
                                    <!--            @foreach ($list->courses as $plist)-->
                                    <!--                <div class="main-programs-img-content">-->
                                    <!--                    <div class="">-->
                                    <!--                        <div>-->
                                    <!--                            <a-->
                                    <!--                                href="/agent-program-details/{{ $plist->id }}">{{ $plist->programs_name }}</a>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="main-programs-list">-->
                                    <!--                            <div class="css-1kos2q0">-->
                                    <!--                                <span>TUITION FEE</span>-->
                                    <!--                                <span class="money css-6xix1i">-->
                                    <!--                                    @if ($plist->tuition_fee_min != '')-->
                                    <!--                                        {{ number_format($plist->tuition_fee_min, 2) }}-->
                                    <!--                                        --->
                                    <!--                                    @else-->
                                    <!--                                        NA-->
                                    <!--                                    @endif-->
                                    <!--                                    @if ($plist->tuition_fee_max != '')-->
                                    <!--                                        {{ number_format($plist->tuition_fee_max, 2) }}-->
                                    <!--                                    @endif-->
                                    <!--                                </span>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="css-1kos2q0 ps-3">-->
                                    <!--                                <span>APPLICATION FEE</span>-->
                                    <!--                                <span>-->
                                    <!--                                    @if ($plist->application_fee_min != '')-->
                                    <!--                                        {{ number_format($plist->application_fee_min, 2) }}-->
                                    <!--                                        --->
                                    <!--                                    @else-->
                                    <!--                                        NA-->
                                    <!--                                    @endif-->
                                    <!--                                    @if ($plist->application_fee_max != '')-->
                                    <!--                                        {{ number_format($plist->application_fee_max, 2) }}-->
                                    <!--                                    @endif-->
                                    <!--                                </span>-->
                                    <!--                            </div>-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->

                                    <!--                    @if (!empty($canapply))-->
                                    <!--                        <div class="select-submit">-->
                                    <!--                            <a class="" href=""-->
                                    <!--                                data-bs-toggle="modal"-->
                                    <!--                                data-bs-target="#select-student"-->
                                    <!--                                data-programid="{{ $plist->id }}"-->
                                    <!--                                onclick="setprogramid({{ $plist->id }});">Select-->
                                    <!--                                Student</a>-->

                                    <!--                        </div>-->
                                    <!--                    @endif-->
                                    <!--                </div>-->
                                    <!--            @endforeach-->
                                    <!--            <a href="javascript:;" class="less-more"> See Less <i-->
                                    <!--                    class="fa fa-chevron-up"></i></a>-->
                                                <!--<hr />-->
                                    <!--        </div>-->

                                    <!--    </div>-->
                                    <!--</div>-->
                                @endforeach
                                {{ $collages->links() }}
                            @else
                                <div class="alert alert-danger">
                                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    </strong> Requesting data not found.
                                </div>
                            @endif




                            <!-- Modal Select Student -->
                            <div class="modal fade" id="select-student" tabindex="-1"
                                aria-labelledby="selectstudentLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title text-center m-auto" id="selectstudentLabel">Check
                                                Student Eligibility</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <h5>Select a student to check their eligibility.</h5>
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <input type="hidden" id="student-main" name="student-main"
                                                        value="">
                                                    <input type="hidden" id="programid" name="programid"
                                                        value="">
                                                    <input type="text" id="search_student" class="form-control" 
                                                        placeholder="Search students name, email">
                                                    <img src="{{ url('/img/loader.gif') }}" alt="Image"
                                                        width="20" class="loadern2" />
                                                    <div id="student_list_on_page"></div>

                                                </div>
                                            </form>
                                        </div>

                                        <div id="main-content-popup">
                                            <div id="elgalertsuc"class="alert alert-success alert-dismissible fade show"
                                                role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i> Student is eligible
                                                for this program.
                                            </div>
                                            <div id="elgalertdanger"class="alert alert-danger alert-dismissible fade show"
                                                role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i> Student is not
                                                eligible
                                                for this program.
                                            </div>
                                            <div class="main-content-text mx-4 mt-3">
                                                <div id="pdetails"></div>
                                            </div>
                                            <div id="papply" class="d-flex mt-3" style="display: none">
                                                <!--<a class="btn btn-default w-50">Close</a>-->
                                                <a class="btn btn-primary w-50" onclick="prograApply()">Apply Now</a>
                                            </div>


                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="school" role="tabpanel" aria-labelledby="school-tab">
                            <div class="row">
                                @if ($collages != 'not_found')
                                    @foreach ($collages as $collage)
                                        <div class="col-md-6">
                                            <!--<div class="school-tabs-section">-->
                                            <!--    <div class="school-tabs-content">-->
                                            <!--        <img width="68" height="68"-->
                                            <!--            src="{{ url('/images/' . $collage->college_logo) }}"-->
                                            <!--            alt="Logo" />-->
                                            <!--        <div class="school-tabs-main">-->
                                            <!--            <a-->
                                            <!--                href="/agent-college-details/{{ $collage->id }}">{{ $collage->college_name }}</a>-->
                                            <!--            <h4> {{ $collage->college_address }},-->
                                            <!--                {{ $collage->college_country }}</h4>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                            <div class="hstack gap-2 mb-3 card bg-white p-3">
                                              <!-- Avatar -->
                                              <div class="avatar" style="height: 4rem;width: 4rem;">
                                                <a href="#"> <img class="avatar-img rounded-circle shadow h-100" src="{{ url('/images/' . $collage->college_logo) }}" alt="" style="max-width: 100%;"> </a>
                                              </div>
                                              <!-- Title -->
                                              <div class="overflow-hidden">
                                                <a class="h5 text-dark mb-0" href="/agent-college-details/{{ $collage->id }}">{{ $collage->college_name }}</a>
                                                <p class="mb-0 small text-truncate"> {{ $collage->college_address }},
                                                            {{ $collage->college_country }}</p>
                                              </div>
                                              
                                            </div>

                                        </div>
                                    @endforeach
                                    {{ $collages->links() }}
                                @else
                                    <div class="alert alert-danger">
                                        <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        </strong> Requesting data not found.
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 600px;">
        
<!--        <form class="row bg-white g-3 needs-validation" novalidate>-->
<!--  <div class="col-md-4">-->
<!--    <label for="validationCustom01" class="form-label">First name</label>-->
<!--    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>-->
<!--    <div class="valid-feedback">-->
<!--      Looks good!-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col-md-4">-->
<!--    <label for="validationCustom02" class="form-label">Last name</label>-->
<!--    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>-->
<!--    <div class="valid-feedback">-->
<!--      Looks good!-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col-md-4">-->
<!--    <label for="validationCustomUsername" class="form-label">Username</label>-->
<!--    <div class="input-group has-validation">-->
<!--      <span class="input-group-text" id="inputGroupPrepend">@</span>-->
<!--      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>-->
<!--      <div class="invalid-feedback">-->
<!--        Please choose a username.-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col-md-6">-->
<!--    <label for="validationCustom03" class="form-label">City</label>-->
<!--    <input type="text" class="form-control" id="validationCustom03" required>-->
<!--    <div class="invalid-feedback">-->
<!--      Please provide a valid city.-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col-md-3">-->
<!--    <label for="validationCustom04" class="form-label">State</label>-->
<!--    <select class="form-select" id="validationCustom04" required>-->
<!--      <option selected disabled value="">Choose...</option>-->
<!--      <option>...</option>-->
<!--    </select>-->
<!--    <div class="invalid-feedback">-->
<!--      Please select a valid state.-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col-md-3">-->
<!--    <label for="validationCustom05" class="form-label">Zip</label>-->
<!--    <input type="text" class="form-control" id="validationCustom05" required>-->
<!--    <div class="invalid-feedback">-->
<!--      Please provide a valid zip.-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col-12">-->
<!--    <div class="form-check">-->
<!--      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>-->
<!--      <label class="form-check-label" for="invalidCheck">-->
<!--        Agree to terms and conditions-->
<!--      </label>-->
<!--      <div class="invalid-feedback">-->
<!--        You must agree before submitting.-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col-12">-->
<!--    <button class="btn btn-primary" type="submit">Submit form</button>-->
<!--  </div>-->
<!--</form>-->

        <form action="" method="POST" id="student_regi"  class="needs-validation" novalidate>
            @csrf
            <div class="modal-content" id="new-students">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="error"></div>
                <div id="success"></div>
                <div class="modal-body " style="height: 600px; overflow-Y: scroll;">
                    <p>Please provide a legitimate email address for your student that is actively monitored by them.
                        Their country is required to forward applications to our partner schools. Note: ApplyBoard will
                        not communicate with your student via email or other methods.</p>

                    <div class="mb-3">
                       
                        <label for="validationCustom01" class="form-label">CONTACT INFORMATION</label>
                        <input type="email" name="email" class="form-control" value="" id="validationCustom01" placeholder="email" required>
                        <input type="tel" name="phone" class="form-control mt-3" id="validationCustom02" placeholder="Phone Number" required>
                       
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                        

                    </div>
                    <div class="mb-3">
                        <label class="form-label">PERSONAL INFORMATION</label>
                        <input type="text" class="form-control mb-3" name="fname" placeholder="Given Name" required>
                        <input type="text" class="form-control mb-3" name="lname" placeholder="Last Name" required>
                        <input type="text" class="form-control mb-3" name="family_name"
                            placeholder="Family Name">
                        <input type="date" class="form-control mb-3" name="dob" placeholder="Birth Date" required>
                        <select class="form-select " name="citizenship" aria-label="Default select example">
                            <option selected>Country of Citizenship</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">
                                    {{ $country->country }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 gndr-ads">
                        <label class="form-label">Gender</label>
                        <div class="d-flex flex-row sg">
                            <div class="w-100 me-3 d-flex align-items-center">
                                <input class="mt-1 d-none" type="radio" name="gender" id="radiomale"
                                    value="male" checked>
                                <label class="w-100 pt-3 ps-2" for="radiomale">Male</label>
                            </div>
                            <div class="w-100 d-flex align-items-center">
                                <input class="mt-1 d-none" type="radio" name="gender" value="female"
                                    id="radiofemale" required>
                                <label class="w-100 pt-3 ps-2" for="radiofemale">Female</label>
                            </div>

                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="term_conditions" type="checkbox" value="1" required
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I confirm that I have received express written consent from the student whom I am creating
                            this profile for and I can provide proof of their consent upon request. To learn more please
                            refer to the <a href="#">Personal Data Consent</a> article.
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn px-4" style="background-color: #FFE5E4;"
                        data-bs-dismiss="modal">Cancel</button>
                    <input type="hidden" id="agent_id" name="agent_id" value="{{ Auth::user()->id }}">
                    <button type="button" class="btn btn-primary px-4 bg float-end"
                        onclick="student_regi_agent();">Create Student</button>
                </div>
            </div>
        </form>
    </div>
</div>



<style>
    .accordion-button::after {
        position: absolute !important;
        bottom: 8px !important;
    }
    
    .avatar-main-new{
        margin-left:2rem !important;
    }
    .appFee-main-new{
        padding-left:15rem !important;
    }
  .select2-results__option--highlighted[aria-selected]{
      background-color:#f8f9fa !important;
      
  }
  .select2-results__option--highlighted[aria-selected]:hover{
      color:#000 !important;
  }
  .select2-results__options{
      box-shadow: 0 -2em 2em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
    0.1em 0.1em 1em rgba(0, 0, 0, 0.3);
      
  }
  /*.tutionFee-icon{*/
  /*    background-color:#FF7F50;*/
  /*}*/

    @media (min-width: 300px) and (max-width: 600px)
    {
        #sorting {
            padding: 0px 35px 0px 8px;
        }
        
    }
    .w-5.h-5 {
        width: 2%;
    }

    .css-6g7jag {
        color: #fff;
    }

    .loadern {
        position: relative;
        top: -27px;
        right: -89%;
        z-index: 999999999999;
    }

    #search-res {
        z-index: 9999999;
        width: 83%;
        overflow: scroll;
        height: 36vh;
    }

    .fw-bold.ptitle {
        font-size: 20px;
        margin-left: 4%;
    }
    
    .accordion-button::after{
        position:absolute;
        bottom: 15px;
    }
    
    .testimonial-card .card-up {
     height: 60px;
     overflow: hidden;
     border-top-left-radius: 0.25rem;
     border-top-right-radius: 0.25rem;
}

.testimonial-card .avatar {
    width: 50px;
    margin-top: -31px;
    overflow: hidden;
    border: 3px solid #fff;
    border-radius: 50%;
}
.tution-feeProg-main{
    border-radius:5px !important;
}
</style>



@endsection
