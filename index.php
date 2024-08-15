<?php
include_once('layout/header.php');
include_once('layout/menu.php');


echo '</div>';
echo '        </div>';
echo '        <div id="main">';
echo '            <header class="mb-3">';
echo '                <a href="#" class="burger-btn d-block d-xl-none">';
echo '                    <i class="bi bi-justify fs-3"></i>';
echo '                </a>';
echo '            </header>';
echo '            ';
echo '<div class="page-heading">';
echo '    <h3>Profile Statistics</h3>';
echo '</div>';
echo '<div class="page-content">';
echo '    <section class="row">';
echo '        <div class="col-12 col-lg-9">';
echo '            <div class="row">';
echo '                <div class="col-6 col-lg-3 col-md-6">';
echo '                    <div class="card">';
echo '                        <div class="card-body px-4 py-4-5">';
echo '                            <div class="row">';
echo '                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">';
echo '                                    <div class="stats-icon purple mb-2">';
echo '                                        <i class="iconly-boldShow"></i>';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">';
echo '                                    <h6 class="text-muted font-semibold">Profile Views</h6>';
echo '                                    <h6 class="font-extrabold mb-0">112.000</h6>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '                <div class="col-6 col-lg-3 col-md-6">';
echo '                    <div class="card">';
echo '                        <div class="card-body px-4 py-4-5">';
echo '                            <div class="row">';
echo '                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">';
echo '                                    <div class="stats-icon blue mb-2">';
echo '                                        <i class="iconly-boldProfile"></i>';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">';
echo '                                    <h6 class="text-muted font-semibold">Followers</h6>';
echo '                                    <h6 class="font-extrabold mb-0">183.000</h6>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '                <div class="col-6 col-lg-3 col-md-6">';
echo '                    <div class="card">';
echo '                        <div class="card-body px-4 py-4-5">';
echo '                            <div class="row">';
echo '                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">';
echo '                                    <div class="stats-icon green mb-2">';
echo '                                        <i class="iconly-boldAdd-User"></i>';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">';
echo '                                    <h6 class="text-muted font-semibold">Following</h6>';
echo '                                    <h6 class="font-extrabold mb-0">80.000</h6>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '                <div class="col-6 col-lg-3 col-md-6">';
echo '                    <div class="card">';
echo '                        <div class="card-body px-4 py-4-5">';
echo '                            <div class="row">';
echo '                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">';
echo '                                    <div class="stats-icon red mb-2">';
echo '                                        <i class="iconly-boldBookmark"></i>';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">';
echo '                                    <h6 class="text-muted font-semibold">Saved Post</h6>';
echo '                                    <h6 class="font-extrabold mb-0">112</h6>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '            </div>';
echo '            <div class="row">';
echo '                <div class="col-12">';
echo '                    <div class="card">';
echo '                        <div class="card-header">';
echo '                            <h4>Profile Visit</h4>';
echo '                        </div>';
echo '                        <div class="card-body">';
echo '                            <div id="chart-profile-visit"></div>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '            </div>';
echo '            <div class="row">';
echo '                <div class="col-12 col-xl-4">';
echo '                    <div class="card">';
echo '                        <div class="card-header">';
echo '                            <h4>Profile Visit</h4>';
echo '                        </div>';
echo '                        <div class="card-body">';
echo '                            <div class="row">';
echo '                                <div class="col-6">';
echo '                                    <div class="d-flex align-items-center">';
echo '                                        <svg class="bi text-primary" width="32" height="32" fill="blue"';
echo '                                            style="width:10px">';
echo '                                            <use';
echo '                                                xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />';
echo '                                        </svg>';
echo '                                        <h5 class="mb-0 ms-3">Europe</h5>';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="col-6">';
echo '                                    <h5 class="mb-0">862</h5>';
echo '                                </div>';
echo '                                <div class="col-12">';
echo '                                    <div id="chart-europe"></div>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="row">';
echo '                                <div class="col-6">';
echo '                                    <div class="d-flex align-items-center">';
echo '                                        <svg class="bi text-success" width="32" height="32" fill="blue"';
echo '                                            style="width:10px">';
echo '                                            <use';
echo '                                                xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />';
echo '                                        </svg>';
echo '                                        <h5 class="mb-0 ms-3">America</h5>';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="col-6">';
echo '                                    <h5 class="mb-0">375</h5>';
echo '                                </div>';
echo '                                <div class="col-12">';
echo '                                    <div id="chart-america"></div>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="row">';
echo '                                <div class="col-6">';
echo '                                    <div class="d-flex align-items-center">';
echo '                                        <svg class="bi text-danger" width="32" height="32" fill="blue"';
echo '                                            style="width:10px">';
echo '                                            <use';
echo '                                                xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />';
echo '                                        </svg>';
echo '                                        <h5 class="mb-0 ms-3">Indonesia</h5>';
echo '                                    </div>';
echo '                                </div>';
echo '                                <div class="col-6">';
echo '                                    <h5 class="mb-0">1025</h5>';
echo '                                </div>';
echo '                                <div class="col-12">';
echo '                                    <div id="chart-indonesia"></div>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '                <div class="col-12 col-xl-8">';
echo '                    <div class="card">';
echo '                        <div class="card-header">';
echo '                            <h4>Latest Comments</h4>';
echo '                        </div>';
echo '                        <div class="card-body">';
echo '                            <div class="table-responsive">';
echo '                                <table class="table table-hover table-lg">';
echo '                                    <thead>';
echo '                                        <tr>';
echo '                                            <th>Name</th>';
echo '                                            <th>Comment</th>';
echo '                                        </tr>';
echo '                                    </thead>';
echo '                                    <tbody>';
echo '                                        <tr>';
echo '                                            <td class="col-3">';
echo '                                                <div class="d-flex align-items-center">';
echo '                                                    <div class="avatar avatar-md">';
echo '                                                        <img src="assets/images/faces/5.jpg">';
echo '                                                    </div>';
echo '                                                    <p class="font-bold ms-3 mb-0">Si Cantik</p>';
echo '                                                </div>';
echo '                                            </td>';
echo '                                            <td class="col-auto">';
echo '                                                <p class=" mb-0">Congratulations on your graduation!</p>';
echo '                                            </td>';
echo '                                        </tr>';
echo '                                        <tr>';
echo '                                            <td class="col-3">';
echo '                                                <div class="d-flex align-items-center">';
echo '                                                    <div class="avatar avatar-md">';
echo '                                                        <img src="assets/images/faces/2.jpg">';
echo '                                                    </div>';
echo '                                                    <p class="font-bold ms-3 mb-0">Si Ganteng</p>';
echo '                                                </div>';
echo '                                            </td>';
echo '                                            <td class="col-auto">';
echo '                                                <p class=" mb-0">Wow amazing design! Can you make another tutorial for';
echo '                                                    this design?</p>';
echo '                                            </td>';
echo '                                        </tr>';
echo '                                    </tbody>';
echo '                                </table>';
echo '                            </div>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '            </div>';
echo '        </div>';
echo '        <div class="col-12 col-lg-3">';
echo '            <div class="card">';
echo '                <div class="card-body py-4 px-4">';
echo '                    <div class="d-flex align-items-center">';
echo '                        <div class="avatar avatar-xl">';
echo '                            <img src="assets/images/faces/1.jpg" alt="Face 1">';
echo '                        </div>';
echo '                        <div class="ms-3 name">';
echo '                            <h5 class="font-bold">John Duck</h5>';
echo '                            <h6 class="text-muted mb-0">@johnducky</h6>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '            </div>';
echo '            <div class="card">';
echo '                <div class="card-header">';
echo '                    <h4>Recent Messages</h4>';
echo '                </div>';
echo '                <div class="card-content pb-4">';
echo '                    <div class="recent-message d-flex px-4 py-3">';
echo '                        <div class="avatar avatar-lg">';
echo '                            <img src="assets/images/faces/4.jpg">';
echo '                        </div>';
echo '                        <div class="name ms-4">';
echo '                            <h5 class="mb-1">Hank Schrader</h5>';
echo '                            <h6 class="text-muted mb-0">@johnducky</h6>';
echo '                        </div>';
echo '                    </div>';
echo '                    <div class="recent-message d-flex px-4 py-3">';
echo '                        <div class="avatar avatar-lg">';
echo '                            <img src="assets/images/faces/5.jpg">';
echo '                        </div>';
echo '                        <div class="name ms-4">';
echo '                            <h5 class="mb-1">Dean Winchester</h5>';
echo '                            <h6 class="text-muted mb-0">@imdean</h6>';
echo '                        </div>';
echo '                    </div>';
echo '                    <div class="recent-message d-flex px-4 py-3">';
echo '                        <div class="avatar avatar-lg">';
echo '                            <img src="assets/images/faces/1.jpg">';
echo '                        </div>';
echo '                        <div class="name ms-4">';
echo '                            <h5 class="mb-1">John Dodol</h5>';
echo '                            <h6 class="text-muted mb-0">@dodoljohn</h6>';
echo '                        </div>';
echo '                    </div>';
echo '                    <div class="px-4">';
echo '                        <button class="btn btn-block btn-xl btn-outline-primary font-bold mt-3">Start Conversation</button>';
echo '                    </div>';
echo '                </div>';
echo '            </div>';
echo '            <div class="card">';
echo '                <div class="card-header">';
echo '                    <h4>Visitors Profile</h4>';
echo '                </div>';
echo '                <div class="card-body">';
echo '                    <div id="chart-visitors-profile"></div>';
echo '                </div>';
echo '            </div>';
echo '        </div>';
echo '    </section>';
echo '</div>';
echo '';
include_once('layout/footer.php');
?>