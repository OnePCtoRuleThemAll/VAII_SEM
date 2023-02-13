<?php /**@var \App\Models\Profile $data */ ?>

<script src="public/js/code.js"></script>

<div class="container">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src=<?=$data->getPhoto()?>></div>
            </div>
            <div class="col-md-3 border-right">
                <div class="p-1 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="text-right"><?=$data->getName()?> <?=$data->getSurename()?></h3>
                    </div>
                    <div class="row mt-3">
                        <p>Age: <?=$data->getAge()?></p>
                        <p>Faculty: <?=$data->getFaculty()?></p>
                    </div>

                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-1 py-5">
                    <form id="taskCodeForm">
                        <div class="form-row ">
                            <div class="col-5">
                                <label for="taskCode">Task code</label>
                                <input type="text" class="form-control" id="taskCode" placeholder="Enter task code" aria-describedby="taskHelp">
                                <small id="taskHelp" class="form-text text-muted">Your target will give you code</small>
                            </div>
                        </div>
                        <button class="btn btn-danger" onclick="getCode()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">

            </div>
            <div class="col-md-5 border-right text-center">
                <h1 id="taskState">Status: ACTIVE</h1>
            </div>
            <div class="col-md-3 border-right">

            </div>

        </div>
    </div>
</div>
