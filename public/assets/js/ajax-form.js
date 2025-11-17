// Wait for both jQuery and DOM to be ready
(function($) {
	$(document).ready(function () {
		// Wait a bit to ensure all scripts are loaded
		setTimeout(function() {
			// Get the form.
			var form = $('#contact-form');

			// Check if form exists
			if (form.length === 0) {
				console.log('Contact form not found');
				return;
			}

			// Get the messages div.
			var formMessages = $('.ajax-response');
			
			if (formMessages.length === 0) {
				console.log('Form messages div not found');
			}

			// Set up an event listener for the contact form.
			form.on('submit', function (e) {
				// Stop the browser from submitting the form.
				e.preventDefault();
				e.stopPropagation();

				// Disable submit button to prevent double submission
				var submitBtn = form.find('button[type="submit"]');
				var originalText = submitBtn.html();
				submitBtn.prop('disabled', true).html('<span>জমা দেওয়া হচ্ছে...</span>');

				// Create FormData object to handle file uploads
				var formData = new FormData(form[0]);

				// Submit the form using AJAX.
				$.ajax({
					type: 'POST',
					url: form.attr('action'),
					data: formData,
					processData: false,
					contentType: false,
					dataType: 'json',
					headers: {
						'X-Requested-With': 'XMLHttpRequest'
					}
				})
					.done(function (response) {
						// Re-enable submit button
						submitBtn.prop('disabled', false).html(originalText);

						// Make sure that the formMessages div has the 'success' class.
						formMessages.removeClass('error');
						formMessages.addClass('success');

						// Set the message text.
						var message = typeof response === 'string' ? response : (response.message || 'Success!');
						formMessages.text(message);

						// Clear the form.
						form.find('input[type="text"], input[type="email"], textarea').val('');
						form.find('select').prop('selectedIndex', 0);
						
						// Clear file input and reset visual state
						var fileInput = form.find('input[type="file"]');
						fileInput.val('');
						
						// Reset file upload area visual state
						var customLabel = form.find('.custom-file-label');
						if (customLabel.length) {
							customLabel.find('.file-upload-title').text('ফাইল নির্বাচন করুন অথবা এখানে টেনে আনুন');
							customLabel.find('.file-upload-area').css({
								'border-color': '#d0d0d0',
								'background-color': '#fafafa'
							});
						}
						
						// Clear file list display
						$('#file-list').empty();
						
						// Remove success message after 5 seconds
						setTimeout(function () {
							formMessages.empty().removeClass('success');
						}, 5000);
					})
					.fail(function (xhr, status, error) {
						// Re-enable submit button
						submitBtn.prop('disabled', false).html(originalText);

						// Make sure that the formMessages div has the 'error' class.
						formMessages.removeClass('success');
						formMessages.addClass('error');

						// Set the message text.
						var errorMessage = 'Oops! An error occured and your message could not be sent.';
						
						if (xhr.responseJSON && xhr.responseJSON.message) {
							errorMessage = xhr.responseJSON.message;
						} else if (xhr.responseJSON && xhr.responseJSON.errors) {
							var errors = [];
							$.each(xhr.responseJSON.errors, function(key, value) {
								if (Array.isArray(value)) {
									errors.push(value[0]);
								} else {
									errors.push(value);
								}
							});
							errorMessage = errors.join('<br>');
						} else if (xhr.responseText && xhr.responseText !== '') {
							try {
								var jsonResponse = JSON.parse(xhr.responseText);
								if (jsonResponse.message) {
									errorMessage = jsonResponse.message;
								}
							} catch(e) {
								if (xhr.responseText.length < 500) {
									errorMessage = xhr.responseText;
								}
							}
						} else if (status === 'error') {
							errorMessage = 'Network error. Please check your connection and try again.';
						}
						
						formMessages.html(errorMessage);
						// Remove error message after 5 seconds
						setTimeout(function () {
							formMessages.empty().removeClass('error');
						}, 5000);
					});
			});
		}, 100);
	});
})(jQuery);
