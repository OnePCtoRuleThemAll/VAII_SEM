<?php /** @var \App\Core\IAuthenticator $auth */ ?>
<?php /** @var \App\Models\Profile[] $data */?>

<script src="public/js/profiles.js"></script>

<div class="container">
    <h2>All profiles</h2>
    <div class="input-group rounded">
        <input type="search" class="form-control rounded" placeholder="Filter" aria-label="Search" aria-describedby="search-addon" id="search" onkeyup="filterProfiles(this.value)"/>
    </div>

    <div class="table-responsive" id="profileTable">
        <table class="table table-striped table-hover table-bordered border-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Age</th>
                <th scope="col">Faculty</th>
            </tr>
            </thead>
            <tbody class="table-group-divider" id="tableBody">
            <?php foreach ($data as $row) {?>
                <tr class="table-active">
                    <td><?=$row->getId()?></td>
                    <td><?=$row->getName()?></td>
                    <td><?=$row->getSurename()?></td>
                    <td><?=$row->getAge()?></td>
                    <td><?=$row->getFaculty()?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="container-content">
            <a href="?c=statistics&a=add" class="btn btn-success">Add</a>
        </div>
    </div>
</div>
