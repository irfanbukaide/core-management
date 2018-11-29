<form>
    <div class="row">
        <div class="form-group col">
            <label for="ipaddress">IP Address</label>
            <input type="text" class="form-control" id="ipaddress" name="ipaddress"
                   placeholder="Type an ip address">
        </div>
        <div class="form-group col">
            <label for="hostname">Hostname</label>
            <input type="text" class="form-control" id="hostname" name="hostname"
                   placeholder="Type a hostname">
        </div>
        <div class="form-group col">
            <label for="brand">Brands</label>
            <select id="brand" name="brand[]" class="filter-select form-control"
                    multiple="multiple"
                    data-placeholder="Select a brands">
                <?php if ($brands != NULL): ?>
                    <?php foreach ($brands as $brand): ?>
                        <option value="<?= $brand->brand_id; ?>"><?= $brand->brand_name; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label for="type">Types</label>
            <select id="type" name="type[]" class="filter-select form-control"
                    multiple="multiple"
                    data-placeholder="Select a types">
                <?php if ($types != NULL): ?>
                    <?php foreach ($types as $type): ?>
                        <option value="<?= $type->type_id; ?>"><?= $type->type_name; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>
        <div class="form-group col">
            <label for="location">Locations</label>
            <select id="location" name="location[]" class="filter-select form-control"
                    multiple="multiple"
                    data-placeholder="Select a locations">
                <?php if ($locations != NULL): ?>
                    <?php foreach ($locations as $location): ?>
                        <option value="<?= $location->location_id; ?>"><?= $location->location_name; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>

        <div class="form-group col">
            <label for="tags">Tags</label>
            <select id="tags" name="tags[]" class="filter-select form-control"
                    multiple="multiple"
                    data-placeholder="Select a tags">
                <?php if ($tags != NULL): ?>
                    <?php foreach ($tags as $tag): ?>
                        <option value="<?= $tag->tag_id; ?>"><?= $tag->tag_name; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>
        <div class="form-group col">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control">
                <option value="">Select a status</option>
                <option value="1">UP</option>
                <option value="0">DOWN</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Filter</button>
</form>
<script>
    $('#filter').on('shown.bs.modal', function () {
        $('.filter-select').select2(
            {
                dropdownParent: $('#filter')
            }
        );
    })
</script>