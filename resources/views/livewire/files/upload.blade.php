<div>
    <form wire:submit.prevent="fileUpload" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputTitle">Başlık</label>
            <input wire:model="title" type="text" class="form-control" id="exampleInputTitle" placeholder="Başlık">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input wire.model="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
</div>
