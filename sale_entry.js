$(document).ready(function() {
    $('form').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        var formData = new FormData(this);

        $.ajax({
            url: 'saleentry_sql.php',
            type: 'POST',
            data: formData,
            processData: false, // Don't process the files
            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
            dataType: 'json', // Expect JSON response
            success: function(response) {
                console.log(response);
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload(); // Reload the current page
                        }
                    });
                    
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message,
                        confirmButtonText: 'OK'
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while submitting the data.',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
      });
      $('#phone_no1').on('change', function () {
        var phone_no = $(this).val();

        $.ajax({
            url: 'check_phone_number.php',
            type: 'POST',
            data: { phone_no: phone_no },
            dataType: 'json',
            success: function (response) {
                if (response.status == 'error') {
                    alert(response.message); // Show error message
                    $('#phone_no1').focus(); // Focus back to the field
                } else {
                    // Populate the form fields with the retrieved data if available
                    $('#agent_name1').val(response.data.agent_name);
                    $('#agent_id1').val(response.data.agent_id);
                    $('#call_date1').val(response.data.call_date);
                    $('#alt_phoneno1').val(response.data.alt_phoneno);
                    $('#firstname1').val(response.data.firstname);
                    $('#lastname1').val(response.data.lastname);
                    $('#spouse_firstname1').val(response.data.spouse_firstname);
                    $('#mail1').val(response.data.mail);
                    $('#address1').val(response.data.address);
                    $('#City1').val(response.data.City);
                    $('#State1').val(response.data.State);
                    $('#Zipcode1').val(response.data.Zipcode);
                    $('#County1').val(response.data.County);
                    $('#elect_bill1').val(response.data.elect_bill);
                    $('#elect_company1').val(response.data.elect_company);
                    $('#shade1').val(response.data.shade);
                    $('#roof_type1').val(response.data.roof_type);
                    $('#household_income1').val(response.data.household_income);
                    // Populate other fields as necessary
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
