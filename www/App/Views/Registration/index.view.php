<section>
    <form action="?c=registration&a=register" method="post" name="register" id="register">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration</h3>
                            <form>
                                <div class="row">
                                    <div class="mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Username</label>
                                            <input type="text" id="username" name="username" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <label class="form-label">Re-enter password</label>
                                            <input type="password" class="form-control form-control-lg" id="password2" name="password2"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label">Email</label>
                                            <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <button class="btn btn-primary" name="submitbtn" id="submitbtn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>