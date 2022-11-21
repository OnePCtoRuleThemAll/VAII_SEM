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
                <th scope="col">Edit section</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php $i = 1?>
            <?php foreach ($data as $row) {?>
            <tr class="table-active">
                <th><?=$i?></th>
                <td><?=$row->getName()?></td>
                <td><?=$row->getSurename()?></td>
                <td><?=$row->getPoints()?></td>
                <td><?=$row->getNote()?></td>
                <td>
                    <a href="?c=statistics&a=delete&id=<?=$row->getId()?>" class="btn btn-danger">Delete</a>
                    <a href="?c=statistics&a=edit&id=<?=$row->getId()?>" class="btn btn-primary">Edit</a>
                    <a href="?c=statistics&a=add" class="btn btn-secondary">Add</a>
                </td>
            </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
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
                <th scope="col">Surname</th>
                <th scope="col">Points</th>
                <th scope="col">Note</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <tr class="table-active">
                <th scope="row">1</th>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
            </tr>
            <tr class="table-active">
                <th scope="row">3</th>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
            </tr>
            <tr class="table-active">
                <th scope="row">5</th>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
