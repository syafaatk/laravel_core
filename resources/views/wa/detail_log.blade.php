  <!--  Modal content for the above example -->
  <div class="modal fade form-detailLogError" role="dialog" aria-labelledby="addLeaveType" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addLeaveType">Detail Log Error</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <div class="table-responsive maindiv"> 
            <table class="table table-hover table-bordered">

              <thead>
                <th>Trace</th>
                <th>Details</th>
              </thead>

              <tbody>
               <tr>
                <td><p id="detail-it_log_error_trace"></p></td>
                <td><p id="detail-it_log_error_json"></p></td>
              </tr>
            </tbody>
          </table>
          
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
  function detailLogError(){
    $(".ActDetailLogError").unbind();
    $('.ActDetailLogError').on('click', function(event) {
      event.preventDefault();

      let id = $(this).data('unique');
      let msg = "";

      $.getJSON(`{{ route('api.wa.log_error.find', ['id' => '']) }}/${id}`, function(data) { 
        msg = data.messages;
        console.log("msg", msg);

        $.each(msg, function(index, val) {
          $(`#detail-${index}`).val(val).trigger('change') ;
        });

        $('#detail-it_log_error_trace').text(msg.it_log_error_trace);
        $('#detail-it_log_error_json').text(msg.it_log_error_json);

      });
    });
  }
</script>