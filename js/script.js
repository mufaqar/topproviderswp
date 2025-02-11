document.getElementById('dropdownButton').addEventListener('click', function () {
	const dropdownMenu = document.getElementById('dropdownMenu');
	dropdownMenu.classList.toggle('hidden'); // Toggle visibility of the dropdown menu
  });

  // Get all the dropdown options
  document.querySelectorAll('#dropdownMenu ul li').forEach(function (item) {
	  item.addEventListener('click', function () {
		  const selectedOption = item.getAttribute('data-value'); // Get the value of the clicked item
		  const selectedTitle = item.getAttribute('data-title'); // Get the value of the clicked item
		  document.getElementById('dropdownSelected').innerText = selectedTitle; // Update the button text
		  document.getElementById('customSelect').value = selectedOption; // Update the hidden input value
		  document.getElementById('dropdownMenu').classList.add('hidden'); // Close the dropdown after selection
	  });
  });

  // Close dropdown if clicked outside
  document.addEventListener('click', function(event) {
	  const dropdownMenu = document.getElementById('dropdownMenu');
	  const dropdownButton = document.getElementById('dropdownButton');
	  if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
		  dropdownMenu.classList.add('hidden');
	  }
  });

  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();

            const formData = new FormData(form);

            fetch(ajax_object.ajax_url, {
                method: "POST",
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        alert("Form submitted successfully!");
                        form.reset();
                    } else {
                        alert("An error occurred: " + data.message);
                    }
                })
                .catch((error) => {
                    alert("An error occurred: " + error.message);
                });
        });
    }
});
