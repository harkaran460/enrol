
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning alert-dismissible fade show fs-5 py-2" role="alert">
                        Exciting new updates on how to manage your leads. <a href="#">Click here to learn more</a> or
                        <a href="">switch back to the new layout</a>.
                        <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"
                            style="top: 5px;"></button>
                    </div>
                </div>
                <div class="col-12 d-flex flex-row justify-content-between align-items-center">
                    <h1>Students</h1>
                    <div class="d-flex flex-row">
                        <button class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-danger" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#student-filters" aria-controls="student-filters"><i
                                class="fa-solid fa-filter"></i> Filters </button>

                        <!--<div class="dropdown">-->
                        <!--    <button class="btn dropdown-toggle bg af-icon border-0" type="button" id="dropdownMenuButton1"-->
                        <!--        data-bs-toggle="dropdown" aria-expanded="false">-->
                        <!--        <i class="fa-solid fa-plus me-2"></i>Add new student-->
                        <!--    </button>-->
                        <!--    <ul class="dropdown-menu shadow bg-light p-0" aria-labelledby="dropdownMenuButton1">-->
                        <!--        <li><a class="dropdown-item active" href="#">Action</a></li>-->
                        <!--        <li><a class="dropdown-item" href="#">Another action</a></li>-->
                        <!--        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->

                        <div>
                            <button type="button" class="btn btn-primary rounded-pill px-3" data-bs-toggle="modal"
                                data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-2"></i> Add new
                                Student</button>
                        </div>


                       
                        
                        <div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="max-width: 600px;">
                        
                                <form action="" method="POST" id="student_regi">
                                    <?php echo csrf_field(); ?>
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
                                                <label class="form-label">CONTACT INFORMATION</label>
                                                <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">PERSONAL INFORMATION</label>
                                                <input type="text" class="form-control mb-3" name="fname" placeholder="Given Name">
                                                <input type="text" class="form-control mb-3" name="lname" placeholder="Last Name">
                                                <input type="text" class="form-control mb-3" name="family_name"
                                                    placeholder="Family Name">
                                                <input type="date" class="form-control mb-3" name="dob" placeholder="Birth Date">
                                                <select class="form-select " name="citizenship" aria-label="Default select example">
                                                    <option selected>Country of Citizenship</option>
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
                                </form>
                            </div>
                        </div>



                    </div>

                    <!--------------------Filter-------------------->
                    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="student-filters"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title fs-4">Hide/Show Columns</h3>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">

                            <ul class="nav nav-pills mb-3 d-flex flex-row flex-nowrap" id="pills-tab" role="tablist">
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Columns</button>
                                </li>
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false" disabled>Disabled</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="student-filters-tabs">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <ul class="p-0 m-0 column-check">
                                        <li><span>COLUMN HEADER</span> <a href="">hide all</a></li>
                                        <li>
                                            <hr class="w-100 my-0">
                                        </li>
                                        <li><span>Student ID</span> <input class="form-check-input" type="checkbox"
                                                value="" id="studentId"><label class="form-check-label"
                                                for="studentId">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Student Email</span> <input class="form-check-input" type="checkbox"
                                                value="" id="studentEmail"><label class="form-check-label"
                                                for="studentEmail">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>First Name</span> <input class="form-check-input" type="checkbox"
                                                value="" id="fName"><label class="form-check-label"
                                                for="fName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Last Name</span> <input class="form-check-input" type="checkbox"
                                                value="" id="lName"><label class="form-check-label"
                                                for="lName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Nationality</span> <input class="form-check-input" type="checkbox"
                                                value="" id="nationlty"><label class="form-check-label"
                                                for="nationlty">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitment Partner</span> <input class="form-check-input"
                                                type="checkbox" value="" id="recuPart"><label
                                                class="form-check-label" for="recuPart">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruiter Type</span> <input class="form-check-input" type="checkbox"
                                                value="" id="recuType"><label class="form-check-label"
                                                for="recuType">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Education</span> <input class="form-check-input" type="checkbox"
                                                value="" id="education"><label class="form-check-label"
                                                for="education">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Applications</span> <input class="form-check-input" type="checkbox"
                                                value="" id="application"><label class="form-check-label"
                                                for="application">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Lead Status</span> <input class="form-check-input" type="checkbox"
                                                value="" id="leadStat"><label class="form-check-label"
                                                for="leadStat">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">Disabled Section</div>
                            </div>

                        </div>
                    </div>
                    <!--------------------Filter-------------------->

                </div>
            </div>

        </div>

        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="row overflow-hidden" id="student-table">
                        <div class="col-12 position-relative">
                            <div class="myftable">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Actions</th>
                                            <th scope="col">Student ID</th>
                                            <th scope="col">Student Email</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Nationality</th>
                                            <th scope="col">Recruitment Partner</th>
                                            <th scope="col">Recruiter Type</th>
                                            <th scope="col">Education</th>
                                            <th scope="col">Applications</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <?php if(!empty($student_list)): ?>
                                            <?php $__currentLoopData = $student_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studentlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn border-0" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="/search-and-apply/<?php echo e($studentlist->id); ?>"><i
                                                                            class="bi bi-search"></i> Search and Apply</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="/agent-student-profile/<?php echo e($studentlist->id); ?>"><i
                                                                            class="bi bi-person"></i> Edit Profile</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="/student-profile-application/<?php echo e($studentlist->id); ?>"><i
                                                                            class="bi bi-file-earmark-text"></i> Manage
                                                                        Applications</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td><a href="/agent-student-profile/<?php echo e($studentlist->id); ?>"><?php echo e($studentlist->id); ?></a></td>
                                                    <td><a href="/agent-student-profile/<?php echo e($studentlist->id); ?>"><?php echo e($studentlist->email); ?></a></td>
                                                    <td><span><?php echo e($studentlist->name); ?></span></td>
                                                    <td><span><?php echo e($studentlist->last_name); ?></span></td>
                                                    <td><span><?php echo e($studentlist->country_of_citizenship); ?></span></td>
                                                    <td><span>NA</span></td>
                                                    <td><span>NA</span></td>
                                                    <td><span><i
                                                                class="fa-solid fa-check me-2"></i><?php echo e($studentlist->highes_education_name); ?>

                                                            (<?php echo e($studentlist->country_of_citizenship); ?>)
                                                        </span></td>
                                                    <td>
                                                        <ul>
                                                            <?php if(!empty($total_apply_count)): ?>
                                                                <?php $__currentLoopData = $total_apply_count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $totalcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($totalcount->student_id == $studentlist->id): ?>
                                                                        <li>
                                                                            <div class="text-white">
                                                                                <?php echo e($totalcount->count); ?></div>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>

                                                        </ul>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <th scope="col"><span class="fw-bold">No Teams Please Create
                                                        One.</span></th>

                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col d-flex justify-content-start align-items-center py-3">

                    <div class="dropdown d-flex flex-row border-end pe-2">
                        <span class="d-flex align-items-center ">Row:</span>
                        <form method="GET" action="/students" id="students">
                            <select class="form-select form-select-sm" name="studentqty" onchange="this.form.submit()">
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </form>
                    </div>

                    <nav aria-label="Page navigation example " class="d-flex px-3">
                        <div class="pagination-wrapper">
                            <?php echo e($student_list->links()); ?>

                        </div>

                        <!--<ul class="pagination p-0 m-0 pe-3">-->
                        <!--    <li class="page-item">-->
                        <!--        <a class="page-link" href="#" aria-label="Previous">-->
                        <!--            <span aria-hidden="true">&laquo;</span>-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="page-item"><a class="page-link" href="#">1</a></li>-->
                        <!--    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                        <!--    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                        <!--    <li class="page-item">-->
                        <!--        <a class="page-link" href="#" aria-label="Next">-->
                        <!--            <span aria-hidden="true">&raquo;</span>-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--</ul>-->
                        <!--<span class="d-flex align-items-center border-startps-2">1 - 20 of 292</span>-->-->

                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/students.blade.php ENDPATH**/ ?>