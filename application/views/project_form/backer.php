<section class="start-cat" id="start-cat">
    <div class="container">
        <div class="row px-5 mb-5">
            <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item mx-5 cat1">
                    <a href="">
                        <div class="ikon border-active">
                            <span>🤞</span>
                            <p class="mt-3">Backer</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="basic-title">
    <h2 class="text-center">List Of your backer</h2>
    <h3 class="text-center ">Fullfil your reward promise to your backer</h3>
</div>
<div class="container-fluid px-0 border-bottom border-2 my-5"></div>
<section class="backer">
    <div class="container p-5">
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-custom" id="table_backer">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Backer</th>
                            <th>Project</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($project as $index => $data) { ?>
                        
                            <tr>
                                <td><?=$index+1?></td>
                               
                                <td>
                                    <span class="ml-2"><?=$data->name?></span>
                                </td>
                                <td>
                                    <span class="ml-2"><?=$data->title?></span>
                                </td>
                                <td>
                                    <span class="ml-2"><?=$data->address?></span>
                                </td>
                                <td>
                                    <button class="btn btn-dark rounded-0 px-5 detailBacker" data-bs-toggle="modal" data-bs-target="#detailBacker"
                                    data-reward_id = <?=$data->reward_id?>>Detail reward</button>
                                </td>
                            </tr>
                        <?php
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>