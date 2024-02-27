<form id="enquiry" class="col-lg-6 d-flex flex-column gap-4">
  <div class="form-group">
    <h2 class="mb-4">Stuur ons een bericht</h2>
  </div>

  <div class="form-group row d-flex gap-4">
    <input class="col-lg-5" type="text" name="naam" placeholder="Naam*" required>
    <input class="col-lg-5" type="text" name="voornaam" placeholder="Voornaam*" required>
  </div>

  <div class="form-group row d-flex gap-4">
    <input class="col-lg-5" type="email" name="email" placeholder="E-mail*" required>
    <select class="col-lg-5" name="onderwerp" id="subject" required>
      <i class="fa-solid fa-chevron-down"></i>
      <option value="opleiding">Vragen over de opleiding</option>
      <option value="leerbedrijf">Vragen over het leerbedrijf</option>
      <option value="opleiding">Vragen over werkplekleren</option>
    </select>
  </div>

  <div class="form-group row">
    <textarea name="bericht" id="message" placeholder="Schrijf hier uw boodschap..." required></textarea>
  </div>

  <div class="form-group row">
    <button type="submit" class="btn-yellow mt-4">
      Verzenden
    </button>
  </div>
</form>

<!-- Script -->
<script>
  (function ($) {
    $('#enquiry').submit(function (event) {
      event.preventDefault();

      var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
      console.log(endpoint);

      var form = $('#enquiry').serialize();

      var formdata = new FormData;

      formdata.append('action', 'enquiry');
      formdata.append('enquiry', form);

      $.ajax(endpoint, {
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        succes: function (res) {
          alert(res.data);
        },
        error: function (err) {

        }
      });
    })
  })(jQuery)
</script>