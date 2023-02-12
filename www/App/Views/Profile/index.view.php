<?php /**@var \App\Models\Profile[] $data */ ?>
<?php /**@var \App\Models\Users[] $data2 */ ?>

<div class="container">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50"><?=$data2->getEmail()?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Age</label><input type="number" class="form-control" placeholder="enter age" value=""></div>
                        <div class="col-md-12"><label class="labels">Faculty</label><input type="text" class="form-control" placeholder="enter faculty" value=""></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email address" value=""></div>
                    </div>

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Changes</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>