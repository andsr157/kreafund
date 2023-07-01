<div class="row">
    <div class="col-md-12 grid-margin">

        <div class="started">
            <div class="card">
                <div class="text-center my-4">
                <div class="h4" style="font-size: 1.4rem; font-weight:800; color:#282828;"><?=$project->title?></div>
                <span style="color: #656969; font-size:1rem;">by <?=$project->username?></span>
                </div>
                
                <div class="text-editor form-group px-4" style="background: transparent;">
                    <textarea name="verification_editor" id="verification_editor" class="px-0 w-100 " cols="1" rows="1"><?= isset($row->content) ? $row->content:'';?></textarea>
                </div>

                <div class="buttonProcess d-flex justify-content-center px-5">
                    <a href="" class="px-3">
                        <button class="btn text-light p-3 px-4" style="background-color: #2752ff;">Revisi  </button>
                    </a>
                    <a href=""  class="px-3 pb-4">
                        <button class="btn text-light p-3 px-4" style="background-color: #ed4b4b;">Rejected</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>