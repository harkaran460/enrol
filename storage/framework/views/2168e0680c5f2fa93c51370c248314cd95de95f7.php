<?php $__env->startSection('content'); ?>
  
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Summary</h4>

                        <div>
                            <button type="button" class="btn btn-primary rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#addNewStudent">Add new Student</button>
                        </div>
                    </div>
                </div>  
            </div>


            <div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="" method="POST" id="student_regi">
                    <?php echo csrf_field(); ?>
                    <div class="modal-dialog" style="max-width: 600px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body " style="height: 600px; overflow-Y: scroll;">
                                <p>Please provide a legitimate email address for your student that is actively monitored by them. Their country is required to forward applications to our partner schools. Note: ApplyBoard will not communicate with your student via email or other methods.</p>
                                <div id="error"></div>
                                <div id="success"></div>
                                <div class="mb-3">
                                    <label class="form-label">CONTACT INFORMATION 222</label>
                                    <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">PERSONAL INFORMATION</label>
                                    <input type="text" class="form-control mb-3" name="fname" placeholder="First Name">
                                    <input type="text" class="form-control mb-3" name="lname" placeholder="Middle Name">
                                    <input type="text" class="form-control mb-3" name="family_name" placeholder="Last Name">
                                    <input type="date" class="form-control mb-3" name="dob" placeholder="Birth Date">
                                    <select class="form-select " name="citizenship" aria-label="Default select example">
                                        <option selected>Country of Citizenship</option>
                                        <?php $countries = getCountry();?>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country->id); ?>">
                                                <?php echo e($country->country); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                id="radiofemale">
                                            <label class="w-100 pt-3 ps-2" for="radiofemale">Female</label>
                                        </div>
            
                                    </div>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" name="term_conditions" type="checkbox" value="1"
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
                                <input type="hidden" id="agent_id" name="agent_id" value="<?php echo e(Auth::user()->id); ?>">
                                <button type="button" class="btn btn-primary px-4 bg float-end"
                                    onclick="student_regi_agent();">Create Student</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> 
            
            <div class="row"> 
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mini-stats-wid">
                                <div class="card-body"> 
                                    <div class="float-end">
                                        <div class="dashboard-icon"> 
                                            <i class="bx bx-archive-in"></i> 
                                         </div>
                                    </div>
                                    <p>All Application</p> 
                                    <div class="justify-content-center"> 
                                        <h3>4.710</h3> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mini-stats-wid">
                                <div class="card-body"> 
                                    <div class="float-end">
                                        <div class="dashboard-icon"> 
                                            <i class="fa-solid fa-credit-card"></i> 
                                         </div>
                                    </div>
                                    <p>Offers Received</p> 
                                    <div class="justify-content-center"> 
                                        <h3>4.710</h3> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mini-stats-wid">
                                <div class="card-body"> 
                                    <div class="float-end">
                                        <div class="dashboard-icon">  
                                            <i class="fa-solid fa-users"></i>
                                         </div>
                                    </div>
                                    <p>Total Students</p> 
                                    <div class="justify-content-center"> 
                                        <h3>4.710</h3>  
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mini-stats-wid">
                                <div class="card-body"> 
                                    <div class="float-end">
                                        <div class="dashboard-icon">
                                            <i class="fa-solid fa-money-bill"></i>
                                         </div>
                                    </div>
                                    <p>Payments</p> 
                                    <div class="justify-content-center"> 
                                        <h3>4.710</h3> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="sales-report"> 
                                <div class="d-flex justify-content-between heading mb-md-4">
                                    <h4> Sales Report </h4> 
                                    <div class="">
                                        <div class="icon-calendar">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" id="litepicker" class="form-control pl-10" placeholder="11 Jun, 2022 - 20 Jul, 2022">
                                    </div>
                                </div>
                                <div class="main-sale-report-box rounded-3"> 
                                    <div id="app">
                                        <div id="chart">
                                            <apexchart type="bar" height="350" :options="chartOptions" :series="series"></apexchart>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex justify-content-between heading">
                                <h4> Weekly Top Seller </h4> 
                                <a href="#"> See More</a>
                            </div>
                            <div class="main-sale-report-box rounded-3"> 
                                <div>
                                    <canvas id="myChart" style="height: 250px;width:100%"></canvas>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="w-2 h-2 bg-primary rounded-full me-2"></div>
                                        <span class="truncate">17 - 30 Years old</span>
                                        <span class="font-medium ms-auto">55%</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <div class="w-2 h-2 bg-info rounded-full me-2"></div>
                                        <span class="truncate">31 - 50 Years old</span>
                                        <span class="font-medium ms-auto">49%</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <div class="w-2 h-2 bg-warning rounded-full me-2"></div>
                                        <span class="truncate">&gt;= 50 Years old</span>
                                        <span class="font-medium ms-auto">44%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex justify-content-between heading">
                                <h4> Weekly Top Seller </h4> 
                                <a href="#"> See More</a>
                            </div>
                            <div class="main-sale-report-box rounded-3"> 
                                <div>
                                    <canvas id="myBorder" style="height: 250px;width:100%"></canvas>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="w-2 h-2 bg-primary rounded-full me-2"></div>
                                        <span class="truncate">17 - 30 Years old</span>
                                        <span class="font-medium ms-auto">55%</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <div class="w-2 h-2 bg-info rounded-full me-2"></div>
                                        <span class="truncate">31 - 50 Years old</span>
                                        <span class="font-medium ms-auto">49%</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <div class="w-2 h-2 bg-warning rounded-full me-2"></div>
                                        <span class="truncate">&gt;= 50 Years old</span>
                                        <span class="font-medium ms-auto">44%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row"> 
                        <div class="col-xl-6 summary-box">
                            <h5><b>Revenue</b></h5>
                            <div class="main-sale-report-box">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="fw-medium">Potential Commission</h4>
                                            <h6 class="mb-0">4</h6>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center"> 
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="fa-solid fa-file-pen font-size-24 ps-2"></i>
                                            </span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-sale-report-box">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="fw-medium">Earned</h4>
                                            <h6 class="mb-0">0</h6>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center"> 
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="fa-solid fa-coins font-size-24"></i>
                                            </span> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="main-sale-report-box">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="fw-medium">Withdrawn</h4>
                                            <h6 class="mb-0">0</h6>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center"> 
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="fa-solid fa-coins font-size-24"></i>
                                            </span> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <div class="col-xl-6">  
                            <h5 class="mb-3"><b>Team Performance</b></h5>

                                <div class="card rounded-3"> 
                                 <div class="card-body"> 
                                    <div class="overflow-auto">
                                        <table class="table table-bordered" id="csmTable" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th ><span> Sub Agent Name </span></th>
                                                    <th><span> Total Appplication </span></th>
                                                    <th><span>Paid Applications </span></th> 
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                <tr> 
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td>  
                                                </tr>
                                                <tr>
                                                    <td>Diksha Magotra</td>  
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td>  
                                                </tr>
                                                <tr>
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td> 
                                                </tr> 
                                                <tr>
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td> 
                                                </tr> 
                                                <tr>
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td> 
                                                    <td>Diksha Magotra</td> 
                                                </tr>  
                                            </tbody>
                                        </table> 
 
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
   
                    <div class="row">
                        <div class="col-md-12 mb-2 pt-2">
                            <h5 class="mb-3"><b> School</b></h5>
                            <div class="bg-white p-3">  
                                <div class="my-4 row text-center">
                                    <div class="col-md-2">
                                        <div class="circle-box">
                                            4
                                        </div>
                                        <div class="collage-name">
                                            <h5>Cheshire College South and West</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="circle-box">
                                            4
                                        </div>
                                        <div class="collage-name">
                                            <h5>Cheshire College South and West</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="circle-box">
                                            4
                                        </div>
                                        <div class="collage-name">
                                            <h5>Cheshire College South and West</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="circle-box">
                                            4
                                        </div>
                                        <div class="collage-name">
                                            <h5>Cheshire College South and West</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="circle-box">
                                            4
                                        </div>
                                        <div class="collage-name">
                                            <h5>Cheshire College South and West</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="circle-box">
                                            4
                                        </div>
                                        <div class="collage-name">
                                            <h5>Cheshire College South and West</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-xl-12">
                            <h5 class="mb-3"><b>Application Reminders</b></h5>
                            <div class="bg-white p-3"> 
                                <div class="overflow-auto">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>APPLICATION ID</th>
                                            <th>STUDENT NAME</th>
                                            <th>REMINDER TIME</th>
                                            <th>CONVERSATION</th>
                                            <th>REMARKS</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2020</td>
                                                <td>Sk Verma</td>
                                                <td>10:25 Am</td>
                                                <td>1001</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td>2020</td>
                                                <td>Sk Verma</td>
                                                <td>10:25 Am</td>
                                                <td>1001</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td>2020</td>
                                                <td>Sk Verma</td>
                                                <td>10:25 Am</td>
                                                <td>1001</td>
                                                <td>Yes</td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-xl-3"> 
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-white p-3">
                                        <h5 class="text-white"><b>Welcome back</b></h5>
                                        <p><b>Sukhwinder Singh.</b></p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assetsAgent/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-2">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <img src="assetsAgent/img/profile-icon.png" alt="" class="img-thumbnail rounded-circle">
                                    </div>
                                </div> 
                                <div class="col-sm-8">
                                    <div class="pt-3"> 
                                        <div class="row"> 
                                            <div class="col-5">
                                                <h5 class="font-size-15">$1245</h5>
                                                <p class="text-muted mb-0">Revenue</p>
                                            </div>
                                            <div class="col-7">
                                                <div class="pt-2"> 
                                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="card rounded-3">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Monthly Applcations</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="text-muted">This month</p>
                                    <h3>$34,252</h3>
                                    <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>

                                    <div class="mt-4">
                                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-4 mt-sm-0">
                                        <div id="radialBar-chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
                        </div>
                    </div>

                    <div class="card rounded-3">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Application Status</h4> 

                            <div class="table-responsive mt-4">
                                <table class="table align-middle table-nowrap">
                                    <tbody>
                                        <tr>
                                            <td style="width: 30%">
                                                <p class="mb-0">San Francisco</p>
                                            </td>
                                            <td style="width: 25%">
                                                <h5 class="mb-0">1,456</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Los Angeles</p>
                                            </td>
                                            <td>
                                                <h5 class="mb-0">1,123</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">San Diego</p>
                                            </td>
                                            <td>
                                                <h5 class="mb-0">1,026</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%">
                                                <p class="mb-0">San Francisco</p>
                                            </td>
                                            <td style="width: 25%">
                                                <h5 class="mb-0">1,456</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">San Diego</p>
                                            </td>
                                            <td>
                                                <h5 class="mb-0">1,026</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Los Angeles</p>
                                            </td>
                                            <td>
                                                <h5 class="mb-0">1,123</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 

                    <div class="mrgt-15 wallet-summary-holder">
                        <div class="summary-wrap">
                            <div class="w-100 mrgb-15 wallet-head">
                                <h4 class="colorb x18 py-2">Wallet Details</h4>
                            </div>
                            <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content ">
                                <div class="wc-left">
                                    <p class="x16 fw600">CAD</p>
                                </div>
                                <div class="wc-rgt">
                                    <p class="x16 fw600">$ 0</p>
                                </div>
                            </div>
                            <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                                <div class="wc-left">
                                    <p class="x16 fw600">EUR</p>
                                </div>
                                <div class="wc-rgt">
                                    <p class="x16 fw600">€ 0</p>
                                </div>
                            </div>
                            <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                                <div class="wc-left">
                                    <p class="x16 fw600">AUD</p>
                                </div>
                                <div class="wc-rgt">
                                    <p class="x16 fw600">$ 0</p>
                                </div>
                            </div>
                            <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                                <div class="wc-left">
                                    <p class="x16 fw600">USD</p>
                                </div>
                                <div class="wc-rgt">
                                    <p class="x16 fw600">$ 0</p>
                                </div>
                            </div>
                            <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                                <div class="wc-left">
                                    <p class="x16 fw600">GBP</p>
                                </div>
                                <div class="wc-rgt">
                                    <p class="x16 fw600">£ 0</p>
                                </div>
                            </div>
                            <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                                <div class="wc-left">
                                    <p class="x16 fw600">NZD</p>
                                </div>
                                <div class="wc-rgt">
                                    <p class="x16 fw600">$ 0</p>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="cmb-3 pt-2">
                        <div class="bg-white p-3 d-flex mb-2">
                            <div class="dashboard-user-img">
                                <img src="assetsAgent/img/profile-icon.png" alt="">
                            </div>
                            <div class="ps-3 dashboard-user-content">
                                <p><b>Jatin</b></p>
                                <p>Client Relationship Manager</p>
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:+123456789">+123456789</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-3 d-flex mb-2">
                            <div class="dashboard-user-img">
                                <img src="assetsAgent/img/profile-icon.png" alt="">
                            </div>
                            <div class="ps-3 dashboard-user-content">
                                <p><b>Jatin</b></p>
                                <p>Client Relationship Manager</p>
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:+123456789">+123456789</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-3 d-flex mb-2">
                            <div class="dashboard-user-img">
                                <img src="assetsAgent/img/profile-icon.png" alt="">
                            </div>
                            <div class="ps-3 dashboard-user-content">
                                <p><b>Jatin</b></p>
                                <p>Client Relationship Manager</p>
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:+123456789">+123456789</a>
                                </div>
                            </div>
                        </div>
                    </div>
 
                </div>
            </div> 


            
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/dashboard.blade.php ENDPATH**/ ?>