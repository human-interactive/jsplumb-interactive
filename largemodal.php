<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('body').on('.bs-example-modal-lg', '.modal', function () {
          $(this).removeData('bs.modal');
      });
    });
    </script>