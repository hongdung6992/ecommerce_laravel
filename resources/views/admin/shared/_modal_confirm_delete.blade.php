<div class="modal fade custom-modal" id="delete" tabindex="-1" role="dialog" aria-labelledby="customModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">
          {{ t('modal_confirm_delete.header') }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>{{ t('modal_confirm_delete.content') }}</p>
        <p>{{ t('modal_confirm_delete.confirm') }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cancel" data-dismiss="modal">
          {{ t('modal_confirm_delete.close') }}
        </button>
        <button type="button" class="btn btn-primary ok" id="agree-delete" data-url="{{ route('user.delete') }}" data-dismiss="modal">
          {{ t('modal_confirm_delete.agree') }}
        </button>
      </div>
    </div>
  </div>
</div>