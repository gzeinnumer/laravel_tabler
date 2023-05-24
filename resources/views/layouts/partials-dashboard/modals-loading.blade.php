<div class="modal modal-blur fade" id="modal-loading" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            {{-- <div class="modal-status bg-success"></div> --}}
            <div class="modal-body text-center py-4">
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
                <h3>Loading...</h3>
                <div class="text-muted">msg</div>
            </div>
        </div>
    </div>
</div>
<script>
    function showModalLoading() {
        $('#modal-loading').modal({
            backdrop: 'static',
            keyboard: false
        });
        $('#modal-loading').modal('show');
    }

    function hideModalLoading() {
        $('#modal-loading').modal('hide');
    }
</script>
