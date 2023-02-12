<?php /**@var \App\Models\Actual[] $data */ ?>

<div class="container">
    <h2>Individual players</h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered border-dark">
            <thead>
            <tr>
                <th scope="col">Current placement</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Points</th>
                <th scope="col">Note</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php $i = 1?>
            <?php foreach ($data[0] as $row) {?>
            <tr class="table-active">
                <th><?=$i?></th>
                <td><?=$row->getName()?></td>
                <td><?=$row->getSurename()?></td>
                <td><?=$row->getPoints()?></td>
                <td><?=$row->getNote()?></td>
                <td>
                    <a href="?c=statistics&a=delete&id=<?=$row->getId()?>" class="btn btn-danger">Delete</a>
                    <a href="?c=statistics&a=edit&id=<?=$row->getId()?>" class="btn btn-primary">Edit</a>

                </td>
            </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
        <div class="container-content">
            <a href="?c=statistics&a=add" class="btn btn-success">Add</a>
        </div>
    </div>
</div>

<div class="container">
    <h2>Teams</h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered border-dark">
            <thead>
            <tr>
                <th scope="col">Current placement</th>
                <th scope="col">Name</th>
                <th scope="col">Points</th>
                <th scope="col">Note</th>
                <th></th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php $i = 1?>
            <?php foreach ($data[1] as $row) {?>
                <tr class="table-active">
                    <th><?=$i?></th>
                    <td><?=$row->getTeamName()?></td>
                    <td><?=$row->getPoints()?></td>
                    <td><?=$row->getNote()?></td>
                    <td></td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </div>
</div>
